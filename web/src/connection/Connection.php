<?php

namespace connection;

class Connection {
	function API($url, $method, $data) {
		error_log("FUNÇÃO API");
		$require = curl_init();

		error_log('data: ' . $data . 'url: '  . $url . 'method: ' . $method);

		error_log("require feito");
		curl_setopt($require, CURLOPT_URL, $url);
		curl_setopt ($require, CURLOPT_RETURNTRANSFER, true);
		curl_setopt ($require, CURLOPT_POSTFIELDS, $data);
		curl_setopt ($require, CURLOPT_HTTPHEADER, array (
			"Content-Type: application/json"
		));

		if ($method == "POST") {
			error_log("metodo post na API");
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

		curl_setopt($require, CURLOPT_TIMEOUT, 30);

		$response = curl_exec($require);
		if( $response === false )
			syslog(LOG_INFO , curl_error($require));

		return $response;
	}
}

?>
