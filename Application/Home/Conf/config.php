<?php
return array(
	//'配置项'=>'配置值'
	'URL_MODEL'          => '1', //URL模式
    'SESSION_AUTO_START' => true, //是否开启session
    'DB_CONFIG1'=>array(
        'DB_TYPE'=>'mysql',
        'DB_HOST'=>'112.124.62.6',
        'DB_PORT'=>'3306',
        'DB_NAME'=>'power',
        'DB_USER'=>'root',
        'DB_PWD'=>'wapwei!@#$%09876',
        'DB_PREFIX'=>'p_'
    ),
    'DB_CONFIG2'=>array(
        'DB_TYPE'=>'mysql',
        'DB_HOST'=>'112.124.62.6',
        'DB_PORT'=>'3306',
        'DB_NAME'=>'weikucms',
        'DB_USER'=>'root',
        'DB_PWD'=>'wapwei!@#$%09876',
        'DB_PREFIX'=>'tp_'
    ),
    'MODULE_ALLOW_LIST'    =>    array('Home'),
    'SESSION_AUTO_START' => true,
    'IMG_PATH'=>'http://v.wapwei.com/upload/'
);