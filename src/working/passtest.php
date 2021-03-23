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
 <link rel="stylesheet" type="text/css" href="https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css">
 <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js"></script>
 
 
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





@import url(https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css);

#achievement {
  width: 100px;
  height: 100px;
  border-radius: 50%;
  background: #fff;
  position: relative;
  transform: scale(0);
  transition: 250ms ease-in-out;
  margin: 40px auto;
  box-shadow: 0 3px 20px #ffe8e8;
}
#achievement.expand {
  transform: scale(1);
}
#achievement.expand .circle:before {
  animation: rotate 400ms linear;
}
#achievement.expand.widen {
  width: 380px;
  border-radius: 50px;
}
#achievement .circle {
  width: 80px;
  height: 80px;
  border-radius: 50%;
  background: #E4BF2B;
  position: absolute;
  top: 10px;
  left: 10px;
}
#achievement .circle:before {
  font-size: 50px;
  font-family: FontAwesome;
  display: block
  display: inline-block;
  content: "\f005";
  color: #fff;
  position: absolute;
  top: 5px;
  left: 17px;
  transform: scale(1);
  transition: 250ms ease-in-out;
}
#achievement .circle.rotate:before {
  animation: rotateBack 400ms linear;
}
#achievement .copy {
  opacity: 0;
  transition: 250ms ease-in-out;
  width: 240px;
  position: absolute;
  left: 100px;
  top: 35px;
}
#achievement .copy.show {
  opacity: 1;
  top: 25px;
}
#achievement .copy h4 {
  font-size: 22px;
  margin: 0;
}
#achievement .copy p {
  margin: 0;
}
.refresh {
  display: none;
  text-align: center;
  color: #fff;
  text-decoration: underline;
  font-size: 18px;
  cursor: pointer;
}
@keyframes rotate {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}
@keyframes rotateBack {
  0% {
    transform: rotate(360deg);
  }
  100% {
    transform: rotate(0deg);
  }
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
	
	
	
	
$data1 = mysqli_query($con,'SELECT COUNT(csp) AS num FROM quiz WHERE csp="gcp"') or die(mysqli_error());
$row = mysqli_fetch_assoc($data1);
$gcpquizzes = $row['num'];

$data2 = mysqli_query($con,'SELECT COUNT(csp) AS num FROM quiz WHERE csp="aws"') or die(mysqli_error());
$row = mysqli_fetch_assoc($data2);
$awsquizzes = $row['num'];

$data3 = mysqli_query($con,'SELECT COUNT(csp) AS num FROM quiz WHERE csp="azure"') or die(mysqli_error());
$row = mysqli_fetch_assoc($data3);
$azurequizzes = $row['num'];

$data4 = mysqli_query($con,'SELECT COUNT(csp) AS num FROM quiz') or die(mysqli_error());
$row = mysqli_fetch_assoc($data4);
$totquiz = $row['num'];

$q=mysqli_query($con,"SELECT COUNT(name) AS num FROM users WHERE name='$name'") or die(mysqli_error());
$row = mysqli_fetch_assoc($q);
$userquiz = $row['num'];
if($totquiz==$userquiz)
{
	echo'<div id="achievement" class="">
  <div class="circle"></div>
  <div class="copy">
    <h4>New badge Unlocked!</h4>
    <p>Check your profile!</p>
  </div>
</div>';
}
	
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
	

<script>
function showAchievement() {
  $('#achievement .circle').removeClass('rotate');
  // Run the animations
  setTimeout(function () {
    $('#achievement').addClass('expand');
    setTimeout(function () {
      $('#achievement').addClass('widen');
      setTimeout(function () {
        $('#achievement .copy').addClass('show');
      }, 1000);
    }, 1000);
  }, 1000);
  // Hide the achievement
  setTimeout(function () {
    hideAchievement();
  }, 4000);
}

function hideAchievement() {
  setTimeout(function () {
    $('#achievement .copy').removeClass('show');
     setTimeout(function () {
      $('#achievement').removeClass('widen');
       $('#achievement .circle').addClass('rotate');
        setTimeout(function () {
          $('#achievement').removeClass('expand');
          $('.refresh').fadeIn(300);
        }, 1000);
     }, 1000);
  }, 3000);
  
  $('.refresh').click(function () {
    showAchievement();
    $(this).fadeOut(300);
  });
}

showAchievement();
</script>
</body>
</html>
