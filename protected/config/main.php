<?php
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'JPOS App',
        'defaultController'=>'site/login',
        'language'=>'id',
        'timeZone'=>'Asia/Jakarta',
    
	'preload'=>array('log','bootstrap'),
    
	'import'=>array(
		'application.models.*',
		'application.components.*',
	),

	'modules'=>array(
            'posmodule'=>array(
            //'postPerPage'=>20,
            ),
		'gii'=>array(
                    'generatorPaths' => array(
          'bootstrap.gii'
       ),
			'class'=>'system.gii.GiiModule',
			'password'=>'pos',
			'ipFilters'=>array('127.0.0.1','::1'),
		),
		
	),
        'behaviors'=>array(
        'runEnd'=>array(
        'class'=>'application.components.WebApplicationEndBehavior',
        ),
        ),
	'components'=>array(
            'bootstrap' => array(
	    'class' => 'ext.bootstrap.components.Bootstrap',
	    'responsiveCss' => true,
	),
		'user'=>array(
                        'class'=>'EWebUser',
			'allowAutoLogin'=>true,
                        'loginUrl'=>  array('site/index'),
		),
            		
		/*
		'urlManager'=>array(
                        #'class'=>'application.components.MyCUrlManager',
			'urlFormat'=>'path',
                        #'ShowScriptName'=>false,
			'rules'=>array(
				#'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				#'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
                                #'<lg>/<controller:\w+>/<id>/<title>'=>'<controller>/<action>',
                                #'<lg>/<controller:\w+>/<id>'=>'<controller>/<action>',
                                #'<lg>/<controller:\w+>'=>'<controller>/<action>',
				#'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),
		*/
		'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		),
		
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=jposapp',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '',
			'charset' => 'utf8',
		),
		
		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),
	),
	
	'params'=>array(
		'adminEmail'=>'webmaster@example.com',
	),
);