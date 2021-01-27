<?php 
session_start();
require 'config.php';

date_default_timezone_set('America/Sao_Paulo');

error_reporting(0);
ini_set(“display_errors”, 0 );

spl_autoload_register(function($class){

	if (file_exists('controllers/'.$class.'.php')) {
		require 'controllers/'.$class.'.php';
	} elseif (file_exists('models/'.$class.'.php')) {
		require 'models/'.$class.'.php';
	} elseif (file_exists('core/'.$class.'.php')) {
		require 'core/'.$class.'.php';
	}

});

$core = new Core();
$core->run();