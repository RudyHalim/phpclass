<?php
include("inc/config.php");

$file_api = "/api.php";

// only allow called from inside web
if(strpos($_SERVER["HTTP_REFERER"], BASE_URL) !== false) {

	// ajax for login form
	$hp 	= $_POST['hp'];
	$passwd = $_POST['passwd'];
	if(isset($hp) && !empty($hp) && isset($passwd) && !empty($passwd)) {
		$url = $file_api;
		echo "a";
	}

}