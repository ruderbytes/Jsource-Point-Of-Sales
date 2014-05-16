<?php

class UsersController extends Controller
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
				'actions'=>array('create','update','changepassword'),
				'users'=>array('@'),
			),
			array('allow',
				'actions'=>array('admin','delete','edit','profile','userAutoComplete'),
				'expression'=>'$user->getLevel()<=2',
			),
			array('deny', 
				'users'=>array('*'),
			),
		);
	}

        public function actionUserAutoComplete()
	{
		$res =array();
		if (isset($_GET['term'])) {
			$qtxt ="SELECT username as label,id FROM users WHERE username LIKE :name ORDER BY username LIMIT 10";
			$command =Yii::app()->db->createCommand($qtxt);
			$command->bindValue(":name", '%'.$_GET['term'].'%', PDO::PARAM_STR);
			$res =$command->queryAll();

		}
		echo CJSON::encode($res);
	}
        
	public function actionView($id)
	{       
                $model=new Users;
                $model->id=Yii::app()->user->id;
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}
        
        public function actionProfile(){
                $this->render('profile');
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
                $this->redirect(array('view','id'=>$id));
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
	
        public function actionCreate()
	{
		$model=new Users;

		if(isset($_POST['Users']))
		{
			$model->attributes=$_POST['Users'];
                        $model->password=md5($_POST['Users']['password']);
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

        public function actionEdit()
        {
            $es = new EditableSaver('Users');
            $es->update();
        }
        

	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	public function actionIndex()
	{
		echo "Sorry You Can not Access This Page";
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