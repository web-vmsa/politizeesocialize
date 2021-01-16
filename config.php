<?php 
require 'environment.php';

$config = array();

if (ENVIRONMENT == 'development') {
	define("BASE_URL", "http://localhost/politizeesocialize/");
	define("ADMIN_URL", "http://localhost/admin.politizeesocialize/");
	$config['dbname'] = 'politizeesocialize';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
} else {
	define("BASE_URL", "http://localhost/politizeesocialize/");
	define("ADMIN_URL", "http://localhost/admin.politizeesocialize/");
	$config['dbname'] = 'politizeesocialize';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
}

global $db;
try {
	$db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']);
} catch(PDOExcpetion $e) {
	echo "Erro ".$e->getMessage();
	exit;
}