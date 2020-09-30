<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "iits_programming_club";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO admin_login (admin_id, admin_name, admin_username, admin_password)
VALUES ('$_POST[id]','$_POST[Name]','$_POST[username]','$_POST[password]')";

if ($conn->query($sql) == TRUE) {
    echo "New Admin Added";
} else {
         echo "<center><h2><br><br><br><br>ID has already been registered.</h2></center>";
}

$conn->close();
?>
</body>
<!DOCTYPE html>
<html>
<head>
  <title>Add Admin</title>
  <link rel="icon" type="image/gif/png" href="Club logo1.png">
  <button id="btn" ><a href="adminpage.html">Goto Admin Page</a></button>
</head>
<body>

</body>
</html>