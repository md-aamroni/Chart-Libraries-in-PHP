<?php

// Autoload Packages and Class Files
require_once './vendor/autoload.php';


// ENV File Reader
$repository = Dotenv\Repository\RepositoryBuilder::createWithNoAdapters()
	->addAdapter(Dotenv\Repository\Adapter\EnvConstAdapter::class)
	->addWriter(Dotenv\Repository\Adapter\PutenvAdapter::class)
	->immutable()
	->make();

$dotenv = Dotenv\Dotenv::create($repository, __DIR__ . './../');
$dotenv->load();


// Parse All Configuration Files
$files = [];
$parse = array_diff(scandir('./config/'), array('.', '..', '.gitignore', '.htaccess', 'bootstrap.php'));

if ($parse) {
	foreach ($parse as $each) {
		array_push($files, $each);
	}
}

if (is_array($files)) {
	foreach ($files as $file) {
		if (file_exists('./../../config/' . $file)) {
			include './../../config/' . $file;
		} elseif (file_exists('./../config/' . $file)) {
			include './../config/' . $file;
		} else {
			include './config/' . $file;
		}
	}
}


define('DEBUG', $_ENV['APP_DEBUG']);

if (DEBUG) {
	ini_set('display_errors', 1);
} else {
	ini_set('display_errors', 0);
}
