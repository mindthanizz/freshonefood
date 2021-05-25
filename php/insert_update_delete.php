<?php
	session_start();
	
	$conn = mysqli_connect("127.0.0.1:49300", "azure", "6#vWHD_$", "freshDB");
	
	$errors = array();
	
	if(isset($_POST['addproduct'])) {
		$productname = mysqli_real_escape_string($conn, $_POST['prodname']);
		$productprice = mysqli_real_escape_string($conn, $_POST['prodprice']);
		$producttype = mysqli_real_escape_string($conn, $_POST['prodtype']);
		
		if(empty($productname)) {
			array_push($errors,"Product Name is required");
		}
		
		if(empty($productprice)) {
			array_push($errors,"Product Price is required");
		}
		
		if(empty($producttype)) {
			array_push($errors,"Product Type is required");
		}

		if(count($errors) == 0) {
			$sql = "INSERT INTO Product (productName, productPrice, productTypeId) 
					VALUES ('$productname', '$productprice', '$producttype')";
			mysqli_query($conn, $sql);
			$_SESSION['success'] = "Product added successful";
			header("location: admin.php");
		}
	}
	
	if(isset($_POST['upproduct'])) {
		$productid = mysqli_real_escape_string($conn, $_POST['prodid']);
		$productname = mysqli_real_escape_string($conn, $_POST['prodname']);
		$productprice = mysqli_real_escape_string($conn, $_POST['prodprice']);
		$producttype = mysqli_real_escape_string($conn, $_POST['prodtype']);
		
		if(empty($productid)) {
			array_push($errors,"Product Id is required");
		}
		
		if(empty($productname)) {
			$queryname = "SELECT productName FROM Product WHERE productId = '$productid'";
			$resultname = mysqli_query($conn, $queryname);
			$rowname = mysqli_fetch_assoc($resultname);
    		$productname = $rowname["productName"];
		}
		
		if(empty($productprice)) {
			$queryprice = "SELECT productPrice FROM Product WHERE productId = '$productid'";
			$resultprice = mysqli_query($conn, $queryprice);
			$rowprice = mysqli_fetch_assoc($resultprice);
    		$productprice = $rowprice["productPrice"];
		}
		
		if(empty($producttype)) {
			$querytype = "SELECT productTypeId FROM Product WHERE productId = '$productid'";
			$resulttype = mysqli_query($conn, $querytype);
			$rowtype = mysqli_fetch_assoc($resulttype);
    		$producttype = $rowtype["productTypeId"];
		}

		if(count($errors) == 0) {
			$sql = "UPDATE Product 
					SET productName = '$productname', productPrice = '$productprice', productTypeId = '$producttype'
					WHERE productId = '$productid'";
			mysqli_query($conn, $sql);
			$_SESSION['success'] = "Product updated successful";
			header("location: admin.php");
		}
	}
	
	if(isset($_POST['delproduct'])) {
		$productid = mysqli_real_escape_string($conn, $_POST['prodid']);
		
		if(empty($productid)) {
			array_push($errors,"Product Id is required");
		}

		if(count($errors) == 0) {
			$sql = "DELETE FROM Product WHERE productId = '$productid'";
			mysqli_query($conn, $sql);
			$_SESSION['success'] = "Product deleted successful";
			header("location: admin.php");
		}
	}
?>