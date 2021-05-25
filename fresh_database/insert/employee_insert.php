<?php
require "../create/fresh_database.php";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
	die("Connection failed: ".mysqli_connect_error());
}

$sql = "INSERT INTO Employee (employeeID, employeeFirstName, employeeLastName, address, phoneNumber, username, password)
VALUES ('1', 'Ad', 'Min', '123 Silom Rd.', '0912345678', 'admin', '00000')";

if (mysqli_multi_query($conn, $sql)) {
	echo "New record created successfully";
} else {
	echo "Error: ".$sql."<br>".mysqli_error($conn);
}

mysqli_close($conn);

?>