<?php
return CMap::mergeArray(
    require(dirname(__FILE__).'/main.php'),
    array(
        'name'=>'Adminstrator',
        'defaultController'=>'site/login',
        'preload'=>array('log','bootstrap'),
        'modules'=>array(
	'gii'=>array(
          'generatorPaths' => array(
          'bootstrap.gii'
        ),
			'class'=>'system.gii.GiiModule',
			'password'=>'posbackadmin',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),
		
	),
        'components'=>array(
            'bootstrap' => array(
	    'class' => 'ext.bootstrap.components.Bootstrap',
	    'responsiveCss' => true,
	),
            'user'=>array(
			// enable cookie-based authentication
                        'class'=>'EWebUser',
			'allowAutoLogin'=>true,
                        //'loginUrl'=>  array('site/index'),
		),
            'urlManager'=>array(
			'urlFormat'=>'path',
                        'urlSuffix'=>'.html',
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),
       ),
    )
);
?>