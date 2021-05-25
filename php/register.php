<?php
	session_start();
	
	$conn = mysqli_connect("127.0.0.1:49300", "azure", "6#vWHD_$", "freshDB");
	
	$errors = array();
	
	if(isset($_POST['register'])) {
		$firstname = mysqli_real_escape_string($conn, $_POST['fname']);
		$lastname = mysqli_real_escape_string($conn, $_POST['lname']);
		$address = mysqli_real_escape_string($conn, $_POST['address']);
		$telephone = mysqli_real_escape_string($conn, $_POST['tel']);
		$email = mysqli_real_escape_string($conn, $_POST['em']);
		$username = mysqli_real_escape_string($conn, $_POST['regis_uname']);
		$password1 = mysqli_real_escape_string($conn, $_POST['regis_pw1']);
		$password2 = mysqli_real_escape_string($conn, $_POST['regis_pw2']);
		
		if(empty($firstname)) {
			array_push($errors,"First Name is required");
		}
		
		if(empty($lastname)) {
			array_push($errors,"Last Name is required");
		}
		
		if(empty($address)) {
			array_push($errors,"Address is required");
		}
		
		if(empty($telephone)) {
			array_push($errors,"Phone Number is required");
		}
		
		if(empty($email)) {
			array_push($errors,"Email Address is required");
		}
		
		if(empty($username)) {
			array_push($errors,"Username is required");
		}
		
		if(empty($password1)) {
			array_push($errors,"Password is required");
		}
		
		if(empty($password2)) {
			array_push($errors,"Confirm Password is required");
		}
		
		if($password1 != $password2) {
			array_push($errors,"The two passwords do not match");
		}
		
		if(count($errors) == 0) {
			$sql = "INSERT INTO Member (memberFirstName, memberLastName, address, phoneNumber, email, username, password)
					VALUES ('$firstname','$lastname','$address','$telephone','$email','$username','$password1')";
			mysqli_query($conn, $sql);
			$_SESSION['username'] = $username;
			$_SESSION['success'] = "You are now logged in.";
			header("location: ../php/home.php");
		}
	}
?>