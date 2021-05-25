<?php
  session_start(); 	
  include('login.php');
  include('register.php');
  include('insert_update_delete.php');
  $conn = mysqli_connect("127.0.0.1:49300", "azure", "6#vWHD_$", "freshDB");
  $query = "SELECT * FROM Product;";
  $result = mysqli_query($conn, $query) or die("Error in sql: $query". mysqli_error($query));
 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="../css/member_style.css" rel="stylesheet" type="text/css" />
     <link href="../css/home_style.css" rel="stylesheet" type="text/css" />
    <link href="../css/index_style.css" rel="stylesheet" type="text/css" />
  </head>
  
  <body>
    <div class="container" style="margin-top:30px">
    <div align="center">
    <h1><class="head"><strong>Admin</strong></h1>
    <nav class="navbar navbar-expand-sm bg-light">
    <ul>
    <li><a class = "active" href="../php/admin.php">Manage the product</a></li>
    <li><a href="../php/member_list.php">Members</a></li>
    </ul>
    </nav>
    <h3 align="center">Welcome <span style="color:green"><?php echo $_SESSION['username']; ?></span> to Fresh One Food!<br>Keep up the good work!</h3>
    <button class="lout"><a href="../php/logout.php"><span style="color:red">Log Out</span></a></button></div><br>
    <div class="adminwork" align="center">
    <h3><b>Add / Update / Delete product</b></h3>
    </div>
    <div class="row">
      <div align="center">
      <p style="color:red">Product Id is forbidden for add new product mode.</p>
      <form name="addprod" method="post" action="admin.php">
        <label for="prodid">Product Id : </label><br>
        <input type="number" id="prodid" name="prodid"><br><br>
        <label for="prodname">Product Name : </label><br>
        <input type="text" id="prodname" name="prodname" maxlength = "30"><br><br>
        <label for="prodprice">Product Price : </label><br>
        <input type="number" id="prodprice" name="prodprice"><br><br>
        <label for="prodtype">Product Type : (1 for Vegetable, 2 for Meat, 3 for Seafood) </label><br>
        <input type="number" id="prodtype" name="prodtype" pattern = "[1-3]{1}"><br><br>
      </div>
    </div>
    <div align="center">
    <button id="btn" type="submit" name="addproduct" style="color:green"><b>Add Product</b></button>
    <button id="btn" type="submit" name="upproduct" style="color:blue"><b>Update Product</b></button>
    <button id="btn" type="submit" name="delproduct" style="color:red"><b>Delete Product</b></button></div>      
    </form>
    <br>
      <table>
        <thread>
          <tr>
            <th>Product Id</th>
            <th>Product Name</th>
            <th>Product Price (Baht)</th>
            <th>Product Type</th>
          </tr>
        </thread>
        <tbody>
          <?php foreach ($result as $row) {?>
            <tr>
              <td><?php echo $row['productId'];?></td>
              <td><?php echo $row['productName'];?></td>
              <td><?php echo $row['productPrice'];?></td>
              <td><?php if($row['productTypeId'] == 1) {
                echo "Vegetable";}
                else if($row['productTypeId'] == 2) {
                echo "Meat";}
                else if($row['productTypeId'] == 3) {
                echo "Seafood";}
                  ?></td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
      <?php mysqli_close($conn);?>
      <br><br>
       <footer>
      <p align="center">Fresh One Food</p>
    </footer>
  </body>
</html>

<style>
  button {
    margin-left: 30px;
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

table tr:hover {background-color: #ddd;}

table th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: lightblue;
  color: black;
}

.lout {
  margin-left: 0px;
}
</style>