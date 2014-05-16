<?php

class UsersController extends Controller
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
				'actions'=>array('signup','index','view'),
				'users'=>array('*'),
			),
			array('allow',
				'actions'=>array('update','profile','changePassword'),
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
        
        public function actionProfile() {
                $model=new Advertising('search');
		$model->unsetAttributes();
                $model->parent_id=Yii::app()->user->id;
                if(isset($_GET['Advertising']))
			$model->attributes=$_GET['Advertising'];
                $this->render('profile',array(
                    'model'=>$model,
                ));
        }
        
        public function actionChangePassword($id){   
            
            $user = Users::model()->findByPk($id);
            $user_id = $user->id;   
            if ($user_id != NULL) {
            $model=$this->loadModel($user_id);
            if(isset($_POST['Users']))
            {
                $model->password=md5($_POST['Users']['password']);
                if($model->save())
                $id = Yii::app()->user->getid();
                $this->redirect(array('view','id'=>$id));
            }
            if(Yii::app()->user->getid()==$id)
            {
            $this->render('changePassword',array(
            'model'=>$this->loadModel($user_id),
            )); 
            }
            }
        }

        public function actionSignup()
	{
		$model=new Users;

		if(isset($_POST['Users']))
		{
			$model->attributes=$_POST['Users'];
                        $model->password=md5($_POST['Users']['password']);
                        $model->level_id=3;
                        $showm=Users::Model()->findAll(array(
                                'select'=>'*',
                        ));
                        
                        foreach($showm as $modelx): 
                                $notvalid=($_POST['Users']['username']==$modelx->username);
                        endforeach;
                        if($notvalid){
                                Yii::app()->user->setFlash('pusernametaken','<strong>Maaf !</strong>,Username telah terdaftar');   
                        }else{
			if($model->save())
                                Yii::app()->user->setFlash('pusernameok','<strong>Selamat !</strong>,Kini anda telah terdaftar');
				$this->redirect(array('signup'));
                        }
                        
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	public function actionUpdate($id)
	{
            $user = Users::model()->findByPk($id);
            $user_id = $user->id;   
            if ($user_id != NULL) {
            $model=$this->loadModel($user_id);
            if(isset($_POST['Users']))
            {
                $model->attributes=$_POST['Users'];
                if($model->save())
                $id = Yii::app()->user->getid();
                $this->redirect(array('profile'));
            }
            if(Yii::app()->user->getid()==$id)
            {
            $this->render('update',array(
            'model'=>$this->loadModel($user_id),
            )); 
            }
            elseif(Yii::app()->user->getid()!=$id)
            {
            $id = Yii::app()->user->getid();
            $this->redirect(array('view','id'=>$id));
            }
            else
            {
            $model=new Users;
            if(isset($_POST['ajax']) && $_POST['ajax']==='users-form')
            {
            echo CActiveForm::validate($model);
            Yii::app()->end();
            }
            if(isset($_POST['Users']))
            {
                $model->id=Yii::app()->user->getid();
                $model->attributes=$_POST['Users'];
                if($model->save())
                $this->redirect(array('view','id'=>$id));
            }
                $this->render('update',array('model'=>$model));
            }
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
		$dataProvider=new CActiveDataProvider('Users');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	public function actionAdmin()
	{
		$model=new Users('search');
		$model->unsetAttributes();
		if(isset($_GET['Users']))
			$model->attributes=$_GET['Users'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	public function loadModel($id)
	{
		$model=Users::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='users-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}