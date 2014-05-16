<?php

class WebseoController extends Controller
{
	public $layout='//layouts/column2';

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
				'actions'=>array('company','contact','seo','home'),
				'users'=>array('@'),
			),
			array('allow',
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',
				'users'=>array('*'),
			),
		);
	}

	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}
        
        public function actionHome($id=1)
	{
		$model=$this->loadModel($id);

		if(isset($_POST['Webseo']))
		{
			$model->attributes=$_POST['Webseo'];
			if($model->save())
                                Yii::app()->user->setFlash('phome','Data Tersimpan.');
				$this->redirect(array('home'));
		}

		$this->render('uhome',array(
			'model'=>$model,
		));
	}
        
        public function actionSeo($id=1)
	{
		$model=$this->loadModel($id);

		if(isset($_POST['Webseo']))
		{
			$model->attributes=$_POST['Webseo'];
			if($model->save())
                                Yii::app()->user->setFlash('pseo','Data Tersimpan.');
				$this->redirect(array('seo'));
		}

		$this->render('useo',array(
			'model'=>$model,
		));
	}
        
         public function actionCompany($id=1)
	{
		$model=$this->loadModel($id);

		if(isset($_POST['Webseo']))
		{
			$model->attributes=$_POST['Webseo'];
			if($model->save())
                                Yii::app()->user->setFlash('pcompany','Data Tersimpan.');
				$this->redirect(array('company'));
		}

		$this->render('ucompany',array(
			'model'=>$model,
		));
	}
        
        public function actionContact($id=1)
	{
		$model=$this->loadModel($id);

		if(isset($_POST['Webseo']))
		{
			$model->attributes=$_POST['Webseo'];
			if($model->save())
                                Yii::app()->user->setFlash('pcontact','Data Tersimpan.');
				$this->redirect(array('contact'));
		}

		$this->render('ucontact',array(
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
		$dataProvider=new CActiveDataProvider('Webseo');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	public function actionAdmin()
	{
		$model=new Webseo('search');
		$model->unsetAttributes();
		if(isset($_GET['Webseo']))
			$model->attributes=$_GET['Webseo'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	public function loadModel($id)
	{
		$model=Webseo::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='webseo-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}