<?php
session_start();
if(isset($_SESSION["empid"])){
session_destroy();
}
include_once 'dbConnection.php';
$ref=@$_GET['q'];
$empid = $_POST['empid'];
$psw = $_POST['psw'];

$password=md5($password); 
$result = mysqli_query($con,"SELECT name FROM signup WHERE empid = '$empid' and psw = '$psw'") or die('Error');
$count=mysqli_num_rows($result);
if($count==1){
while($row = mysqli_fetch_array($result)) {
$name = $row['name'];
}
$_SESSION["name"] = $name;
$_SESSION["empid"] = $empid;
header("location:home.php");
}
else
header("location:$ref?w=Wrong Username or Password");


?>