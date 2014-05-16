<?php

class ItemController extends Controller
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
				'actions'=>array('create','update','reportXls','UpPicture','reportPdf','adminPdf','reportPdfAll','reportXlsAll'),
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
                $model=new Item('search');
		$model->unsetAttributes();
                $mPDF1 = Yii::app()->ePdf->mpdf();
                $mPDF1->WriteHTML($this->renderPartial('pdfall',array(
			'model'=>$model,
		), true));
                $mPDF1->Output('item_all',"I");
        }
        
        public function actionReportXlsAll()
	{       
                $model=new Item('search');
		$model->unsetAttributes();
                Yii::app()->request->sendFile('item_all.xls',
                       $this->renderPartial('excelAll',array(
			'model'=>$model,
		)),true);
	}
        
	public function actionView($id)
	{
                $ank=new PriceList('search');
		$ank->unsetAttributes();
		$ank->item_id=$id;
                if(isset($_POST['PriceList']))
		{
			$ank->attributes=$_POST['PriceList'];
                        $ank->created_at=date("Y-m-d H:i:s");
                        $ank->created_by=Yii::app()->user->id;
                        $ank->item_id=$id;
			if($ank->save()){
				$this->redirect(array('view','id'=>$ank->item_id));
                        }
		}
		$this->render('view',array(
			'model'=>$this->loadModel($id),
                        'ank'=>$ank,
		));
	}
        
        public function actionReportXls($id)
	{       
                Yii::app()->request->sendFile('item_'.$id.'.xls',
                       $this->renderPartial('excel',array(
			'model'=>$this->loadModel($id),
		)),true);/*
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));*/
	}
        
        public function actionReportPdf($id){
                $mPDF1 = Yii::app()->ePdf->mpdf();
                $mPDF1->WriteHTML($this->renderPartial('pdf',array(
			'model'=>$this->loadModel($id),
		), true));
                $mPDF1->Output('item_'.$id,"I");
        }
        
        public function actionCreate()
	{
		$model=new Item;

		if(isset($_POST['Item']))
		{
			$model->attributes=$_POST['Item'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->ITEM_ID));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

        public function actionUpPicture($id)
	{
		$model=$this->loadModel($id);

		if(isset($_POST['Item']))
		{
			$model->attributes=$_POST['Item'];
                        //$model->C_PRICE=$_POST['Item']['GAMBAR'];
                        $model->GAMBAR=CUploadedFile::getInstance($model,'GAMBAR');
                        $model->LAST_UPDATE_DATE=date("Y-m-d H:i:s");	
                        $model->LAST_UPDATE_BY=Yii::app()->user->id;
			if($model->save())
                            $model->GAMBAR->saveAs(Yii::app()->basePath.'/../images/upload/' . $model->GAMBAR);
				$this->redirect(array('view','id'=>$model->ITEM_ID));
		}

		$this->render('uppict',array(
			'model'=>$model,
                        'model1'=>$this->loadModel($id),
		));
	}
        
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		if(isset($_POST['Item']))
		{
			$model->attributes=$_POST['Item'];
                        $model->C_PRICE=$_POST['Item']['C_PRICE'];
                        $model->LAST_UPDATE_DATE=date("Y-m-d H:i:s");	
                        $model->LAST_UPDATE_BY=Yii::app()->user->id;
			if($model->save())
				$this->redirect(array('view','id'=>$model->ITEM_ID));
		}

		$this->render('update',array(
			'model'=>$model,
                        'model1'=>$this->loadModel($id),
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
            $model=new Item;
            $modelpri=new PriceList;

		if(isset($_POST['Item'],$_POST['PriceList']))
		{
			$model->attributes = $_POST['Item'];
                        $modelpri->attributes = $_POST['PriceList'];
        
                        $fav=Item::Model()->findAll(array(
                        'select'=>'*',
                        ),'ORDER BY ITEM_ID DESC');
                        foreach($fav as $f):
                            $modelpri->item_id = $f->ITEM_ID+1;
                        endforeach;
                        $model->C_PRICE = $modelpri->price;// go to default
                        $model->CREATED_BY = Yii::app()->user->id;
                        $model->CREATED_DATE = date("Y-m-d H:i:s");
                        $model->GAMBAR=CUploadedFile::getInstance($model,'GAMBAR');
			if($model->save()){
                            $model->GAMBAR->saveAs(Yii::app()->basePath.'/../images/upload/' . $model->GAMBAR);
                            if($modelpri->save())
				$this->redirect(array('view','id'=>$model->ITEM_ID));
                        }
		}
                
		$dataProvider=new CActiveDataProvider('Item',  array(
                    'sort'=>array(
                        'defaultOrder'=>'ITEM_ID DESC',
                    ),
                    'pagination'=>array(
                            'pageSize'=>20
                            
                    ),));
                
                if (!Yii::app()->user->isGuest){
                $this->render('index',array(
                        'model'=>$model,
			'dataProvider'=>$dataProvider,
		)); 
                }else{
                    $this->redirect(Yii::app()->homeUrl);
                }
		
	}

	public function actionAdmin()
	{
		$model=new Item('search');
		$model->unsetAttributes(); 
		if(isset($_GET['Item']))
			$model->attributes=$_GET['Item'];
		$this->render('admin',array(
			'model'=>$model,
		));
	}
        
        public function actionAdminPdf(){
            $model=new Item('search');
		$model->unsetAttributes(); 
		if(isset($_GET['Item']))
			$model->attributes=$_GET['Item'];

                $mPDF1 = Yii::app()->ePdf->mpdf();
                $mPDF1->WriteHTML($this->renderPartial('admin',array(
			'model'=>$model,
		), true));
                $mPDF1->Output();
        }
	
        public function loadModel($id)
	{
		$model=Item::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'
                            Page Not Found.
                            ');
		return $model;
	}

	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='item-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
