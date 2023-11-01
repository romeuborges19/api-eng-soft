<?php
require_once ("web/src/controller/ItemController.php");
use controller\ItemController;

if($_SERVER["REQUEST_METHOD"] == "POST"){
	echo "metodo post";
	$item_controller = new ItemController();

	$item = $item_controller->register_item($_POST['name'], $_POST['description']);
	echo $item;
}
?>


<!DOCTYPE html>
<html>
<body>

<h1>Create Item</h1>
	<p>Create Item:</p>

	<form method="POST" >
		<input type="text" name="name" placeholder="Item's name">
		<input type="text" name="description" placeholder="Item's description">
		<input type="submit" value="Create Item">	
	</form>

</body>
</html>
