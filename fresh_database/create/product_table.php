<?php
require "fresh_database.php";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
	die("Connection failed: ".mysqli_connect_error());
}

$sql = "CREATE TABLE Product (
productId INT(6) NOT NULL PRIMARY KEY AUTO_INCREMENT,
productName VARCHAR(30) NOT NULL,
productPrice INT(5) NOT NULL,
productTypeId INT(6),
CONSTRAINT FK_ProductType FOREIGN KEY (productTypeId) REFERENCES ProductType(productTypeId)
)";

if (mysqli_query($conn, $sql)) {
	echo "Table Product created successfully";
} else {
	echo "Error creating table: ".mysqli_error($conn);
}

mysqli_close($conn);
?>