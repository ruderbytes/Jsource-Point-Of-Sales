<?php

class SetappController extends Controller
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
				'actions'=>array(),
				'users'=>array('*'),
			),
			array('allow',
				'actions'=>array(),
				'users'=>array('@'),
			),
			array('allow',
				'actions'=>array('index','update'),
				'expression'=>'$user->getLevel()<=2',
			),
			array('deny', 
				'users'=>array('*'),
			),
		);
	}

	public function actionUpdate($id=1)
	{
		$model=$this->loadModel($id);

		if(isset($_POST['Setapp']))
		{
			$model->attributes=$_POST['Setapp'];
			if($model->save())
				$this->redirect(array('index'));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	public function actionIndex($idc=1)
	{   
            $this->render('config',array(
			'model'=>$this->loadModel($idc),
		));
        }

	public function loadModel($id)
	{
		$model=Setapp::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='setapp-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
