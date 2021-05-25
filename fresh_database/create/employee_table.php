<?php
require "fresh_database.php";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
	die("Connection failed: ".mysqli_connect_error());
}

$sql = "CREATE TABLE Employee (
employeeId INT(6) NOT NULL PRIMARY KEY,
employeeFirstName VARCHAR(30) NOT NULL,
employeeLastName VARCHAR(30) NOT NULL,
address VARCHAR(50) NOT NULL,
phoneNumber VARCHAR(20) NOT NULL,
username VARCHAR(30) NOT NULL,
password VARCHAR(30) NOT NULL
)";

if (mysqli_query($conn, $sql)) {
	echo "Table Employee created successfully";
} else {
	echo "Error creating table: ".mysqli_error($conn);
}

mysqli_close($conn);

?>