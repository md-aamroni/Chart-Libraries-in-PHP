<?php

$GLOBALS['DB_CONFIG'] = [
	'mysql'		=> [
		'driver'		=> $_ENV['DB_CONNECTION'] ?? 'mysql',
		'url'			=> '',
		'host'		=> $_ENV['DB_HOST'] ?? 'localhost',
		'port'		=> $_ENV['DB_PORT'] ?? '3306',
		'database'	=> $_ENV['DB_DATABASE'] ?? 'chart_libraries_rdb',
		'username'	=> $_ENV['DB_USERNAME'] ??'root',
		'password'	=> $_ENV['DB_PASSWORD'] ?? '',
		'charset'	=> 'utf8mb4',
		'collation'	=> 'utf8mb4_unicode_ci',
		'prefix'		=> ''
	],
	'sqlite'	=> [
		'driver'		=> '',
		'url'			=> '',
		'database'	=> '',
		'prefix'		=> '',
		'fk_const'	=> ''
	],
	'pgsql'		=> [
		'driver'		=> '',
		'url'			=> '',
		'host'		=> '',
		'port'		=> '',
		'database'	=> '',
		'username'	=> '',
		'password'	=> '',
		'charset'	=> '',
		'collation'	=> '',
		'prefix'		=> ''
	],
];

define('DB', $GLOBALS['DB_CONFIG']['mysql']);
