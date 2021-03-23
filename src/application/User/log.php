<?php
include_once 'dbConnection.php';

$empid = $_POST['empid'];

$psw = $_POST['psw'];
$psw=md5($psw);

$q3=mysqli_query($con,"SELECT * FROM signup WHERE empid='$empid'");
while($row=mysqli_fetch_array($q3) )
{
	$password=$row['psw'];
	$employeeid=$row['empid'];
	$name=$row['name'];

	
}

if($empid==$employeeid && $psw==$password)
{
session_start();
$_SESSION["empid"] = $empid;
$_SESSION["name"] = $name;

header("location:home.php");
}
else
{
header("location:index.php");
}

?>
  