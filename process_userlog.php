<?php
  $username = $_POST['user'];
  $password = $_POST['pass'];

  session_start();
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'iits_programming_club');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
    $username = stripcslashes($username);
  $password = stripcslashes($password);
  $sql = "select * from student_login where student_id ='$username' and student_password = '$password'";
  $result = mysqli_query($db, $sql);
  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    if($row['student_id'] == $username && $row['student_password'] == $password){
      echo "Login Success!!! Welcome ".$row['student_id'];
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
      echo "Please insert all the informations if empty. <br>";
      echo "<br>";
      echo "<br>";

    }
    else{
      header('location: failedlogin.php');
      echo "Failed to login";
    }
?>

<body>
        <form method="post" action="studentpage.php">
        Name :  <input type="text" name="name"/><hr/>
        Password: <input type="text" name="password"/><hr/>
        Codeforces Handle :  <input type="text" name="codeforces"/><hr/>
        Codechef Handle : <input type="text" name="codechef"/><hr/>
        Vjudge Handle : <input type="text" name="vjudge"/><hr/>
        Hackerrank Handle : <input type="text" name="hackerrank"/><hr/>
        Atcoder Handle : <input type="text" name="atcoder"/><hr/>
        Your must have to enter your ID, if you want to update the information. ID : <input type="text" name="id"/><hr/>
        <input type="submit"  name="button" value="Update"/>
        </form>
</body>
<!DOCTYPE html>
<html>
<head>
  <title>Member Information</title>
  <link rel="icon" type="image/gif/png" href="Club logo1.png">
  <button id="btn" ><a href="logout.php">Logout</a></button>
</head>
<body>

</body>
</html>