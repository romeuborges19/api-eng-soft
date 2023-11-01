<?php

namespace controller;

require_once ("web/src/connection/Connection.php");

use connection\Connection;

class ItemController{
	public function __construct(){
		error_log("testando");
		echo "criando item controller";
	}

	function register_item($name, $description){
		$api = new Connection();

		$url = "http://localhost:8000/item/create";

		$data = [
			"name" => $name,
			"description" => $description,
		];

		$data = json_encode($data);
		$method = "POST";

		$response = $api->API($url, $method, $data);
		return $response;
	}

	function get_items(){
		$api = new Connection();
		$url = "http://localhost:8000/";
		$data = [];

		$method = "GET";
		$response = $api->API($url, $method, $data);
		return $response;

	}
}

?>
