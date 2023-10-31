<?php
	$url = $_SERVER["REQUEST_URI"];

	switch($url){
		case "/":
			include("src/view/ListItems.php");
			break;
		case "/create":
			include("src/view/CreateItem.php");
			break;
	}

?>
