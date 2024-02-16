<?php 
$username=$_POST["username"];
$password=$_POST["password"];
//echo $username ."<br>";


$servername = "localhost";
$username1 ="root";
$password1 = "";
$database = "dbtest";
$conn = new mysqli($servername, $username1, $password1,$database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql="select * from manga where username='$username' and password='$password'";
$res = mysqli_query($conn,$sql);
session_start();
//$_SESSION["username"]="$username1";
while($row=mysqli_fetch_row($res))
{
    $username=$row[0];
    $_SESSION["username"]="$username";
    $password=$row[1];
    $_SESSION["password"]="$password";
    $name=$row[2];
    $_SESSION["name"]="$name";
    $mn=$row[3];
    $_SESSION["mn"]="$mn";
    $email=$row[4];
    $_SESSION["email"]="$email";
}
if($res->num_rows == 1){
    //echo "Login done";
    header("Location: user_page.html");
}
else {
    echo "Incorrect username or password";
    exit;
}
mysqli_free_result($res);
?>