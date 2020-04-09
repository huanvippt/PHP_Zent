<?php
//Thông số kết nối csdl
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "myphp";

//Tạo kết nối đến csdl
	$conn = new mysqli($servername, $username, $password, $dbname);

	$query = "select * from posts";

	$result = $conn->query($query);

	$data = array();

	while ($row = $result->fetch_assoc()) {
		$data[] = $row;
	}

	foreach ($data as $dt) {
		echo "<pre>";
		print_r($dt);
		echo "<pre>";
	}
 ?>