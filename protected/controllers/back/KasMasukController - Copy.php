<?php

class KasMasukController extends Controller
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
				'actions'=>array('create','person','update'),
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

        public function actionPerson($id)
	{
		$dataProvider=new CActiveDataProvider('KasMasuk',array(
                    'criteria'=>array(
                        'condition'=>'person_id ='.$id,
                    ),
                ));
                $has=new KmDetails('search');
		$has->unsetAttributes();
                $has->km_id=$id;
		$this->render('person',array(
                        'has'=>$has,
                        'dataProvider'=>$dataProvider,
			'model'=>$this->loadModel($id),
		));
	}
	public function actionView($id)
	{
                $dta=new KmDetails('search');
		$dta->unsetAttributes();
                $dta->km_id=$id;
                if(isset($_POST['KmDetails']))
		{
			$dta->attributes=$_POST['KmDetails'];
                        $dta->created_by=Yii::app()->user->id;
                        $dta->created_at=date("Y-m-d H:i:s");
			$dta->km_id=$id;
			if($dta->save())
                            $this->redirect(array('kasmasuk/view','id'=>$dta->km_id));
		}
		$this->render('view',array(
                        'dta'=>$dta,
			'model'=>$this->loadModel($id),
		));
	}

	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		if(isset($_POST['KasMasuk']))
		{
			$model->attributes=$_POST['KasMasuk'];
                        $model->updated_at=date("Y-m-d H:i:s");
                        $model->updated_by=Yii::app()->name->id;
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
                $model=new KasMasuk;

		if(isset($_POST['KasMasuk']))
		{
			$model->attributes=$_POST['KasMasuk'];
                        $model->created_at=date("Y-m-d H:i:s");
                        $model->created_by=Yii::app()->user->id;
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}
		$dataProvider=new CActiveDataProvider('KasMasuk');
		$this->render('index',array(
                        'model'=>$model,
			'dataProvider'=>$dataProvider,
		));
	}

	public function actionAdmin()
	{
		$model=new KasMasuk('search');
		$model->unsetAttributes();
		if(isset($_GET['KasMasuk']))
			$model->attributes=$_GET['KasMasuk'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	public function loadModel($id)
	{
		$model=KasMasuk::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='kas-masuk-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}