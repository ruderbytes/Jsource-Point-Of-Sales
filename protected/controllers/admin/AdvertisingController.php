<?php

class AdvertisingController extends Controller
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
				'actions'=>array('index','delete'),
				'expression'=>'$user->getLevel()<=2',
			),
			array('deny', 
				'users'=>array('*'),
			),
		);
	}

	
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	public function actionIndex()
	{
		$model=new Advertising('search');
		$model->unsetAttributes();
		if(isset($_GET['Advertising']))
			$model->attributes=$_GET['Advertising'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	public function loadModel($id)
	{
		$model=Advertising::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='advertising-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}