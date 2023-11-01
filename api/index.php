<?php
	error_log("CHEGOU NA API!");
	use controller\ItemController;

	header("Content-Type: application/json");

	$method = $_SERVER["REQUEST_METHOD"];
	$url = $_SERVER["REQUEST_URI"];

	if ($method=="POST") {
		switch($url){
			case "item/create":
				error_log("chegou na API!!");
				$item_controller = new ItemController();
				
				$response = $item_controller->create_item(file_get_contents("php://input"));
				echo $response;
				break;

			default:
				$response = [
					"status" => 404,
					"message" => "Rota $url não encontrada",
				];
				header("HTTP/1.0 404 Page Not Allowed");
				echo json_encode($response);
		}
	} elseif ($method=="GET") {

	} elseif ($method=="PUT") {

	} elseif ($method="DELETE") {

	}

?>

