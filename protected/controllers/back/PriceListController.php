<?php

class PriceListController extends Controller
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

        public function actionCreate($id)
	{
		$model=new PriceList;

		if(isset($_POST['PriceList']))
		{
			$model->attributes=$_POST['PriceList'];
                        $model->created_by=Yii::app()->user->id;
                        $model->item_id=$id;
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

		if(isset($_POST['PriceList']))
		{
			$model->attributes=$_POST['PriceList'];
                        $model->updated_by=Yii::app()->user->id;
                        $model->updated_at=date("Y-m-d H:i:s");
			if($model->save())
				$this->redirect(array('item/'.$model->item_id));
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
		$dataProvider=new CActiveDataProvider('PriceList');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	public function actionAdmin()
	{
		$model=new PriceList('search');
		$model->unsetAttributes();
		if(isset($_GET['PriceList']))
			$model->attributes=$_GET['PriceList'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	public function loadModel($id)
	{
		$model=PriceList::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='price-list-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}