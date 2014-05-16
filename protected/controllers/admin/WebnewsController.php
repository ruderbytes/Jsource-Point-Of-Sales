<?php

class WebnewsController extends Controller
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
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow',
				'actions'=>array('manage','delete'),
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
		$model=new Webnews;

		if(isset($_POST['Webnews']))
		{
			$model->attributes=$_POST['Webnews'];
                        $model->webnews_created_at=date("Y-m-d H:i:s");
                        $model->webnews_created_by=Yii::app()->user->name;
			if($model->save())
                                Yii::app()->user->setFlash('crnews','<strong>Berhasil!</strong> Berita Telah Tertambah');
				$this->redirect(array('manage'));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		if(isset($_POST['Webnews']))
		{
			$model->attributes=$_POST['Webnews'];
                        $model->webnews_updated_at=date("Y-m-d H:i:s");
                        $model->webnews_updated_by=Yii::app()->user->name;
			if($model->save())
                                Yii::app()->user->setFlash('upnews','<strong>Berhasil!</strong> Berita Telah Di Update');
				$this->redirect(array('manage'));
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
            $this->layout='//layouts/column1';
		$dataProvider=new CActiveDataProvider('Webnews');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	public function actionManage()
	{
		$model=new Webnews('search');
		$model->unsetAttributes();
		if(isset($_GET['Webnews']))
			$model->attributes=$_GET['Webnews'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	public function loadModel($id)
	{
		$model=Webnews::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='webnews-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}