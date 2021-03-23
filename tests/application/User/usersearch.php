<!DOCTYPE html>
<html lang="en">
<head>
  <title>Quizzie</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/2.0/reset.min.css'>


  <!--alert message-->
<?php if(@$_GET['w'])
{echo'<script>alert("'.@$_GET['w'].'");</script>';}
?>
<!--alert message end-->
</head>
<?php
include_once 'dbConnection.php';
?>
<?php
 include_once 'dbConnection.php';
  session_start();
  if(!(isset($_SESSION['empid']))){
header("location:sign.php");

}
else
{
$name = $_SESSION['name'];
$empid=$_SESSION['empid'];

include_once 'dbConnection.php';
}

?>

<style>

body {
	  min-height: 450px;
      height: 100vh;
      margin: 0;
      background: -webkit-radial-gradient(ellipse farthest-corner at center top, #f39264 0%, #f2606f 100%);
      background: radial-gradient(ellipse farthest-corner at center top, #f39264 0%, #f2606f 100%);	  
	  
}

.navbar{
	font-family: 'Open Sans', sans-serif;
	
}



.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  position:relative;
  left:570px;
  bottom:75px;
  font-size: 16px;
 
  cursor: pointer;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
}



.button:hover {
	color:white;
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}


.card {
  background-color:white;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 50%;
  height:400px;
  overflow:hidden;
  position:relative;
  left:25%;
  
  
}


.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}




</style>


<body>

</div>
</div></div>
<div id="navbar">
<nav class="navbar navbar-inverse navbar-fixed-top"">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Quizzie</a>
    </div>
    <ul class="nav navbar-nav">
      <li><?php if(@$_GET['q']==0) ?><a href="home.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
      <li><a href="account.php?q=1"><?php if(@$_GET['q']==1)  ?><span class="glyphicon glyphicon-globe"></span> Discover</a></li>
      <li><a href="leaderboard.php"><?php if(@$_GET['q']==3)  ?><span class="glyphicon glyphicon-stats"></span> Leaderboard</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
    <form class="navbar-form navbar-left" action="usersearch.php">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search" name="search">
        <div class="input-group-btn">
          <button class="btn btn-default" type="submit">
            <i class="glyphicon glyphicon-search"></i>
          </button>
        </div>
      </div>
    </form>
      <li><a href="myprofile.php"><span class="glyphicon glyphicon-user"></span> My Profile</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
    </ul>
  </div>
</nav>

</div>

   
</div>
  
<br>
  <!--home start-->

<?php if(@$_GET['search']== 'gcp'){

$result = mysqli_query($con,"SELECT * FROM quiz WHERE csp='gcp'") or die('Error');

$c=1;
while($row = mysqli_fetch_array($result)) {
	$title = $row['title'];
	$noq = $row['noq'];
    $time = $row['time'];
	$quizid = $row['quizid'];
$q12=mysqli_query($con,"SELECT quizscore FROM users WHERE quizid='$quizid' AND empid='$empid'" )or die('Error98');
$rowcount=mysqli_num_rows($q12);
$count=1;	
if($rowcount == 0){
   echo '<br>';
   echo '<br>';
   echo '<br>';
   echo '<br>';
	echo'<div class="card">
    <img src="quiz.png" alt="Avatar" style="width:100%">
      <div class="container">
	 
    <h3>'.$title.'</b></h3> 
    <p>No.of questions:'.$noq.' Time allocated:'.$time.' min</p>
	<br>
	 <b><a href="account.php?q=quiz&step=2&quizid='.$quizid.'&n=1&noq='.$noq.'" class="button" style="margin:10px;background:#32cc63">
	<span class="fa fa-pencil-square-o" aria-hidden="true"></span>&nbsp;<span class="title1"><b>Start</b></span></a></b>
	<br>
  </div>
</div>
';
}
else
{
	
	echo'<br>';
	echo'<br>';
	echo'<div class="card">
    <img src="quiz.png" alt="Avatar" style="width:100%">
      <div class="container">
	
    <h3>'.$title.'</b></h3> 
	
    <p>No.of questions:'.$noq.' Time allocated:'.$time.' min</p> 

	 <b><a href="account.php?q=quiz&step=2&quizid='.$quizid.'&n=1&noq='.$noq.'" class="button" style="margin:10px;background:#ff3d3d">
	<span class="fa fa-pencil-square-o" aria-hidden="true"></span>&nbsp;<span class="title1"><b>Retry</b></span></a></b>

	</div>
  </div>
</div>
'; 
	
}
}
$c=0;
echo '</table></div></div>';

}?>


