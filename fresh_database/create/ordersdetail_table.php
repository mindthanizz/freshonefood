<?php
require "fresh_database.php";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
	die("Connection failed: ".mysqli_connect_error());
}

$sql = "CREATE TABLE OrdersDetail (
orderId INT(6),
productId INT(6),
quantity INT(4) NOT NULL,
totalPrice INT(10) NOT NULL,
CONSTRAINT FK_OrdersDetail FOREIGN KEY (orderId) REFERENCES Orders(orderId),
CONSTRAINT FK_ProductOrdersDetail FOREIGN KEY (productId) REFERENCES Product(productId)
)";

if (mysqli_query($conn, $sql)) {
	echo "Table OrdersDetail created successfully";
} else {
	echo "Error creating table: ".mysqli_error($conn);
}

mysqli_close($conn);

?>