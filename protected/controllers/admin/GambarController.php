<?php

class GambarController extends Controller
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
		$model=new Gambar('search');
		$model->unsetAttributes();
           	if(isset($_POST['Gambar']))
		{
			$model->attributes=$_POST['Gambar'];
                        $model->uploaded=date("Y-m-d H:i:s");
                        $model->file_gbr=CUploadedFile::getInstance($model,'file_gbr');
			if($model->save())
                            $model->file_gbr->saveAs(Yii::app()->basePath.'/../images/files_img/' . $model->file_gbr);
				$this->redirect(array('index'));
		}

		if(isset($_GET['Gambar']))
			$model->attributes=$_GET['Gambar'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	public function loadModel($id)
	{
		$model=Gambar::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='gambar-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}