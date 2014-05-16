<?php

class TpPaymentController extends Controller
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
				'actions'=>array('index','delete','update'),
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

		if(isset($_POST['TpPayment']))
		{
			$model->attributes=$_POST['TpPayment'];
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
		$model=new TpPayment('search');
		$model->unsetAttributes();
           	if(isset($_POST['TpPayment']))
		{
			$model->attributes=$_POST['TpPayment'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		if(isset($_GET['TpPayment']))
			$model->attributes=$_GET['TpPayment'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	public function loadModel($id)
	{
		$model=TpPayment::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='tp-payment-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}