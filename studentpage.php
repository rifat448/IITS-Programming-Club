<?php
$link = mysqli_connect("localhost", "root", "", "iits_programming_club"); 
  
if($link === false){ 
    die("ERROR: Could not connect. "  
                . mysqli_connect_error()); 
} 
  

if(empty($_POST["name"])){
  goto a;
}
else{
  $sql = "UPDATE student_login SET student_name = '$_POST[name]' WHERE student_id = '$_POST[id]'";
  mysqli_query($link, $sql);
}

a:

if(empty($_POST["password"])){
  goto b;
}
else{
  $sql = "UPDATE student_login SET student_password = '$_POST[password]' WHERE student_id = '$_POST[id]'";
  mysqli_query($link, $sql);
}
b:
if(empty($_POST["codeforces"])){
  goto c;
}
else{
  $sql = "UPDATE student_login SET codeforces_handle = '$_POST[codeforces]' WHERE student_id = '$_POST[id]'";
  mysqli_query($link, $sql);
}
c:
if(empty($_POST["codechef"])){
  goto d;
}
else{
  $sql = "UPDATE student_login SET codechef_handle = '$_POST[codechef]' WHERE student_id = '$_POST[id]'";
  mysqli_query($link, $sql);
}
d:
if(empty($_POST["vjudge"])){
  goto e;
}
else{
  $sql = "UPDATE student_login SET vjudge_handle = '$_POST[vjudge]' WHERE student_id = '$_POST[id]'";
  mysqli_query($link, $sql);
}
e:
if(empty($_POST["hackerrank"])){
  goto f;
}
else{
  $sql = "UPDATE student_login SET hackerrank_handle = '$_POST[hackerrank]' WHERE student_id = '$_POST[id]'";
  mysqli_query($link, $sql);
}
f:
if(empty($_POST["atcoder"])){
  goto g;
}
else{
  $sql = "UPDATE student_login SET atcoder_handle = '$_POST[atcoder]' WHERE student_id = '$_POST[id]'";
  mysqli_query($link, $sql);
}
g:
mysqli_close($link); 
?>
<body>
      <form method="post" action="logout.php">
        <input type="submit"  name="button" value="Logout"/>
      </form>
</body>