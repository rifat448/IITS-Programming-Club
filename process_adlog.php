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
	$sql = "select * from admin_login where admin_username ='$username' and admin_password = '$password'";
	$result = mysqli_query($db, $sql);
	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    if($row['admin_username'] == $username && $row['admin_password'] == $password){
      header('location: adminpage.html');
    	echo "Login Success!!! Welcome ".$row['admin_username'];
    }
    else{
      header('location: failedlogin.php');
    	echo "Failed to login";
    }
?>