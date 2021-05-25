<?php
//R: added _once
require_once "../create/fresh_database.php";
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
	die("Connection failed: ".mysqli_connect_error());
}

//Vegetable
$sql = "INSERT INTO Product (productName, productPrice, productTypeId)
VALUES ('Chili', '25', '1');";
$sql .= "INSERT INTO Product (productName, productPrice, productTypeId)
VALUES ('Garlic', '54', '1');";
$sql .= "INSERT INTO Product (productName, productPrice, productTypeId)
VALUES ('Lime', '105', '1');";
$sql .= "INSERT INTO Product (productName, productPrice, productTypeId)
VALUES ('Holy Basil', '30', '1');";
$sql .= "INSERT INTO Product (productName, productPrice, productTypeId)
VALUES ('Seeda Tomato', '20', '1');";
$sql .= "INSERT INTO Product (productName, productPrice, productTypeId)
VALUES ('Morning Glory', '15', '1');";
//Meat
$sql .= "INSERT INTO Product (productName, productPrice, productTypeId)
VALUES ('Pork Loin', '150', '2');";
$sql .= "INSERT INTO Product (productName, productPrice, productTypeId)
VALUES ('Pork Collar', '120', '2');";
$sql .= "INSERT INTO Product (productName, productPrice, productTypeId)
VALUES ('Pork Belly', '180', '2');";
$sql .= "INSERT INTO Product (productName, productPrice, productTypeId)
VALUES ('Chuck', '235', '2');";
$sql .= "INSERT INTO Product (productName, productPrice, productTypeId)
VALUES ('Tenderloin', '125', '2');";
$sql .= "INSERT INTO Product (productName, productPrice, productTypeId)
VALUES ('Chicken Thigh', '58', '2');";
//Seafood
$sql .= "INSERT INTO Product (productName, productPrice, productTypeId)
VALUES ('Banana Shrimp', '240', '3');";
$sql .= "INSERT INTO Product (productName, productPrice, productTypeId)
VALUES ('Tiger Prawn', '420', '3');";
$sql .= "INSERT INTO Product (productName, productPrice, productTypeId)
VALUES ('Salmon Fillet', '180', '3');";
$sql .= "INSERT INTO Product (productName, productPrice, productTypeId)
VALUES ('Saba', '90', '3');";
$sql .= "INSERT INTO Product (productName, productPrice, productTypeId)
VALUES ('Blue Crab', '380', '3');";
$sql .= "INSERT INTO Product (productName, productPrice, productTypeId)
VALUES ('Black Crab', '800', '3')";

if (mysqli_multi_query($conn, $sql)) {
	echo "New record created successfully";
} else {
	echo "Error: ".$sql."<br>".mysqli_error($conn);
}

mysqli_close($conn);
?>