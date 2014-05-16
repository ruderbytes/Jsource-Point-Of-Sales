<?php

class DownloadController extends Controller
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
				'actions'=>array('create','update','view'),
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

	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	public function actionCreate()
	{
		$model=new Download;

		if(isset($_POST['Download']))
		{
			$model->attributes=$_POST['Download'];
                        $model->path=CUploadedFile::getInstance($model,'path');
			if($model->save())
                                $model->path->saveAs(Yii::app()->basePath.'/../files_download/' . $model->path);
				$this->redirect(array('index'));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		if(isset($_POST['Download']))
		{
			$model->attributes=$_POST['Download'];
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
		$model=new Download('search');
		$model->unsetAttributes();
		if(isset($_GET['Download']))
			$model->attributes=$_GET['Download'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	public function loadModel($id)
	{
		$model=Download::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='download-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}