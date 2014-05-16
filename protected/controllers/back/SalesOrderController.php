<?php

class SalesOrderController extends Controller
{
	public $layout='//layouts/column1';

	public function filters()
	{
		return array(
			'accessControl',
			'postOnly + delete',
		);
	}

	public function accessRules()
	{
		return array(
			array('allow',
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow',
				'actions'=>array('create','update','reportXls','reportPdf','reportxlsAll','reportpdfAll'),
				'users'=>array('@'),
			),
			array('allow',
				'actions'=>array('admin','delete'),
				'expression'=>'$user->getLevel()<=2',
			),
			array('deny', 
				'users'=>array('*'),
			),
		);
	}
        
        public function actionReportPdfAll(){
                $model=new SalesOrder('search');
		$model->unsetAttributes();
                $date=date("Y-m-d");
                $mPDF1 = Yii::app()->ePdf->mpdf();
                $mPDF1->WriteHTML($this->renderPartial('pdfall',array(
			'model'=>$model,
		), true));
                $mPDF1->Output('sales_order_'.$date,"I");
        }
        
        public function actionReportXlsAll()
	{       
                $model=new SalesOrder('search');
		$model->unsetAttributes();
                $date=date("Y-m-d");
                Yii::app()->request->sendFile('sales_order_'.$date.'.xls',
                       $this->renderPartial('excelAll',array(
			'model'=>$model,
		)),true);
	}
        
        public function actionReportXls($id)
	{       
                Yii::app()->request->sendFile('so_'.$id.'.xls',
                       $this->renderPartial('excel',array(
			'model'=>$this->loadModel($id),
		)),true);
	} 
        
        public function actionReportPdf($id){
                $mPDF1 = Yii::app()->ePdf->mpdf();
                $mPDF1->WriteHTML($this->renderPartial('pdf',array(
			'model'=>$this->loadModel($id),
		), true));
                $mPDF1->Output('so_'.$id,"I");
        }
        
	public function actionView($id)
	{
                $soa=new SoDetails('search');
		$soa->unsetAttributes();
                $soa->so_id=$id;
                if(isset($_POST['SoDetails']))
		{
			$soa->attributes=$_POST['SoDetails'];
                        
                        $appf=Item::Model()->findAll(array(
                        'select'=>'*',
                        'condition'=>'ITEM_ID=:iditem',
                        'params'=>array(':iditem'=>$_POST['SoDetails']['item_code']),
                        ),'ORDER BY ITEM_ID DESC');
                        foreach($appf as $app):
                            $soa->item_name = $app->ITEM_NAME;
                            $soa->c_price = $app->C_PRICE;
                            $amount=$_POST['SoDetails']['qty']*$app->C_PRICE;
                            $soa->total=$amount;
                        endforeach;
                        
			$soa->so_id=$id;
			if($soa->save())
                            $this->redirect(array('salesorder/view','id'=>$soa->so_id));
		}
		$this->render('view',array(
                        'soa'=>$soa,
			'model'=>$this->loadModel($id),
		));
	}

	public function actionCreate()
	{
		$model=new SalesOrder;

		if(isset($_POST['SalesOrder']))
		{
			$model->attributes=$_POST['SalesOrder'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		if(isset($_POST['SalesOrder']))
		{
			$model->attributes=$_POST['SalesOrder'];
                        $model->updated_by=Yii::app()->user->id;;
                        $model->updated_at=date("Y-m-d H:i:s");
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

        public function actionIndex()
	{
      		$model=new SalesOrder;

		if(isset($_POST['SalesOrder']))
		{
			$model->attributes=$_POST['SalesOrder'];
                        $apps=Customer::Model()->findAll(array(
                        'select'=>'*',
                        'condition'=>'id_cus=:idc',
                        'params'=>array(':idc'=>$_POST['SalesOrder']['customer_name']),
                        ),'ORDER BY id_cus DESC');
                        foreach($apps as $app):
                            $model->location=$app->calamat1;
                        endforeach;
                        $model->created_at=date("Y-m-d H:i:s");
                        $model->created_by=Yii::app()->user->id;
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}
                $criteria = new CDbCriteria();
                if(isset($_REQUEST['q']))
                {
                $q = $_REQUEST['q'];
                $criteria->compare('customer_name', $q, true, 'OR');
                $criteria->compare('sales_name', $q, true, 'OR');
                $criteria->compare('needed', $q, true, 'OR');
                }
		$dataProvider=new CActiveDataProvider('SalesOrder',array(
                    'criteria'=>$criteria,
                    'sort'=>array(
                        'defaultOrder'=>'id DESC',
                    )));
                $dataReport=SalesOrder::model()->ambilReport();
                if(isset($_REQUEST['cetakXls'])){
                        $from=$_REQUEST['from'];
                        $until=$_REQUEST['until'];
                       Yii::app()->request->sendFile('periode_'.$from.'-'.$until.'.xls',
                       $this->renderPartial('tanggal',array(
			'dataReport'=>$dataReport,
                       )),true);
                
                }
                if(isset($_REQUEST['cetakPdf'])){
                        $from=$_REQUEST['from'];
                        $until=$_REQUEST['until'];
                       $mPDF1 = Yii::app()->ePdf->mpdf();
                        $mPDF1->WriteHTML($this->renderPartial('tanggal',array(
			'dataReport'=>$dataReport,
                        ), true));
                        $mPDF1->Output('periode_'.$from.'-'.$until,"I");
                
                }
		$this->render('index',array(
                        'model'=>$model,
			'dataProvider'=>$dataProvider,
                        'dataReport'=>$dataReport,
		));
	}

        public function actionAdmin()
	{
		$model=new SalesOrder('search');
		$model->unsetAttributes(); 
		if(isset($_GET['SalesOrder']))
			$model->attributes=$_GET['SalesOrder'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	public function loadModel($id)
	{
		$model=SalesOrder::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='sales-order-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}