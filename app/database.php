<?php
	// database by Yuana, Andhika
	// 2015 Agustus 12

	use Illuminate\Database\Capsule\Manager as Capsule;

	$capsule = new Capsule();

	$capsule->addConnection([
		'driver'=>'mysql',
		'host'=>'127.0.0.1',
		'username'=>'root',
		'password'=>'',
		'database'=>'latihan',
		'charset'=>'utf8',
		'collation'=>'utf8_unicode_ci',
		'prefix'=>'',
	]);

	$capsule->bootEloquent();