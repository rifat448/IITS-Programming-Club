<?php
	$servername = "localhost";
$username = "root";
$password = "";
$dbname = "iits_programming_club";

$conn = new mysqli($servername, $username, $password, $dbname);
	$sql="SELECT * FROM admin_login";
	$records=mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registered Members</title>
	<style>
		table{
			border-collapse: collapse;
			width:70%;
			color: black;
			font-family: monospace;
			font-size: 15px;
			text-align: left; 
		}
		th{
			background-color:#d96459;
			color: white; 
		}
		input[type=text] {
  width: 100px;
  -webkit-transition: width .35s ease-in-out;
  transition: width .35s ease-in-out;
}
input[type=text]:focus {
  width: 250px;
}
	</style>
</head>
<body>
	<button id="btn" ><a href="adminpage.html">Goto Admin Page</a></button>
    <br>
    <br>
    <form action="adminsearchpage.php" method="post">
    Enter Admin ID : <input type="text" id="name" name="name">
    <br>
    <button id="btn">Search</a></button>
	</form>
	<h1>
  <p style="text-align: center; color: black; font-size: 25"><b>
    IITS Programming Club Registered Admins</b>
  </p>
</h1>
	<table align="center" width="600" border="1" cellpadding="1" cellspacing="1">
		<tr>
			<th>Admin ID</th>
			<th>Admin Name</th>
			<th>Admin Username</th>
			<th>Admin Password</th>
		</tr>
		<?php
			while($row=mysqli_fetch_assoc($records)){
				echo "<tr><td>".$row["admin_id"]."</td><td>".$row["admin_name"]."</td><td>".$row["admin_username"]."</td><td>".$row["admin_password"]."</td></tr>";
			} 
		?>		
	</table>

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