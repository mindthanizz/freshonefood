<?php
	//R:redundant. Removed Session start
	//session_start();
	
	$conn = mysqli_connect("127.0.0.1:49300", "azure", "6#vWHD_$", "freshDB");
	
	$errors = array();
	
	if(isset($_POST['submit'])) {
		$username = mysqli_real_escape_string($conn,$_POST['uname']);
		$password = mysqli_real_escape_string($conn,$_POST['pw']);
		
		if(empty($username)) {
			array_push($errors,"Username is required");
		}
		
		if(empty($password)) {
			array_push($errors,"Password is required");
		}
		
		if(count($errors) == 0) {
			$querymem = "SELECT * FROM Member WHERE username = '$username' AND password = '$password'";
			$resultmem = mysqli_query($conn, $querymem);
			
			$queryem = "SELECT * FROM Employee WHERE username = '$username' AND password = '$password'";
			$resultem = mysqli_query($conn, $queryem);
			
			if(mysqli_num_rows($resultmem)==1) {
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "You are now logged in.";
				header("location: php/home.php");
			} else if(mysqli_num_rows($resultem)==1) {
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "You are now logged in.";
				header("location: php/admin.php");
			} else {
				array_push($errors,"Wrong username or password");
				$_SESSION['error'] = "Wrong username or password. Please try again.";
				header("location: index.php");
			}
		}
		
	}
	
?>