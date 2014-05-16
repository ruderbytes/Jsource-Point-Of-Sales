<?php

class LanguageController extends Controller
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
				'actions'=>array('update','index'),
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

	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	public function actionIndex()
	{
                $smodel=new Language;
		if(isset($_POST['Language']))
		{
			$smodel->attributes=$_POST['Language'];
			if($smodel->save())
                                Yii::app()->user->setFlash('plang','Language Tertambah.');
				$this->redirect('index');
		}
            
            
		$model=new Language('search');
		$model->unsetAttributes();
		if(isset($_GET['Language']))
			$model->attributes=$_GET['Language'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	public function loadModel($id)
	{
		$model=Language::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='language-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}