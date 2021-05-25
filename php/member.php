<?php
  session_start(); 	
  include('../php/register.php');
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
    <link href="../css/member_style.css" rel="stylesheet" type="text/css" />
  </head>
  
  <body>
    <div class="container" style="margin-top:30px">
    <h1 align="center"><span class="head"><strong>Register now!</strong></span></h1><br><br>
    <div class="row">
      <div class="col-sm-6">
      <h2><p><b>Your Personal Information<b/></p></h2>
      <form name="regis" method="post" action="member.php">
        <label for="fname">First Name : </label><br>
        <input type="text" id="fname" name="fname" value="<?php echo $firstname; ?>" maxlength = "30" required ><br><br>
        <label for="lname">Last Name : </label><br>
        <input type="text" id="lname" name="lname" value="<?php echo $lastname; ?>" maxlength = "30" required><br><br>
        <label for="address">Address : </label><br>
        <input type="text" id="address" name="address" value="<?php echo $address; ?>" maxlength = "50" required><br><br>
        <label for="tel">Phone Number : </label><br>
        <input type="tel" id="tel" name="tel" value="<?php echo $telephone; ?>" pattern = "[0-9]{10}" title="Please enter your phone number in 10 digit" required><br><br>
        <label for="em">Email Address : </label><br>
        <input type="email" id="em" name="em" value="<?php echo $email; ?>" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" maxlength = "50" title="Please enter in pattern of Email address " required><br><br>
      </div>

     <div class="col-sm-6">
      <h2><p><b>Username and Password<b/></p></h2>
      <label for="uname">Username : </label><br>
      <input type="text" id="uname" name="regis_uname" value="<?php echo $username; ?>" maxlength = "30" required><br><br>
      <label for="pw">Password : </label><br>
      <input type="password" id="pw" name="regis_pw1" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{5,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 5 or more characters" required><br><br> 
      <label for="pw2">Confirm Password : </label><br>
      <input type="password" id="pw2" name="regis_pw2" onchange="check();" required><br><br> 
    </div>
    </div>
    <div align="center">
    <button id="btn" type="submit" name="register" style="color:green"><b>Register</b></button>
    </div>    
    </form>
    <br>
    <script src="../js/regis_script.js"></script>
  </body>