<?php if(@$_GET['search']== 'aws'){

$result = mysqli_query($con,"SELECT * FROM quiz WHERE csp='aws'") or die('Error');

$c=1;
while($row = mysqli_fetch_array($result)) {
	$title = $row['title'];
	$noq = $row['noq'];
    $time = $row['time'];
	$quizid = $row['quizid'];
$q12=mysqli_query($con,"SELECT quizscore FROM users WHERE quizid='$quizid' AND empid='$empid'" )or die('Error98');
$rowcount=mysqli_num_rows($q12);
$count=1;	
if($rowcount == 0){
   echo '<br>';
   echo '<br>';
   echo '<br>';
   echo '<br>';
	echo'<div class="card">
    <img src="quiz.png" alt="Avatar" style="width:100%">
      <div class="container">
	 
    <h3>'.$title.'</b></h3> 
    <p>No.of questions:'.$noq.' Time allocated:'.$time.' min</p>
	<br>
	 <b><a href="account.php?q=quiz&step=2&quizid='.$quizid.'&n=1&noq='.$noq.'" class="button" style="margin:10px;background:#99cc32">
	<span class="glyphicon glyphicon-new-window" aria-hidden="true"></span>&nbsp;<span class="title1"><b>Start</b></span></a></b>
	<br>
  </div>
</div>
';
}
else
{
	
	echo'<br>';
	echo'<br>';
	echo'<div class="card">
    <img src="quiz.png" alt="Avatar" style="width:100%">
      <div class="container">
	
    <h3>'.$title.'</b></h3> 
	
    <p>No.of questions:'.$noq.' Time allocated:'.$time.' min</p> 

	 <b><a href="account.php?q=quiz&step=2&quizid='.$quizid.'&n=1&noq='.$noq.'" class="button" style="margin:10px;background:#ff3d3d">
	<span class="fa fa-pencil-square-o" aria-hidden="true"></span>&nbsp;<span class="title1"><b>Retry</b></span></a></b>

	</div>
  </div>
</div>
'; 
	
}
}
$c=0;
echo '</table></div></div>';

}?>

<?php if(@$_GET['search']== 'azure'){

$result = mysqli_query($con,"SELECT * FROM quiz WHERE csp='azure'") or die('Error');

$c=1;
while($row = mysqli_fetch_array($result)) {
	$title = $row['title'];
	$noq = $row['noq'];
    $time = $row['time'];
	$quizid = $row['quizid'];
$q12=mysqli_query($con,"SELECT quizscore FROM users WHERE quizid='$quizid' AND empid='$empid'" )or die('Error98');
$rowcount=mysqli_num_rows($q12);
$count=1;	
if($rowcount == 0){
   echo '<br>';
   echo '<br>';
   echo '<br>';
   echo '<br>';
	echo'<div class="card">
    <img src="quiz.png" alt="Avatar" style="width:100%">
      <div class="container">
	 
    <h3>'.$title.'</b></h3> 
    <p>No.of questions:'.$noq.' Time allocated:'.$time.' min</p>
	<br>
	 <b><a href="account.php?q=quiz&step=2&quizid='.$quizid.'&n=1&noq='.$noq.'" class="button" style="margin:10px;background:#99cc32">
	<span class="glyphicon glyphicon-new-window" aria-hidden="true"></span>&nbsp;<span class="title1"><b>Start</b></span></a></b>
	<br>
  </div>
</div>
';
}
else
{
	
	echo'<br>';
	echo'<br>';
	echo'<div class="card">
    <img src="quiz.png" alt="Avatar" style="width:100%">
      <div class="container">
	
    <h3>'.$title.'</b></h3> 
	
    <p>No.of questions:'.$noq.' Time allocated:'.$time.' min</p> 

	 <b><a href="account.php?q=quiz&step=2&quizid='.$quizid.'&n=1&noq='.$noq.'" class="button" style="margin:10px;background:#ff3d3d">
	<span class="fa fa-pencil-square-o" aria-hidden="true"></span>&nbsp;<span class="title1"><b>Retry</b></span></a></b>

	</div>
  </div>
</div>
'; 
	
}
}
$c=0;
echo '</table></div></div>';

}?>
	
