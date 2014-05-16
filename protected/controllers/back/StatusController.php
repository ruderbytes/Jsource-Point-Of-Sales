<?php

class StatusController extends Controller
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
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow',
				'actions'=>array('index','delete'),
				'expression'=>'$user->getLevel()<=2',
			),
			array('deny',
				'users'=>array('*'),
			),
		);
	}

	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		if(isset($_POST['Status']))
		{
			$model->attributes=$_POST['Status'];
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
		$model=new Status('search');
		$model->unsetAttributes();
                if(isset($_POST['Status']))
		{
			$model->attributes=$_POST['Status'];
			if($model->save())
				$this->redirect(array('index'));
		}
		if(isset($_GET['Status']))
			$model->attributes=$_GET['Status'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	public function loadModel($id)
	{
		$model=Status::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}
        
        protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='status-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}