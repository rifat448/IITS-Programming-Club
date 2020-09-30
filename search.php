<?php
  $username = $_POST['name'];

  session_start();
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'iits_programming_club');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
    $username = stripcslashes($username);
  $sql = "select * from student_login where student_id ='$username' ";
  $result = mysqli_query($db, $sql);
  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    if($row['student_id'] == $username ){
      $sql="select * from student_login where student_id ='$username'";
      $result = mysqli_query($db, $sql);
      $row = mysqli_fetch_array($result);
      echo "<br>";
      echo "<br>";
      echo "Your informatoins : <br>";
      echo "<br>";
      echo "Id = ";
      print_r($row['student_id']);
      echo "<br>";
      echo "Name = ";
      print_r($row['student_name']);
      echo "<br>";
      echo "Password = ";
      print_r($row['student_password']);
      echo "<br>";
      echo "Codeforces Handle = ";
      print_r($row['codeforces_handle']);
      echo "<br>";
      echo "Codechef Handle = ";
      print_r($row['codechef_handle']);
      echo "<br>";
      echo "Vjudge Handle = ";
      print_r($row['vjudge_handle']);
      echo "<br>";
      echo "Hackerrank Handle = ";
      print_r($row['hackerrank_handle']);
      echo "<br>";
      echo "Atcoder Handle = ";
      print_r($row['atcoder_handle']);
      echo "<br>";
      echo "<br>";

    }
    else{
      echo "Member is not registered.";
    }
?>
<!DOCTYPE html>
<html>
<head>
  <title>Add Admin</title>
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