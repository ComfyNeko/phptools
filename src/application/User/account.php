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


label.btn {
    padding: 18px 60px;
    white-space: normal;
    -webkit-transform: scale(1.0);
    -moz-transform: scale(1.0);
    -o-transform: scale(1.0);
    -webkit-transition-duration: .3s;
    -moz-transition-duration: .3s;
    -o-transition-duration: .3s
}

label.btn:hover {
    text-shadow: 0 3px 2px rgba(0, 0, 0, 0.4);
    -webkit-transform: scale(1.1);
    -moz-transform: scale(1.1);
    -o-transform: scale(1.1)
}

label.btn-block {
    text-align: left;
    position: relative
}

label .btn-label {
    position: absolute;
    left: 0;
    top: 0;
    display: inline-block;
    padding: 0 10px;
    background: #000000;
    height: 100%
}

label .glyphicon {
    top: 34%
}

.element-1 {
    animation: animationFrames ease .8s;
    animation-iteration-count: 1;
    transform-origin: 50% 50%;
    -webkit-animation: animationFrames ease .8s;
    -webkit-animation-iteration-count: 1;
    -webkit-transform-origin: 50% 50%;
    -ms-animation: animationFrames ease .8s;
    -ms-animation-iteration-count: 1;
    -ms-transform-origin: 50% 50%
}


@keyframes animationFrames {
    0% {
        opacity: 0;
        transform: translate(-1500px, 0px)
    }

    60% {
        opacity: 1;
        transform: translate(30px, 0px)
    }

    80% {
        transform: translate(-10px, 0px)
    }

    100% {
        opacity: 1;
        transform: translate(0px, 0px)
    }
}

@-webkit-keyframes animationFrames {
    0% {
        opacity: 0;
        -webkit-transform: translate(-1500px, 0px)
    }

    60% {
        opacity: 1;
        -webkit-transform: translate(30px, 0px)
    }

    80% {
        -webkit-transform: translate(-10px, 0px)
    }

    100% {
        opacity: 1;
        -webkit-transform: translate(0px, 0px)
    }
}

.modal-header {
    background-color: transparent;
    color: inherit
	
}

