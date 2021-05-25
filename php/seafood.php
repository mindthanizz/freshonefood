<?php
  require "../fresh_database/create/fresh_database.php";
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  if (mysqli_connect_errno()) {
    die("Failed to connect to MySQL: " . mysqli_connect_error());
  }
  $query = "SELECT productId, productName, productPrice FROM Product WHERE productTypeId = 3;";
  $result=mysqli_query($conn,$query);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Seafood</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="../css/home_style.css" rel="stylesheet" type="text/css" />
    <link href="../css/index_style.css" rel="stylesheet" type="text/css" />
  </head>
  <body>
  <div class="container" style="margin-top:30px">
    <h1><class="head"><strong>Seafood</strong></h1><br><br>
    <nav class="navbar navbar-expand-sm bg-light">
    <ul>
    <li><a href="../php/home.php">Home</a></li>
    <li><a href="../php/product.php">All product</a></li>
    <li><a href="../php/vegetable.php">Vegetable</a></li>
    <li><a href="../php/meat.php">Meat</a></li>
    <li><a class="active" href="../php/seafood.php">Seafood</a></li>
    </ul>
    </nav>
    <div class="row">
      <table align="center">
        <t>
          <th>Product ID</th>
  				<th>Product Name</th>
  				<th>Product Price (Baht)</th>
  			</t>
  	 <?php
        while($row=mysqli_fetch_assoc($result)){
  	 ?>
  			<tr>
          <td><?php echo $row['productId']; ?></td>
  				<td><?php echo $row['productName']; ?></td>
  				<td><?php echo $row['productPrice']; ?></td>
  			</tr>
  		<?php
  		}
  		?>
      </table>
  </div>
  <br>
    <footer>
      <p>Fresh One Food<br>Order now at <a href="../php/home.php"> www.freshonefood.com</a></p>
    </footer>
  </body>
</html>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Acme&display=swap');

body {
  background-color : #f4ebd9;
  font-family: 'Acme', sans-serif!important;
}

h1 {
  text-align: center;
  border-style: dashed;
  border-width: thick;
  padding : 10px;
  border-color: chocolate;
}

table {
  border-collapse: collapse;
  width: 95%;
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


ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #A98B76 ;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 16px;
}

li a:hover {
  background-color: rgb(255, 249, 213);
}

li {
  border-right: 1px solid white;
}

.navbar .navbar-brand {
  text-align: center;
  width: 100%;
  position: relative;
  padding: 25px 0px;
  background-color: #C2FFFA;
}
</style>