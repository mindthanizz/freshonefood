<?php
$servername = "127.0.0.1:49300";
$username = "azure";
$password = "6#vWHD_$";
$conn = mysqli_connect($servername, $username, $password);

if (!$conn) {
	die("Connection failed: ".mysqli_connect_error());
}
echo "Connected successfully";

?>