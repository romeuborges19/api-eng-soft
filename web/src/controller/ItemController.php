<?php

namespace controller;

require_once("vendor/autoload.php");

use connection\Connection;

class ItemController{
	function register_item($name, $description){
		$api = new Connection();

		$url = "http://localhost:8000/login";

		$data = [
			"name" => $name,
			"description" => $description,
		];

		$data = json_encode($data);
		$method = "POST";

		$response = $api->API($url, $method, $data);
		return $response;
	}
}

?>
