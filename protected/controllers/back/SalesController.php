<?php

class SalesController extends Controller
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
				'actions'=>array('index','delete','create','update','reportxlsAll','reportpdfAll'),
				'expression'=>'$user->getLevel()<=2',
			),
			array('deny',
				'users'=>array('*'),
			),
		);
	}
        
        public function actionReportPdfAll(){
                $model=new Sales('search');
		$model->unsetAttributes();
                $date=date("Y-m-d");
                $mPDF1 = Yii::app()->ePdf->mpdf();
                $mPDF1->WriteHTML($this->renderPartial('pdfall',array(
			'model'=>$model,
		), true));
                $mPDF1->Output('sales_'.$date,"I");
        }
        
        public function actionReportXlsAll()
	{       
                $model=new Sales('search');
		$model->unsetAttributes();
                $date=date("Y-m-d");
                Yii::app()->request->sendFile('sales_'.$date.'.xls',
                       $this->renderPartial('excelAll',array(
			'model'=>$model,
		)),true);
	}

	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		if(isset($_POST['Sales']))
		{
			$model->attributes=$_POST['Sales'];
			if($model->save())
				$this->redirect(array('index'));
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
		$model=new Sales('search');
		$model->unsetAttributes();
                if(isset($_POST['Sales']))
		{
			$model->attributes=$_POST['Sales'];
			if($model->save())
				$this->redirect(array('index'));
		}
		if(isset($_GET['Sales']))
			$model->attributes=$_GET['Sales'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	public function loadModel($id)
	{
		$model=Sales::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='sales-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}