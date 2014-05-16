<?php

class EmployeeController extends Controller
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
				'actions'=>array('create','update','reportXls','reportPdf'),
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
        
        public function actionReportXls()
	{       
                $model=new Employee('search');
		$model->unsetAttributes();
                Yii::app()->request->sendFile('employee_list.xls',
                       $this->renderPartial('excel',array(
			'model'=>$model,
		)),true);
	}
        
        public function actionReportPdf(){
                $model=new Employee('search');
                $model->unsetAttributes();
                $mPDF1 = Yii::app()->ePdf->mpdf();
                $mPDF1->WriteHTML($this->renderPartial('pdf',array(
			'model'=>$model,
		), true));
                $mPDF1->Output('employee_list',"I");
        }

	public function actionCreate()
	{
		$model=new Employee;

		if(isset($_POST['Employee']))
		{
			$model->attributes=$_POST['Employee'];
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

		if(isset($_POST['Employee']))
		{
			$model->attributes=$_POST['Employee'];
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

	public function actionAdmin()
	{
		$model=new Employee('search');
		$model->unsetAttributes();
		if(isset($_GET['Employee']))
			$model->attributes=$_GET['Employee'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	public function loadModel($id)
	{
		$model=Employee::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='employee-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}