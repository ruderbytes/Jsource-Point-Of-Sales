<?php

class PelunasanController extends Controller
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

	public function actionCreate()
	{
		$model=new Pelunasan;

		if(isset($_POST['Pelunasan']))
		{
			$model->attributes=$_POST['Pelunasan'];
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

		if(isset($_POST['Pelunasan']))
		{
			$model->attributes=$_POST['Pelunasan'];
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
		$model=new Pelunasan;
		if(isset($_POST['Pelunasan']))
		{
                        $pelunasan=SalesOrder::model()->findByPk($_POST['Pelunasan']['no_so']);
			$model->attributes=$_POST['Pelunasan'];
                        $model->dibuat_oleh=Yii::app()->user->id;
                        $pelunasan->id=$_POST['Pelunasan']['no_so'];
                        $pelunasan->status_beli='lunas';
                        $model->kembali=$_POST['Pelunasan']['total_bayar']-$pelunasan->total;
			if($model->save() && $pelunasan->save())
				$this->redirect(array('index'));
		}

		$dataProvider=new CActiveDataProvider('Pelunasan');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
                        'model'=>$model,
		));
	}

	public function actionAdmin()
	{
		$model=new Pelunasan('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Pelunasan']))
			$model->attributes=$_GET['Pelunasan'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	public function loadModel($id)
	{
		$model=Pelunasan::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='pelunasan-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}