<?php

//get product from model
$mysqli->select_db ("shoppingCart");

	$result = $mysqli -> query("select * from product");	
	$row = $result -> fetch_all();
	var_dump($row);




//select product


//search 


//get comment

$mysqli->select_db ("shoppingCart");

	$result = $mysqli -> query("select * from comment");	
	$row = $result -> fetch_all();
	var_dump($row);


















if (isset($_GET['test'])) {

	echo "Receive event: " . $_GET['test'];

	if ($_GET['item'] == "Checkout") {
		// $cartController->listCart();
        return "ya";
	}
} 


?>