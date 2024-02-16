<?php 
session_start();
$username=$_SESSION["username"];
//echo $username ."<br>";
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
$sql="delete from manga where username='$username'";
$res = mysqli_query($conn,$sql);

if($res){
    header("Location: main.html");
    exit();
    //echo "<a href='https://www.google.com'>hello</a>";
}
else {
    echo "Query Fail";
    exit;
}
mysqli_free_result($res);
?>