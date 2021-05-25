<?php
require "../create/fresh_database.php";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
	die("Connection failed: ".mysqli_connect_error());
}

$sql = "INSERT INTO Member (memberFirstName, memberLastName, address, phoneNumber, email, username, password)
VALUES ('Jane', 'Doe', '485 British Rd.', '0951234569', 'janedoe@brit.com', 'jd1234', '12345')";

if (mysqli_multi_query($conn, $sql)) {
	echo "New record created successfully";
} else {
	echo "Error: ".$sql."<br>".mysqli_error($conn);
}

mysqli_close($conn);

?>