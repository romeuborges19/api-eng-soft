<?php

namespace connection;

class Connection {
	function API($url, $method, $data) {
		$require = curl_init();

		curl_setopt($require, CURLOPT_URL, $url);
		curl_setopt ($require, CURLOPT_RETURNTRANSFER, true);
		curl_setopt ($require, CURLOPT_POSTFIELDS, $data);
		curl_setopt ($require, CURLOPT_HTTPHEADER, array (
			"Content-Type: application/json"
		));

		if ($method == "POST") {
			curl_setopt($require, CURLOPT_POST, 1);
		} elseif ($method == "GET") {
			curl_setopt($require, CURLOPT_HTTPGET, 1);
		} elseif ($method == "PUT") {
			curl_setopt($require, CURLOPT_PUT, 1);
		} elseif ($method == "DELETE") { 
			curl_setopt($require, CURLOPT_CUSTOMREQUEST, "DELETE");
		} else {
			echo "HTTP method does not exist";
		}

		$response = curl_exec($require);
		return $response;
	}
}

?>
