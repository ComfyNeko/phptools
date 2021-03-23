<!DOCTYPE html>
<html>
<title>Quizzie</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 <link rel="stylesheet" href="quiznavigation.html">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans'>

  <head>
 <?php
 include_once 'dbConnection.php';
 session_start();
  if(!(isset($_SESSION['empid']))){
header("location:index.php");

}
else
{
$name = $_SESSION['name'];
$empid=$_SESSION['empid'];

include_once 'dbConnection.php';

}?>
</head>
<style>
@import url("quiznavigation.html"); 
HTML {
  /*using system font-stack*/
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
  font-size: 115%; /*~18px*/
  font-size: calc(12px + (25 - 12) * (100vw - 300px) / (1300 - 300) );
  line-height: 1.5;
  box-sizing: border-box;
}

BODY {
    min-height: 450px;
      height: 100vh;
      margin: 0;
    background: -webkit-radial-gradient(ellipse farthest-corner at center top, #f39264 0%, #f2606f 100%);
     background: radial-gradient(ellipse farthest-corner at center top, #f39264 0%, #f2606f 100%);
}

*, *::before, *::after {
  box-sizing: inherit;
  color: inherit;
}

/*Actual Style*/
 
/*=======================
       C-Container
=========================*/
.c-container {
  max-width: 27rem;
  margin: 1rem auto 0;
  padding: 1rem;
}

/*=======================
       O-Circle
=========================*/

.o-circle {
  display: flex;
  width: 10.555rem; height: 10.555rem;
  justify-content: center;
  align-items: flex-start;
  border-radius: 50%; 
  animation: circle-appearance .8s ease-in-out 1 forwards, set-overflow .1s 1.1s forwards;
}

.c-container__circle {
  margin: 0 auto 5.5rem;
}

/*=======================
    C-Circle Sign
=========================*/
      
.o-circle__sign {
  position: relative;
  opacity: 0;
  background: #fff;
  animation-duration: .8s;
  animation-delay: .2s;
  animation-timing-function: ease-in-out;
  animation-iteration-count: 1;
  animation-fill-mode: forwards;
}

.o-circle__sign::before, 
.o-circle__sign::after {
  content: "";
  position: absolute;
  background: inherit;
}

.o-circle__sign::after {
  left: 100%; top: 0%;
  width: 500%; height: 95%; 
  transform: translateY(4%) rotate(0deg);
  border-radius: 0;
  opacity: 0;
  animation: set-shaddow 0s 1.13s ease-in-out forwards;
  z-index: -1;
}

/*=======================
      Sign Success
=========================*/
 
.o-circle__sign--success { 
  background: rgb(56, 176, 131);
}

.o-circle__sign--success .o-circle__sign {
  width: 1rem; height: 6rem;
  border-radius: 50% 50% 50% 0% / 10%;
  transform: translateX(130%) translateY(35%) rotate(45deg) scale(.11);  
  animation-name: success-sign-appearance;
}

.o-circle__sign--success .o-circle__sign::before {
   bottom: -17%;
   width: 100%; height: 50%; 
   transform: translateX(-130%) rotate(90deg);
   border-radius: 50% 50% 50% 50% / 20%;

}

/*--shadow--*/
.o-circle__sign--success .o-circle__sign::after {
   background: rgb(40, 128, 96);
}
 


 

/*=======================
      Sign Failure
=========================*/

.o-circle__sign--failure {
  background: rgb(236, 78, 75);
}

.o-circle__sign--failure .o-circle__sign {
  width: 1rem; height: 7rem;
  transform: translateY(25%) rotate(45deg) scale(.1);
  border-radius: 50% 50% 50% 50% / 10%;
  animation-name: failure-sign-appearance;
}

.o-circle__sign--failure .o-circle__sign::before {
   top: 50%;
   width: 100%; height: 100%; 
   transform: translateY(-50%) rotate(90deg);
   border-radius: inherit;
} 

/*--shadow--*/
.o-circle__sign--failure .o-circle__sign::after {
   background: rgba(175, 57, 55, .8);
}


/*-----------------------
      @Keyframes
--------------------------*/
 
/*CIRCLE*/
@keyframes circle-appearance {
  0% { transform: scale(0); }
  
  50% { transform: scale(1.5); }
          
  60% { transform: scale(1); }
  
  100% { transform: scale(1); }
}

/*SIGN*/
@keyframes failure-sign-appearance {         
  50% { opacity: 1;  transform: translateY(25%) rotate(45deg) scale(1.7); }
    
  100% { opacity: 1; transform: translateY(25%) rotate(45deg) scale(1); }
}

@keyframes success-sign-appearance {      
  50% { opacity: 1;  transform: translateX(130%) translateY(35%) rotate(45deg) scale(1.7); }
    
  100% { opacity: 1; transform: translateX(130%) translateY(35%) rotate(45deg) scale(1); }
}
 

@keyframes set-shaddow {
  to { opacity: 1; }
}

@keyframes set-overflow {
  to { overflow: hidden; }
}



/*+++++++++++++++++++
    @Media Queries
+++++++++++++++++++++*/

@media screen and (min-width: 1300px) {
  
  HTML { font-size: 1.5625em; } /* 25 / 16 = 1.5625 */
  
}
.navbar{
	font-family: 'Open Sans', sans-serif;
	
}

</style>
<body>

<nav class="navbar navbar-inverse">
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
      <li><a href="userlogin.php" onclick="return confirm('Are you sure to logout?');"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
    </ul>
  </div>
</nav>
  
<div class="container">
  <h3></h3>
  <p></p>
</div>


<section class="c-container">
 
  <div class="o-circle c-container__circle o-circle__sign--success">
 
    <div class="o-circle__sign"></div>  
  </div>   
  


<?php
//result display
if(@$_GET['q']== 'result' && @$_GET['quizid']) 
{

$quizid=@$_GET['quizid'];
$q=mysqli_query($con,"SELECT * FROM users WHERE quizid='$quizid' AND empid='$empid' " )or die('Error157');

while($row=mysqli_fetch_array($q) )
{
$s=$row['quizscore'];
}
	echo'<h1 style="color:white">You cleared the quiz with a score of '.$s.'!</h1>';
	


/*echo '<tr style="color:#66CCFF"><td>Total Questions</td><td>'.$noq.'</td></tr>
      <tr style="color:#99cc32"><td>right Answer&nbsp;<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span></td><td>'.$r.'</td></tr> 
	  <tr style="color:red"><td>Wrong Answer&nbsp;<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></td><td>'.$w.'</td></tr>
	  <tr style="color:#66CCFF"><td>Score&nbsp;<span class="glyphicon glyphicon-star" aria-hidden="true"></span></td><td>'.$s.'</td></tr>';

$q=mysqli_query($con,"SELECT * FROM rank WHERE  email='$email' " )or die('Error157');
while($row=mysqli_fetch_array($q) )
{
$s=$row['score'];
echo '<tr style="color:#990000"><td>Overall Score&nbsp;<span class="glyphicon glyphicon-stats" aria-hidden="true"></span></td><td>'.$s.'</td></tr>';
}
echo '</table></div>';
*/
}
?>


<script src="confetti.js"></script>
    <script>
      //   confetti.stop();

      const startit = () => {
        setTimeout(function () {
          console.log("start");
          confetti.start();
        }, 1000);
      };

      const stopit = () => {
        setTimeout(function () {
          console.log("stop");
          confetti.stop();
        }, 6000);
      };

      startit();
      stopit();
    </script>
</body>
</html>
