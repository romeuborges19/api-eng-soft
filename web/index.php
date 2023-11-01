<?php
	require_once("vendor/autoload.php");
	$url = $_SERVER["REQUEST_URI"];

	switch($url){
		case "/":
			include("src/view/ListItems.php");
			break;
		case "/item/create":
			include("src/view/CreateItem.php");
			break;
	}

?>
