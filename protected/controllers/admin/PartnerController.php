<?php

class PartnerController extends Controller
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
				'actions'=>array('addnew','update'),
				'users'=>array('@'),
			),
			array('allow',
				'actions'=>array('delete'),
				'expression'=>'$user->getLevel()<=2',
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
        
	public function actionAddnew()
	{
		$model=new Partner;

		if(isset($_POST['Partner']))
		{
			$model->attributes=$_POST['Partner'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->Id_sup));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		if(isset($_POST['Partner']))
		{
			$model->attributes=$_POST['Partner'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->Id_sup));
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
		$model=new Partner('search');
		$model->unsetAttributes();
		if(isset($_GET['Partner']))
			$model->attributes=$_GET['Partner'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	public function loadModel($id)
	{
		$model=Partner::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='partner-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}