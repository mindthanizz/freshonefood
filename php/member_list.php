<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Member List</title>
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
    <h1><class="head"><strong>Member List</strong></h1>
    <nav class="navbar navbar-expand-sm bg-light">
    <ul>
    <li><a href="../php/admin.php">Manage the product</a></li>
    <li><a class = "active" href="../php/member_list.php">Members</a></li>
    </ul>
    </nav>
    <?php
      require_once "../fresh_database/create/fresh_database.php";
      $conn = mysqli_connect($servername, $username, $password, $dbname);
      $query = "SELECT * FROM Member";
      $result = mysqli_query($conn, $query) or die("Error in sql: $query". mysqli_error($query));
      ?>
      <table>
        <thread>
          <tr>
            <th>MemberId</th>
            <th>MemberFirstName</th>
            <th>MemberLastName</th>
            <th>MemberAddress</th>
            <th>MemberTelephone</th>
            <th>MemberEmail</th>
          </tr>
        </thread>
        <tbody>
          <?php foreach ($result as $row) {?>
            <tr>
              <td><?php echo $row['memberId'];?></td>
              <td><?php echo $row['memberFirstName'];?></td>
              <td><?php echo $row['memberLastName'];?></td>
              <td><?php echo $row['address'];?></td>
              <td><?php echo $row['phoneNumber'];?></td>
              <td><?php echo $row['email'];?></td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
      <?php mysqli_close($conn);?>
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
</style>