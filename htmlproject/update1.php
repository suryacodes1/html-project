<html>
<body>
        
<?php
 session_start();


$username=$_SESSION["username"];
$name=$_POST["name"];
$mobile=$_POST["mn"];
$email=$_POST["email"];

$servername = "localhost";
$username1 ="root";
$password1 = "";
$database = "dbtest";

// Create connection
$conn = new mysqli($servername, $username1, $password1,$database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql="update manga set name='$name',mn='$mobile',email='$email' where username='$username'";

$res=$conn->query($sql);

if($res==false){
    die("Query fail");
}
header("Location: user_page.html");
?>

</body>
</html>
