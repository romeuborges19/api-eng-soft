<?php

namespace models;
use Connection\Connection;

class ItemModel {
	private $connection;

	public function __construct() {
		$this->connection = new Connection();
		$this->connection = $this->connection->connect();
	}

	private function query_database($query) {
		$result = pg_query($this->connection, $query);

		if (!$result) {
			die("Error on query: " . pg_last_error($this->connection));
		}

		return $result;
	}

	function create_item($data){
		$name = $data['name'];
		$description = $data['description'];

		$query = "INSERT INTO item(name, description) VALUES ('$name', '$description');";	

		$result = $this->query_database($query);

		$item = pg_fetch_assoc($result);

		return $item;
	}

	function get_items(){
		$query = "SELECT * FROM item";

		$result = $this->query_database($query);
		if(!$result){
			die("Error on query: " . pg_last_error($this->connection));
		}

		$items = array();
		while ($row = pg_fetch_assoc($result)){
			$items[] = $row;
		}

		return $items;
	}
}


?>
