<?php

class SiteController extends Controller
{
	public function actions()
	{
		return array(
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}
	
        public function actionIndex()
	{
	        if (!Yii::app()->user->isGuest){
                $this->render('index');    
                }else{
                    $this->redirect(Yii::app()->homeUrl);
                }
		
	}
        
        public function actionEnabled($id){
            $model=Item::model()->findByPk($id);
            if($model->ACTIVE_FLAG=="Y")
                $model->ACTIVE_FLAG=="N";
            else
                $model->ACTIVE_FLAG=="Y";
                $model->save();
            $this->redirect(array("index"));
        }
        
        public function actionReport()
        {
                if (!Yii::app()->user->isGuest){
                $dataReportKas=KasMasuk::model()->ambilReport();
                $dataReportItem=Item::model()->ambilReport();
                $dataReport=SalesOrder::model()->ambilReport();
                //Bukti Kas
                if(isset($_REQUEST['cetakXlsKAS'])){
                        $from=$_REQUEST['from'];
                        $until=$_REQUEST['until'];
                       Yii::app()->request->sendFile('bukti_kas_periode_'.$from.'-'.$until.'.xls',
                       $this->renderPartial('bukti_kas',array(
			'dataReportKas'=>$dataReportKas,
                       )),true);
                
                }
                if(isset($_REQUEST['cetakPdfKAS'])){
                        $from=$_REQUEST['from'];
                        $until=$_REQUEST['until'];
                        $mPDF1 = Yii::app()->ePdf->mpdf();
                        $mPDF1->WriteHTML($this->renderPartial('bukti_kas',array(
			'dataReportKas'=>$dataReportKas,
                        ), true));
                        $mPDF1->Output('bukti_kas_periode_'.$from.'-'.$until,"I");
                
                }
                
                //Items
                if(isset($_REQUEST['cetakXlsITM'])){
                        $from=$_REQUEST['from'];
                        $until=$_REQUEST['until'];
                       Yii::app()->request->sendFile('item_periode_'.$from.'-'.$until.'.xls',
                       $this->renderPartial('item',array(
			'dataReportItem'=>$dataReportItem,
                       )),true);
                
                }
                if(isset($_REQUEST['cetakPdfITM'])){
                        $from=$_REQUEST['from'];
                        $until=$_REQUEST['until'];
                        $mPDF1 = Yii::app()->ePdf->mpdf();
                        $mPDF1->WriteHTML($this->renderPartial('item',array(
			'dataReportItem'=>$dataReportItem,
                        ), true));
                        $mPDF1->Output('item_periode_'.$from.'-'.$until,"I");
                
                }
                //Sales Order
                if(isset($_REQUEST['cetakXlsSO'])){
                        $from=$_REQUEST['from'];
                        $until=$_REQUEST['until'];
                       Yii::app()->request->sendFile('periode_'.$from.'-'.$until.'.xls',
                       $this->renderPartial('tanggal',array(
			'dataReport'=>$dataReport,
                       )),true);
                
                }
                if(isset($_REQUEST['cetakPdfSO'])){
                        $from=$_REQUEST['from'];
                        $until=$_REQUEST['until'];
                       $mPDF1 = Yii::app()->ePdf->mpdf();
                        $mPDF1->WriteHTML($this->renderPartial('tanggal',array(
			'dataReport'=>$dataReport,
                        ), true));
                        $mPDF1->Output('periode_'.$from.'-'.$until,"I");
                
                }
                    
                $this->render('report',array(
                    'dataReport'=>$dataReport,
                ));    
                }else{
                    $this->redirect(Yii::app()->homeUrl);
                }
        }

        public function actionOneway()
	{
	        if (!Yii::app()->user->isGuest){
                $this->render('oneway');    
                }else{
                    $this->redirect(Yii::app()->homeUrl);
                }
		
	}

        public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}
	
	public function actionLogin()
	{
		$model=new LoginForm;

		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

                if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
		
                        if($model->validate() && $model->login() && Yii::app()->user->isGuest)
				$this->redirect(Yii::app()->user->loginUrl);
		}
                
                if (!Yii::app()->user->isGuest){
                $this->render('index');    
                }else{
                    $this->render('login',array('model'=>$model));
                }
		
	}

	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
}