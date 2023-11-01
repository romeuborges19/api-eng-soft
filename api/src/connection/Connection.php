<?php

namespace connection;
use PDOExeption;

class Connection{
	function connect() {
		$host = "localhost";
		$dbName = "api_eng_soft";
		$user = "postgres";
		$password = "romeulindo";
		$port = "5432";

		try { 
			$connection = pg_connect("host=$host port=$port dbname=$dbName user=$user password=$password");
			return $connection;
		} catch (PDOExeption $error) {
			echo "Erro na conexão: " . $error->getMessage();
		}
	}
}

?>
