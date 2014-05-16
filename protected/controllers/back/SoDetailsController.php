<?php

class SoDetailsController extends Controller
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
				'actions'=>array('create','update'),
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

	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	public function actionCreate()
	{
		$model=new SoDetails;

		if(isset($_POST['SoDetails']))
		{
			$model->attributes=$_POST['SoDetails'];
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

		if(isset($_POST['SoDetails']))
		{
			$model->attributes=$_POST['SoDetails'];
                        $item = Item::model()->findByPk($model->item_code);
			$model->item_name = $item->ITEM_NAME;
                        $model->c_price = $item->C_PRICE;
                        $amount=$_POST['SoDetails']['qty']*$item->C_PRICE;
                        $model->total=$amount;
                        if($model->save())
				$this->redirect(array('salesorder/'.$model->so_id));
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
		$dataProvider=new CActiveDataProvider('SoDetails');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	public function actionAdmin()
	{
		$model=new SoDetails('search');
		$model->unsetAttributes();
		if(isset($_GET['SoDetails']))
			$model->attributes=$_GET['SoDetails'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	public function loadModel($id)
	{
		$model=SoDetails::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='so-details-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}