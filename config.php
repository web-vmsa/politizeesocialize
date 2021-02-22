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
	define("BASE_URL", "https://www.politizeesocialize.com/");
	define("ADMIN_URL", "https://www.admin.politizeesocialize.com/");
	$config['dbname'] = 'politi07_politizeesocialize';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'politi07_root';
	$config['dbpass'] = 'KKqC054ipLY9';
}

global $db;
try {
	$db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']);
} catch(PDOExcpetion $e) {
	echo "Erro ".$e->getMessage();
	exit;
}