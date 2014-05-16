<?php

class WebnewsController extends Controller
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

	public function actionIndex()
	{
            $this->layout='//layouts/column2';
            
            $criteria = new CDbCriteria();
                if(isset($_REQUEST['q']))
                {
                $q = $_REQUEST['q'];
                $criteria->compare('webnews_title', $q, true, 'OR');
                $criteria->compare('webnews_content', $q, true, 'OR');
                $criteria->compare('webnews_created_by', $q, true, 'OR');
                }
            
		$dataProvider=new CActiveDataProvider('Webnews',array(
                    'criteria'=>$criteria,
                    'sort'=>array(
                        'defaultOrder'=>'id DESC',
                    )
                ));
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

        public function loadModel($id)
	{
		$model=Webnews::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='webnews-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}