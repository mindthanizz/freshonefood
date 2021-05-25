<?php
  session_start(); 	
  include('php/login.php');
 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Fresh One Food</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="../css/index_style.css" rel="stylesheet" type="text/css" />
  </head>
  
  <body>
     <div class="banner">
    <div class="container">
      <div class="row" align="center">
        <div class="col-md-12">
          <div class="caption">
            <h1 align="center"><b>Welcome to Fresh One Food official website.</b></h1><br>
          <img src="img/logo.png" alt="LOGO">
           <h3><b>Place your order and wait for the freshest products at your doorstep!</b></h3>
           <p><b>Already Member?  <br>Login here</b></p>
           <form name="login" method="post" action="index.php">            
              <label for="uname">Username : </label>
              <input type="text" id="uname" name="uname" value="<?php echo $username; ?>">
              <label for="pw">Password : </label>
              <input type="password" id="pw" name="pw"><br><br>
              <button id="btn" type="submit" name="submit"><b>Log in</b></button><br><br>
           </form>
               <p>If not,  <a href="php/member.php">Register here</a>.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  </body>
</html>