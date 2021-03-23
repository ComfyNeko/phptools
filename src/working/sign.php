<?php
include_once 'dbConnection.php';
ob_start();
$empid = $_POST['empid'];

$name = $_POST['name'];
$email = $_POST['email'];
$psw = $_POST['psw'];
$psw=md5($psw);

echo $psw;
$q3=mysqli_query($con,"INSERT INTO signup VALUES  ('$empid' , '$name' , '$email','$psw')");
if($q3)
{
session_start();
$_SESSION["empid"] = $empid;
$_SESSION["name"] = $name;
header("location:index.php");

}
else
{
header("location:sign.php");

}
ob_end_flush();
?>

