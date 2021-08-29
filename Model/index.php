<?php
	echo "hello123". "<br>";

	$mysqli = new mysqli("172.17.0.2", "root", "123");

	if (!$mysqli) {
		echo "Error: Unable to connect to MySQL." . "<br>";
		echo "Debugging errno: " . mysqli_connect_errno() .  "<br>";
		echo "Debugging error: " . mysqli_connect_error() . "<br>";
		exit;
	}
	
	echo "Success: A proper connection to MySQL was made!" . "<br>";
	echo "Host information: " . mysqli_get_host_info($mysqli) . "<br>";

	$result = $mysqli -> query("select * from product");
	$row = $result -> fetch_all();
	var_dump($row);
	


	$result = get123();
	$sum = calculator($result);

	$result = get456();
	
?>
