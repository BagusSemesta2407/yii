<?php

// This is the database connection configuration.
return array(
	// 'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
	// uncomment the following lines to use a MySQL database
	'connectionString' => 'pgsql:host=10.10.172.3;port=5234;dbname=db_belajar_yii1',
	'emulatePrepare' => true,
	'username' => 'developer',
	'password' => 'dbd3vinnova',
	'charset' => 'utf8',
);