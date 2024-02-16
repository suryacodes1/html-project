<?php
$username=$_POST["username"];
$password=$_POST["password"];
$name=$_POST["name"];
$mobile=$_POST["mn"];
$email=$_POST["email"];


echo $username ."<br>";
echo $password ."<br>";
echo $name ."<br>";
echo $mobile ."<br>";
echo $email ."<br>";
 

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
$sql="insert into manga(username,password,name,mn,email) values ('$username','$password','$name','$mobile','$email')";
$res=$conn->query($sql);
header ("Location:main.html");
if($res==false){
    die("Query fail");
}
echo "Connected successfully";

 ?>