.modal-body {
    min-height: 400px
	position:fixed;
	
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

.buttonload {
  background-color: #4CAF50; /* Green background */
  border: none; /* Remove borders */
  color: white; /* White text */
  padding: 12px 24px; /* Some padding */
  font-size: 16px; /* Set a font-size */
  position:relative;
  left:45%;
  
}

.buttonload:hover {
	color:white;
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
/* Add a right margin to each icon */
.fa {
  margin-left: -12px;
  margin-right: 8px;
}

.previous {
   background-color: white;
   color: black;
   margin: 4px 4px;
}

.next {
  background-color:white;
  color:black;
  float:right;
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


.container {
  padding: 2px 16px;
  
}
.radio
{ display:none; }



.loader {
  width: 530px;
  height: 170px;
  position: relative;
  left:45%;
  top:30%;
}
.loader::before, .loader::after {
  content: "";
  width: 0;
  height: 0;
  position: absolute;
  bottom: 30px;
  left: 15px;
  z-index: 1;
  transform: scale(0);
  transition: all 0.2s ease;
}
.loader .txt {
  width: 120%;
  text-align: center;
  position: absolute;
  bottom: -90px;
  left: -40%;
  font-family: 'Abel', sans-serif;
  font-size: 22px;
  letter-spacing: 2px;
  color: white;
}
.loader .code {
  position: absolute;
  z-index: 99;
  bottom: -3px;
  -webkit-animation-name: spaceboots;
  -webkit-animation-duration: 0.8s;
  -webkit-transform-origin: 50% 50%;
  -webkit-animation-iteration-count: infinite;
  -webkit-animation-timing-function: linear;
}
.loader .box {
  width: 100%;
  height: 140px;
  display: block;
  color: white;
  position: absolute;
  top: -70px;
  left: -18px;
  z-index: 2;
  overflow: hidden;
}
.loader .box::before, .loader .box::after {
  display: inline-block;
  font: normal normal normal 14px/1 FontAwesome;
  font-size: inherit;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  position: absolute;
  top: 0;
  left: 0;
  opacity: 0;
}
.loader .box:nth-child(1)::before {
  font-size: 20px;
  content: "\f13b";
  animation: a 1.1s linear infinite;
}
.loader .box:nth-child(1)::after {
  content: "\f13c";
  animation: b 1.3s linear infinite;
}
.loader .box:nth-child(2)::before {
  content: "\f121";
  font-size: 25px;
  animation: c 0.9s linear infinite;
}
.loader .box:nth-child(2)::after {
  content: "\f19a ";
  animation: d 0.7s linear infinite;
}
.loader.amit::before, .loader.amit::after {
  transform: scale(1);
}

@keyframes a {
  0% {
    transform: translate(30px, 0) rotate(30deg);
    opacity: 0;
  }
  100% {
    transform: translate(30px, 150px) rotate(-50deg);
    opacity: 1;
  }
}
@keyframes b {
  0% {
    transform: translate(50px, 0) rotate(-40deg);
    opacity: 0;
  }
  100% {
    transform: translate(40px, 150px) rotate(80deg);
    opacity: 1;
  }
}
@keyframes c {
  0% {
    transform: translate(70px, 0) rotate(10deg);
    opacity: 0;
  }
  100% {
    transform: translate(60px, 150px) rotate(70deg);
    opacity: 1;
  }
}
@keyframes d {
  0% {
    transform: translate(30px, 0) rotate(-50deg);
    opacity: 0;
  }
  100% {
    transform: translate(45px, 150px) rotate(30deg);
    opacity: 1;
  }
}
@-webkit-keyframes spaceboots {
  0% {
    -webkit-transform: translate(2px, 1px) rotate(0deg);
  }
  10% {
    -webkit-transform: translate(-1px, -2px) rotate(-1deg);
  }
  20% {
    -webkit-transform: translate(-3px, 0px) rotate(1deg);
  }
  30% {
    -webkit-transform: translate(0px, 2px) rotate(0deg);
  }
  40% {
    -webkit-transform: translate(1px, -1px) rotate(1deg);
  }
  50% {
    -webkit-transform: translate(-1px, 2px) rotate(-1deg);
  }
  60% {
    -webkit-transform: translate(-3px, 1px) rotate(0deg);
  }
  70% {
    -webkit-transform: translate(2px, 1px) rotate(-1deg);
  }
  80% {
    -webkit-transform: translate(-1px, -1px) rotate(1deg);
  }
  90% {
    -webkit-transform: translate(2px, 2px) rotate(0deg);
  }
  100% {
    -webkit-transform: translate(1px, -2px) rotate(-1deg);
  }
}

.base-timer {
  position: fixed;
  width: 200px;
  height: 200px;
  left:80%;
  top:10%;
  }

.base-timer__svg {
  transform: scaleX(-1);
}

.base-timer__circle {
  fill: none;
  stroke: none;
  
}

.base-timer__path-elapsed {
  stroke-width: 7px;
  stroke: grey;
}

.base-timer__path-remaining {
  stroke-width: 7px;
  stroke-linecap: round;
  transform: rotate(90deg);
  transform-origin: center;
  transition: 1s linear all;
  fill-rule: nonzero;
  stroke: currentColor;
}

.base-timer__path-remaining.green {
  color: rgb(65, 184, 131);
}

.base-timer__path-remaining.orange {
  color: orange;
}

.base-timer__path-remaining.red {
  color: red;
}

.base-timer__label {
  position: absolute;
  width: 200px;
  height: 200px;
  top: 0px;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 40px;
  color:white;
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
      <li> <a href="userlogin.php" onclick="return confirm('Are you sure to logout?');"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
    </ul>
  </div>
</nav>

</div>

   
</div>
  
<br>
  <!--home start-->

<?php if(@$_GET['q']==1) {

$result = mysqli_query($con,"SELECT * FROM quiz ORDER BY quizid DESC") or die('Error');

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
	 <b><a href="account.php?q=quiz&step=2&quizid='.$quizid.'&n=1&noq='.$noq.'" class="button" style="margin:10px;background:"#32cc63">
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
	

<!--home closed-->

<!--qiz star-->

<?php
if(@$_GET['q']== 'quiz' && @$_GET['step']== 2) {
$quizid=@$_GET['quizid'];
$sn=@$_GET['n'];
$noq=@$_GET['noq'];
$os=mysqli_query($con,"SELECT qid FROM questions WHERE quizid='$quizid' " );

while($row=mysqli_fetch_array($os) )
{
$qn=$row['qid'];
}
$a=$qn;
if($sn==1)
{
$q=mysqli_query($con,"SELECT * FROM questions WHERE quizid='$quizid' AND qid= '$qn'" );
}
else
{
	for($i=1;$i<$sn;$i++)
	{
	  $qn=$qn-1;	
	}
$q=mysqli_query($con,"SELECT * FROM questions WHERE quizid='$quizid' AND qid= '$qn'" );

	
}

$qt=mysqli_query($con,"SELECT * FROM quiz WHERE quizid='$quizid'" );
while($row=mysqli_fetch_array($qt) )
{
$quiztime=$row['time'];
echo $quiztime;
}

echo'<div id="app"></div>
<script>
const FULL_DASH_ARRAY = 283;
const WARNING_THRESHOLD = ('.$quiztime.')/2;
const ALERT_THRESHOLD = ('.$quiztime.')/4;

const COLOR_CODES = {
  info: {
    color: "green"
  },
  warning: {
    color: "orange",
    threshold: WARNING_THRESHOLD
  },
  alert: {
    color: "red",
    threshold: ALERT_THRESHOLD
  }
};

const TIME_LIMIT = ('.$quiztime.')*60;
let timePassed = 0;
let timeLeft = TIME_LIMIT;
let timerInterval = null;
let remainingPathColor = COLOR_CODES.info.color;

document.getElementById("app").innerHTML = `
<div class="base-timer">
  <svg class="base-timer__svg" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
    <g class="base-timer__circle">
      <circle class="base-timer__path-elapsed" cx="50" cy="50" r="45"></circle>
      <path
        id="base-timer-path-remaining"
        stroke-dasharray="283"
        class="base-timer__path-remaining ${remainingPathColor}"
        d="
          M 50, 50
          m -45, 0
          a 45,45 0 1,0 90,0
          a 45,45 0 1,0 -90,0
        "
      ></path>
    </g>
  </svg>
  <span id="base-timer-label" class="base-timer__label">${formatTime(
    timeLeft
  )}</span>
</div>
`;

startTimer();

function onTimesUp() {
  clearInterval(timerInterval);
}

function startTimer() {
  timerInterval = setInterval(() => {
    timePassed = timePassed += 1;
    timeLeft = TIME_LIMIT - timePassed;
    document.getElementById("base-timer-label").innerHTML = formatTime(
      timeLeft
    );
    setCircleDasharray();
    setRemainingPathColor(timeLeft);

    if (timeLeft === 0) {
      onTimesUp();
    }
  }, 1000);
}

function formatTime(time) {
  const minutes = Math.floor(time / 60);
  let seconds = time % 60;

  if (seconds < 10) {
    seconds = `0${seconds}`;
  }

  return `${minutes}:${seconds}`;
}

function setRemainingPathColor(timeLeft) {
  const { alert, warning, info } = COLOR_CODES;
  if (timeLeft <= alert.threshold) {
    document
      .getElementById("base-timer-path-remaining")
      .classList.remove(warning.color);
    document
      .getElementById("base-timer-path-remaining")
      .classList.add(alert.color);
  } else if (timeLeft <= warning.threshold) {
    document
      .getElementById("base-timer-path-remaining")
      .classList.remove(info.color);
    document
      .getElementById("base-timer-path-remaining")
      .classList.add(warning.color);
  }
}

function calculateTimeFraction() {
  const rawTimeFraction = timeLeft / TIME_LIMIT;
  return rawTimeFraction - (1 / TIME_LIMIT) * (1 - rawTimeFraction);
}

function setCircleDasharray() {
  const circleDasharray = `${(
    calculateTimeFraction() * FULL_DASH_ARRAY
  ).toFixed(0)} 283`;
  document
    .getElementById("base-timer-path-remaining")
    .setAttribute("stroke-dasharray", circleDasharray);
}
</script>';


echo '<body oncontextmenu="return false" class="snippet-body">';
echo '<div class="container-fluid">';
echo '<div class="modal-dialog">';
echo '<div class="modal-content">';
echo '<div class="modal-header">';


while($row=mysqli_fetch_array($q) )
{
$qns=$row['questions'];
$qid=$row['qid'];
?>
<h3> <?php echo '<b>'.$sn.'&nbsp;)'.$qns.'</b><br /><br />' ;
echo '</div>';
?>
<?php
}
?>
<?php 
$q=mysqli_query($con,"SELECT * FROM options WHERE qid='$qid' " );
echo '<form action="update.php?q=quiz&step=2&quizid='.$quizid.'&n='.$sn.'&noq='.$noq.'&qid='.$qid.'" method="POST"  class="form-horizontal">
<br />';
?>

<?php

echo '<div class="modal-body">';
echo '<div class="col-xs-3 5"></div>';
echo '<div class="modal-header">';
echo '<div class="quiz" id="quiz" data-toggle="buttons"> ';
$a=0;

while($row=mysqli_fetch_array($q) )
{
	
$options=$row['options'];
$optionid=$row['optionid'];
echo'<label class="element-1 btn btn-lg btn-danger btn-block"><span class="btn-label"><i class="glyphicon glyphicon-chevron-right"></i></span>';
echo'<input type="radio" class="radio" name="ans" value="'.$options.'">'.$options.'<br /><br /></label>';

}

echo'</div>';
if($sn==$noq)
{  
    echo'<div>';
	$prev=$sn-1;
	echo'<button type="submit" class="next round"><i class="glyphicon glyphicon-ok" style="font-size:30px"></i>Submit</button></form></div><br>';
    echo'<a href="account.php?q=quiz&step=2&quizid='.$quizid.'&n='.$prev.'&noq='.$noq.'"  class="previous round" ><i class="glyphicon glyphicon-menu-left" style="font-size:30px"></i></button>';
     echo'</div>';
}
else{
$prev=$sn-1;
echo'<a href="account.php?q=quiz&step=2&quizid='.$quizid.'&n='.$prev.'&noq='.$noq.'"  class="previous round" ><i class="glyphicon glyphicon-menu-left" style="font-size:30px"></i></button>';
echo'<button type="submit" class="next round"><i class="glyphicon glyphicon-menu-right" style="font-size:30px"></i></button></form></div><br>';
echo'<br>';
echo'</div>';

}
}
?>

</div></div></div></div>


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
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';

echo '<h1 style="text-align:center; color:white">Are you sure you want to submit the test?</h1>';
$pass=$s/2;
if($s>$pass)
{
echo'<br>';
echo '<a href="passtest.php?q=result&quizid='.$quizid.'" class="buttonload"> <i class="fa fa-refresh fa-spin"></i>submit</a>';
}
else{
	echo'<br>';
echo '<a href="failtest.php?q=result&quizid='.$quizid.'" class="buttonload"> <i class="fa fa-refresh fa-spin"></i>submit</a>';	
}
echo '
<div class="loader">   
<span class="box"></span>   
<span class="box"></span>  
<div class="code"> 
   <img src="db.png" width="130px">
</div>    

<span class="txt">Your result is being processed...</span>
</div>';

}
?>
<!--quiz end-->




<?php
//history start
if(@$_GET['q']== 2) 
{
$q=mysqli_query($con,"SELECT * FROM history WHERE email='$email' ORDER BY date DESC " )or die('Error197');
echo  '<div class="panel title">
<table class="table table-striped title1" >
<tr style="color:red"><td><b>S.N.</b></td><td><b>Quiz</b></td><td><b>Question Solved</b></td><td><b>Right</b></td><td><b>Wrong<b></td><td><b>Score</b></td>';
$c=0;
while($row=mysqli_fetch_array($q) )
{
$eid=$row['eid'];
$s=$row['score'];
$w=$row['wrong'];
$r=$row['sahi'];
$qa=$row['level'];
$q23=mysqli_query($con,"SELECT title FROM quiz WHERE  eid='$eid' " )or die('Error208');
while($row=mysqli_fetch_array($q23) )
{
$title=$row['title'];
}
$c++;
echo '<tr><td>'.$c.'</td><td>'.$title.'</td><td>'.$qa.'</td><td>'.$r.'</td><td>'.$w.'</td><td>'.$s.'</td></tr>';
}
echo'</table></div>';
}

//ranking start
if(@$_GET['q']== 3) 
{
$q=mysqli_query($con,"SELECT * FROM rank  ORDER BY score DESC " )or die('Error223');
echo  '<div class="panel title"><div class="table-responsive">
<table class="table table-striped title1" >
<tr style="color:red"><td><b>Rank</b></td><td><b>Name</b></td><td><b>Gender</b></td><td><b>College</b></td><td><b>Score</b></td></tr>';
$c=0;
while($row=mysqli_fetch_array($q) )
{
$e=$row['email'];
$s=$row['score'];
$q12=mysqli_query($con,"SELECT * FROM user WHERE email='$e' " )or die('Error231');
while($row=mysqli_fetch_array($q12) )
{
$name=$row['name'];
$gender=$row['gender'];
$college=$row['college'];
}
$c++;

echo'<div class="card">
   
      <div class="container">
	    <p style="color:#99cc32"><b>'.$c.'&nbsp;</b></td><td>&nbsp;&nbsp;&nbsp;'.$name.'&nbsp;&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;&nbsp;'.$gender.'&nbsp;</td><td>&nbsp;&nbsp;&nbsp;&nbsp;'.$college.'&nbsp;</td><td>&nbsp;&nbsp;&nbsp;&nbsp;'.$s.'</p>';
        echo'</table></div></div>';
	
	
	echo'<br>';
  echo'</div>';
echo'</div>';

}
}

?>






</body>
</html>
