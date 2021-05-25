<?php
  session_start();
  require_once "../fresh_database/create/fresh_database.php";
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  $query = "SELECT * FROM Product;";
  $result = mysqli_query($conn, $query) or die("Error in sql: $query". mysqli_error($query));
 ?>
 
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="../css/home_style.css" rel="stylesheet" type="text/css" />
    <link href="../css/index_style.css" rel="stylesheet" type="text/css" />
  </head>
  
  <body>
   <div class="container" style="margin-top:30px">
    <h1 class="head"><strong>Home</strong></h1><br><br>
    <nav class="navbar navbar-expand-sm bg-light">
    <ul>
    <li><a class = "active" href="home.php">Home</a></li>
    <li><a href="../php/product.php">All product</a></li>
    <li><a href="../php/vegetable.php">Vegetable</a> </li>
    <li><a href="../php/meat.php">Meat</a></li>
    <li><a href="../php/seafood.php">Seafood</a></li>
    </ul>
    </nav>
   <h3 align="center">Welcome <span style="color:green"><?php echo $_SESSION['username']; ?></span> to Fresh One Food!</h3><br>
   <div align="center">
   <h3><b>Order Online 24 hr.</b></h3>
   <h4>Hotline : 02-222-2222 (24 hrs)<br> LINE ID : @freshonefood</h4>
   <br></div>
   <div align="center">
   <img class="img-left" src="../img/qa1.png" alt="Quality">
   <img class="center" src="../img/qa2.png" alt="Quality">
   <img class="img-right" src="../img/qa3.png" alt="Quality"><br><br><br>
   <button><a href="../php/logout.php"><span style="color:red">Log Out</span></a></button></div><br>
      <footer>
      <p align="center">Fresh One Food<br>Order now at <a href="../php/home.php"> www.freshonefood.com</a></p>
    </footer>
  </body>
</html>

<style>
 .img-left {
   margin-right: 50px;
 }
 
  .img-right {
   margin-left: 50px;
 }
 

table {
  border-collapse: collapse;
  width: 100%;
}

table td, table th {
  border: 1px solid #ddd;
  padding: 8px;
}

table tr:nth-child(even){background-color: #f2f2f2;}

table th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: lightblue;
  color: black;
}

</style>