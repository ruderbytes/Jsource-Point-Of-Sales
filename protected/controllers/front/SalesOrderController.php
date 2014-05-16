<?php

class SalesOrderController extends Controller
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
				'actions'=>array('index'),
				'users'=>array('*'),
			),
			array('allow',
				'actions'=>array('create','update','view'),
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

	public function actionCreate()
	{
		$model=new SalesOrder;

		if(isset($_POST['SalesOrder']))
		{
			$model->attributes=$_POST['SalesOrder'];
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

		if(isset($_POST['SalesOrder']))
		{
			$model->attributes=$_POST['SalesOrder'];
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
                $criteria = new CDbCriteria();
                if(isset($_REQUEST['q']))
                {
                $q = $_REQUEST['q'];
                $criteria->compare('id', $q, true, 'OR');
                $criteria->compare('location', $q, true, 'OR');
                $criteria->compare('needed', $q, true, 'OR');
                $criteria->compare('sales_name', $q, true, 'OR');
                $criteria->compare('created_at', $q, true, 'OR');
                }
		$dataProvider=new CActiveDataProvider('SalesOrder',array(
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
		$model=new SalesOrder('search');
		$model->unsetAttributes();
		if(isset($_GET['SalesOrder']))
			$model->attributes=$_GET['SalesOrder'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	public function loadModel($id)
	{
		$model=SalesOrder::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='sales-order-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}