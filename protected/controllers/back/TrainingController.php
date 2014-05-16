<?php

class TrainingController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

 
public function actionCalendar()
    {
        $model=new Training('search');
        $model->unsetAttributes();  // clear any default values
        if(isset($_GET['Training']))
            $model->attributes=$_GET['Training'];
        $this->render('calendar',array(
            'model'=>$model,
        )); 
    }
 
    public function actionCalendarEvents()
    {       
        $items = array();
        $model=Training::model()->findAll();    
        foreach ($model as $value) {
            $items[]=array(
                'id'=>$value->id,
                'title'=>$value->nama,
                'start'=>$value->start,
                'end'=>date('Y-m-d', strtotime('+1 day', strtotime($value->finish))),
                //'color'=>'#CC0000',
                //'allDay'=>true,
                'url'=>'#',
            );
        }
        echo CJSON::encode($items);
        Yii::app()->end();
    }
	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('admin','create','update','calendarEvents','Calendar'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

        public function actionView($id)
    {
 
        if (@$_GET['asModal']==true)
        {
            $this->renderPartial('view',
                array('model'=>$this->loadModel($id)),false,true
            );
        }
        else{
            $this->layout = 'column2';
            $this->render('view',array(
                'model'=>$this->loadModel($id),
            ));
        }
    }
	
        public function actionCreate()
	{
		$model=new Training;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Training']))
		{
			$model->attributes=$_POST['Training'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Training']))
		{
			$model->attributes=$_POST['Training'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Training');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Training('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Training']))
			$model->attributes=$_GET['Training'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Training the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Training::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Training $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='training-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
