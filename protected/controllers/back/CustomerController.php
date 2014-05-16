<?php

class CustomerController extends Controller
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
				'actions'=>array('addnew','change','reportXls','reportPdf'),
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

	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	public function actionAddNew()
	{
		$model=new Customer;
		if(isset($_POST['Customer']))
		{
			$model->attributes=$_POST['Customer'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_cus));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	public function actionChange($id)
	{
		$model=$this->loadModel($id);

		if(isset($_POST['Customer']))
		{
			$model->attributes=$_POST['Customer'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_cus));
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
		$model=new Customer('search');
		$model->unsetAttributes();
		if(isset($_GET['Customer']))
			$model->attributes=$_GET['Customer'];

		$this->render('manage',array(
			'model'=>$model,
		));
	}
        
        public function actionReportXls()
	{       
                $model=new Customer('search');
		$model->unsetAttributes();
                Yii::app()->request->sendFile('customers.xls',
                       $this->renderPartial('excel',array(
			'model'=>$model,
		)),true);
	}
        
        public function actionReportPdf(){
            $model=new Customer('search');
		$model->unsetAttributes();
                $mPDF1 = Yii::app()->ePdf->mpdf();
                $mPDF1->WriteHTML($this->renderPartial('pdf',array(
			'model'=>$model,
		), true));
                $mPDF1->Output('customers',"I");
        }

	public function loadModel($id)
	{
		$model=Customer::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='customer-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}