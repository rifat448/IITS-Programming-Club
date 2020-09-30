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

// sql to delete a record
$sql = "DELETE FROM student_login WHERE student_id='$_POST[id]'";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?> 
</body>
<!DOCTYPE html>
<html>
<head>
  <title>Admin Remove</title>
  <link rel="icon" type="image/gif/png" href="Club logo1.png">
  <button id="btn" ><a href="adminpage.html">Goto Admin Page</a></button>
</head>
<body>

</body>
</html>