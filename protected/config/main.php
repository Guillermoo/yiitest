<?php


/*

    DEBUG!!!!!!
    if(isset($_POST['nbmodel'])){
        echo '<pre>';
        print_r($_POST['nbmodel']));
        echo '</pre>';
    }
    Yii::app().>end();

*/


// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');
// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
    'basePath' => dirname(__FILE__) . DIRECTORY_SEPARATOR . '..',
    'name' => 'YiiBoost Test',
    'theme' => 'andia',
    'sourceLanguage' => 'en',
    'language' => 'en',
    // preloading 'log' component
    'preload' => array(
        'log',
        'bootstrap',
    ),
    // autoloading model and component classes
    'import' => array(
        'application.models.*',
        'application.components.*',
        'ext.giix-components.*',
        'application.extensions.PasswordHash',
    ),
    'modules' => array(
        'gii' => array(
            'class' => 'system.gii.GiiModule',
            'password' => '123456',
            'generatorPaths' => array(
                'ext.giix-core', // giix generators
                'ext.bootstrap.gii',
            ),
            'ipFilters' => array('127.0.0.1', '::1'),
        ),
    ),
    // application components
    'components' => array(
        'bootstrap' => array(
            'class' => 'ext.bootstrap.components.Bootstrap',
            'coreCss' => false, //use css themes
            'responsiveCss' => true,
        ),
        'user' => array(
            // enable cookie-based authentication
            'allowAutoLogin' => true,
        ),
        'authManager'=>array(
                'class'=>'CDbAuthManager',
                'connectionID'=>'db',
        ),
        'urlManager' => array(
            'urlFormat' => 'path',
            'showScriptName' => false,
            //'urlSuffix'=>'.html', To change the extension
            'rules' => array(
                '<controller:\w+>/<id:\d+>' => '<controller>/view',
                '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
                '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
            ),
        ),
        /*'db' => array(
            'connectionString' => 'sqlite:' . dirname(__FILE__) . '/../data/testdrive.db',
        ),*/
        // uncomment the following to use a MySQL database
        'db'=>array(
            'connectionString' => 'mysql:host=localhost;dbname=yii_test',
            'emulatePrepare' => true,
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
            //'enableProfiling'=>true, //To show SQL query
        ),

        'widgetFactory'=>array(
          'widgets'=>array(
            'BootButtonColumn'=>array(
              //'cssFile' => 'application.css.css.style-gridview.css',
              'cssFile' => '', 
            ),
          ),
        ),
        'errorHandler' => array(
            // use 'site/error' action to display errors
            'errorAction' => 'site/error',
        ),
        'log' => array(
            'class' => 'CLogRouter',
            'routes' => array(
                array(
                    'class' => 'CFileLogRoute',
                    'levels' => 'error, warning',
                ),
                // uncomment the following to show log messages on web pages
                /*array(
                    'class'=>'CWebLogRoute',
                ),*/
             
            ),
        ),
    ),
    // application-level parameters that can be accessed
    // using Yii::app()->params['paramName']
    'params' => array(
        // this is used in contact page
        'adminEmail' => 'webmaster@example.com',
        'phpass'=>array(
            'iteration_count_log2'=>8,
            'portable_hashes'=>false,
          ),
        'debugContent'=>'',
        'nameCompany' => 'This is the name of the company'
    ),
);