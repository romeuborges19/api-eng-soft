<?php

namespace controller;
require_once ("api/src/model/ItemModel.php");
use models\ItemModel;

class ItemController{
	private $item_model;

	public function __construct() {
		$this->item_model = new ItemModel();
	}

	function create_item($json_object){
		$data = json_decode($json_object, true);

		$item_data = [
			'name' => $data['name'],
			'description' => $data['description'],
		];

		$item = $this->item_model->create_item($item_data);
		if(isset($item[0])){
			$data = [
				"name" => $item[0]["name"],
				"description" => $item[0]["description"],
				"created_at" => $item[0]["created_at"],
			];

			$data = json_encode($data);

			return $data;
		}
	} 

	function get_items(){
		$items = $this->item_model->get_items();

		$items = json_encode($items);
		return $items;
	}
}

?>
