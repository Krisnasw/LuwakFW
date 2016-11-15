<?php
	error_reporting(0);
	define("BASE_PATH", "http://localhost");
	$path = "luwakfw";
	$url = $_SERVER['REQUEST_URI'];
	$url = str_replace($path, "", $url);
	$array_tmp_uri = preg_split('[\\/]', $url, -1, PREG_SPLIT_NO_EMPTY);
	$array_uri['controller']	= $array_tmp_uri[0];
	$array_uri['method']	= $array_tmp_uri[1];
	$array_uri['var']	= $array_tmp_uri[2];
	require_once("application/base.php");
	$application = new Application($array_uri);
	$application->loadController($array_uri['controller']);
?>