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
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow',
				'actions'=>array('create','update','delete','changePicture'),
				'users'=>array('@'),
			),
			array('allow',
				'actions'=>array('admin'),
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
        public function actionChangePicture($id)
        {
            $model=$this->loadModel($id);
                $id_user=Yii::app()->user->id;
                if($model->parent_id==$id_user){
		if(isset($_POST['Advertising']))
		{
			$model->attributes=$_POST['Advertising'];
                        $model->avatar=CUploadedFile::getInstance($model,'avatar');
			if($model->save())
                                $model->avatar->saveAs(Yii::app()->basePath.'/../iklan/' . $model->avatar);
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('changePicture',array(
			'model'=>$model,
		));
                }else{
                    $this->redirect(array('users/profile'));
                }
        }

        public function actionCreate()
	{
		$model=new Advertising;

		if(isset($_POST['Advertising']))
		{
			$model->attributes=$_POST['Advertising'];
                        $model->parent_id=  Yii::app()->user->id;
                        $model->created_at=date("Y-m-d H:i:s");
                        $model->avatar=CUploadedFile::getInstance($model,'avatar');
			if($model->save())
                                $model->avatar->saveAs(Yii::app()->basePath.'/../iklan/' . $model->avatar);
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);
                $id_user=Yii::app()->user->id;
                if($model->parent_id==$id_user){
		if(isset($_POST['Advertising']))
		{
			$model->attributes=$_POST['Advertising'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
                }else{
                    $this->redirect(array('users/profile'));
                }
	}

	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	public function actionIndex()
	{
                $criteria = new CDbCriteria();
                if(isset($_REQUEST['q']))
                {
                $q = $_REQUEST['q'];
                $criteria->compare('judul', $q, true, 'OR');
                $criteria->compare('nama', $q, true, 'OR');
                $criteria->compare('kota', $q, true, 'OR');
                $criteria->compare('provinsi', $q, true, 'OR');
                }  
		$dataProvider=new CActiveDataProvider('Advertising',array(
                    'criteria'=>$criteria,
                    'sort'=>array(
                        'defaultOrder'=>'id DESC',
                    )
                ));
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	public function actionAdmin()
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