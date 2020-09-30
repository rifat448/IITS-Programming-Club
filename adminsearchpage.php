<?php
  $username = $_POST['name'];

  session_start();
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'iits_programming_club');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
    $username = stripcslashes($username);
  $sql = "select * from admin_login where admin_id ='$username' ";
  $result = mysqli_query($db, $sql);
  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    if($row['admin_id'] == $username ){
      $sql="select * from admin_login where admin_id ='$username'";
      $result = mysqli_query($db, $sql);
      $row = mysqli_fetch_array($result);
      echo "<br>";
      echo "<br>";
      echo "Your informatoins : <br>";
      echo "<br>";
      echo "Id = ";
      print_r($row['admin_id']);
      echo "<br>";
      echo "Name = ";
      print_r($row['admin_name']);
      echo "<br>";
      echo "Username = ";
      print_r($row['admin_username']);
      echo "<br>";
      echo "Password = ";
      print_r($row['admin_password']);
      echo "<br>";
      echo "<br>";

    }
    else{
      echo "Admin is not registered.";
    }
?>
<!DOCTYPE html>
<html>
<head>
  <title>Admin Infor</title>
  <link rel="icon" type="image/gif/png" href="Club logo1.png">
  <button id="btn" ><a href="adminpage.html">Goto Admin Page</a></button>
</head>
<body>
  <pre>



</pre>

<center> 
  <button onclick="myFunction()"> Print</button>
</center>

<script>
  function myFunction(){
    window.print();
  }
</script>
</body>
</html>