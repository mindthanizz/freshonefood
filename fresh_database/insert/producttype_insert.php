<?php
require "../create/fresh_database.php";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
	die("Connection failed: ".mysqli_connect_error());
}

$sql = "INSERT INTO ProductType (productTypeId, productTypeName)
VALUES ('1', 'Vegetable');";
$sql .= "INSERT INTO ProductType (productTypeId, productTypeName)
VALUES ('2', 'Meat');";
$sql .= "INSERT INTO ProductType (productTypeId, productTypeName)
VALUES ('3', 'Seafood')";

if (mysqli_multi_query($conn, $sql)) {
	echo "New record created successfully";
} else {
	echo "Error: ".$sql."<br>".mysqli_error($conn);
}

mysqli_close($conn);

?>