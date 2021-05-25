<?php
require ("fresh_database.php");

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
	die("Connection failed: ".mysqli_connect_error());
}

$sql = "CREATE TABLE ProductType (
productTypeId INT(6) NOT NULL PRIMARY KEY,
productTypeName VARCHAR(30) NOT NULL
)";

if (mysqli_query($conn, $sql)) {
	echo "Table ProductType created successfully";
} else {
	echo "Error creating table: ".mysqli_error($conn);
}

mysqli_close($conn);

?>