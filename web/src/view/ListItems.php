<?php
require_once ("web/src/controller/ItemController.php");
use controller\ItemController;

if($_SERVER["REQUEST_METHOD"] == "GET"){
	$item_controller = new ItemController();

	$items = $item_controller->get_items();
	$items = json_decode($items, true);
}

?>

List of items <br><br>

<a href="/item/create">Create Item</a> <br>

<?php 

foreach($items as $item){
	echo 'Item ' . $item['id'] . ': ' . $item['name'] . '<br>'; 
	echo 'Description: ' . $item['description'] . '<br>';
	echo 'Created at: ' . $item['created_at'] . '<br><br>';
}

?>
