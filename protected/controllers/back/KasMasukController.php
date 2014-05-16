<?php

class KasMasukController extends Controller
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
				'actions'=>array('create','person','update','reportxls','reportpdf','reportxlsall','reportpdfall'),
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
                $model=new KasMasuk('search');
		$model->unsetAttributes();
                $mPDF1 = Yii::app()->ePdf->mpdf();
                $mPDF1->WriteHTML($this->renderPartial('pdfall',array(
			'model'=>$model,
		), true));
                $mPDF1->Output('bukti_kas_all',"I");
        }
        
        public function actionReportXlsAll()
	{       
                $model=new KasMasuk('search');
		$model->unsetAttributes();
                Yii::app()->request->sendFile('bukti_kas_all.xls',
                       $this->renderPartial('excelAll',array(
			'model'=>$model,
		)),true);
	}
        
        public function actionReportXls($id)
	{       
                Yii::app()->request->sendFile('bukti_kas_'.$id.'.xls',
                       $this->renderPartial('excel',array(
			'model'=>$this->loadModel($id),
		)),true);
	}
        
        public function actionReportPdf($id){
                $mPDF1 = Yii::app()->ePdf->mpdf();
                $mPDF1->WriteHTML($this->renderPartial('pdf',array(
			'model'=>$this->loadModel($id),
		), true));
                $mPDF1->Output('bukti_kas_'.$id,"I");
        }
        
        public function actionPerson($id)
	{
		$dataProvider=new CActiveDataProvider('KasMasuk',array(
                    'criteria'=>array(
                        'condition'=>'person_id ='.$id,
                    ),
                ));
		$this->render('person',array(
                        'dataProvider'=>$dataProvider,
			'model'=>$this->loadModel($id),
		));
	}
	public function actionView($id)
	{
                $dta=new KmDetails('search');
		$dta->unsetAttributes();
                $dta->km_id=$id;
                if(isset($_POST['KmDetails']))
		{
			$dta->attributes=$_POST['KmDetails'];
                        $dta->created_by=Yii::app()->user->id;
                        $dta->created_at=date("Y-m-d H:i:s");
			$dta->km_id=$id;
			if($dta->save())
                            $this->redirect(array('kasmasuk/view','id'=>$dta->km_id));
		}
		$this->render('view',array(
                        'dta'=>$dta,
			'model'=>$this->loadModel($id),
		));
	}

	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		if(isset($_POST['KasMasuk']))
		{
			$model->attributes=$_POST['KasMasuk'];
                        $model->updated_at=date("Y-m-d H:i:s");
                        $model->updated_by=Yii::app()->name->id;
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
                $model=new KasMasuk;

		if(isset($_POST['KasMasuk']))
		{
			$model->attributes=$_POST['KasMasuk'];
                        $model->created_at=date("Y-m-d H:i:s");
                        $model->created_by=Yii::app()->user->id;
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}
		$dataProvider=new CActiveDataProvider('KasMasuk');
		$this->render('index',array(
                        'model'=>$model,
			'dataProvider'=>$dataProvider,
		));
	}

	public function actionAdmin()
	{
		$model=new KasMasuk('search');
		$model->unsetAttributes();
		if(isset($_GET['KasMasuk']))
			$model->attributes=$_GET['KasMasuk'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	public function loadModel($id)
	{
		$model=KasMasuk::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='kas-masuk-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}