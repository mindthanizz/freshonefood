<?php
require "fresh_database.php";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
	die("Connection failed: ".mysqli_connect_error());
}

$sql = "CREATE TABLE Orders (
orderId INT(6) NOT NULL PRIMARY KEY,
orderDate DATE NOT NULL,
memberId INT(6),
CONSTRAINT FK_MemberOrders FOREIGN KEY (memberId) REFERENCES Member(memberId)
)";

if (mysqli_query($conn, $sql)) {
	echo "Table Orders created successfully";
} else {
	echo "Error creating table: ".mysqli_error($conn);
}

mysqli_close($conn);

?>