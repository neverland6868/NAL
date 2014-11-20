<?php

error_reporting(E_ALL);

echo $_SERVER['PHP_SELF'];

$conn = new PDO("mysql:host=localhost;dbname=nal_test1", "root", "root");

$query = "SELECT * FROM tbl_user";

foreach ($conn->query($query) as $row) {
	var_dump($row);
}

$conn = null;
