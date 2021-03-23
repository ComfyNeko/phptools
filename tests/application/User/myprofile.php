<!DOCTYPE html>
<html lang="en">
<head>
  <title>Quizzie</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css'><link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans'>


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
header("location:index.php");

}
else
{
$name = $_SESSION['name'];
$empid=$_SESSION['empid'];

include_once 'dbConnection.php';
}

?>

<style>
@font-face {
  font-family: 'Krub';
  font-style: normal;
  font-weight: 400;
  src: url(https://fonts.gstatic.com/s/krub/v4/sZlLdRyC6CRYbkEaCA.ttf) format('truetype');
}
@font-face {
  font-family: 'Krub';
  font-style: normal;
  font-weight: 700;
  src: url(https://fonts.gstatic.com/s/krub/v4/sZlEdRyC6CRYZvo_GLZyQw.ttf) format('truetype');
}
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
html,
body {
  width: 100%;
  height: 100%;
}
body {
   min-height: 450px;
      height: 100vh;
      margin: 0;
      background: -webkit-radial-gradient(ellipse farthest-corner at center top, #f39264 0%, #f2606f 100%);
      background: radial-gradient(ellipse farthest-corner at center top, #f39264 0%, #f2606f 100%);
	  font-family: 'Open Sans', sans-serif;

}

.navbar{
	font-family: 'Open Sans', sans-serif;
	
}
.card {
  position: absolute;
  
  top: 15%;
  right: 0;
  bottom: 0;
  left: 5%;
  width: 400px;
  height: 550px;
  border-radius: 10px;
  box-shadow: 0 10px 25px 5px rgba(0, 0, 0, 0.2);
  background: #151515;
  overflow: hidden;
}
.card .ds-top {
  position: absolute;
  margin: auto;
  top: 0;
  right: 0;
  left: 0;
  width: 400px;
  height: 90px;
  background: crimson;
  animation: dsTop 1.5s;
}
.card .avatar-holder {
  position: absolute;
  margin: auto;
  top: 40px;
  right: 0;
  left: 0;
  width: 100px;
  height: 100px;
  border-radius: 50%;
  box-shadow: 0 0 0 5px #151515, inset 0 0 0 5px #000000, inset 0 0 0 5px #000000, inset 0 0 0 5px #000000, inset 0 0 0 5px #000000;
  background: white;
  overflow: hidden;
  animation: mvTop 1.5s;
}
.card .avatar-holder img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}
.card .name {
  position: absolute;
  margin: auto;
  top: -60px;
  right: 0;
  bottom: 0;
  left: 0;
  width: inherit;
  height: 40px;
  text-align: center;
  animation: fadeIn 2s ease-in;
}
.card .name a {
  color: white;
  text-decoration: none;
  font-weight: 700;
  font-size: 18px;
}
.card .name a:hover {
  text-decoration: underline;
  color: crimson;
}
.card .name h6 {
  position: absolute;
  margin: auto;
  left: 0;
  right: 0;
  bottom: 0;
  color: white;
  width: 40px;
}

.card .ds-info {
  position: absolute;
  margin: auto;
  top: 120px;
  bottom: 0;
  right: 0;
  left: 0;
  width: inherit;
  height: 40px;
  display: flex;
}
.card .ds-info .pens,
.card .ds-info .projects,
.card .ds-info .posts {
  position: relative;
  left: -300px;
  width: calc(550px / 3);
  text-align: center;
  color: white;
  animation: fadeInMove 2s;
  animation-fill-mode: forwards;
}
.card .ds-info .pens h6,
.card .ds-info .projects h6,
.card .ds-info .posts h6 {
  text-transform: uppercase;
  color: crimson;
}
.card .ds-info .pens p,
.card .ds-info .projects p,
.card .ds-info .posts p {
  font-size: 15px;
}
.card .ds-info .ds:nth-of-type(2) {
  animation-delay: 0.5s;
}
.card .ds-info .ds:nth-of-type(1) {
  animation-delay: 1s;
}
.card .ds-skill {
  position: absolute;
  
  bottom: 18px;
  right: 0;
  left: 40px;
  width: 250px;
  height: 100px;
  animation: mvBottom 1.8s;
}
.card .ds-skill h6 {
  margin-bottom: 5px;
  font-weight: 700;
  text-transform: uppercase;
  color: crimson;
}
.card .ds-skill .skill h6 {
  font-weight: 400;
  font-size: 8px;
  letter-spacing: 0.05em;
  margin: 4px 0;
  color: white;
}
.card .ds-skill .skill .fab {
  color: crimson;
  font-size: 14px;
}
.card .ds-skill .skill .bar {
  height: 5px;
  background: crimson;
  text-align: right;
}
.card .ds-skill .skill .bar p {
  color: white;
  font-size: 8px;
  padding-top: 5px;
  animation: fadeIn 5s;
}
.card .ds-skill .skill .bar:hover {
  background: white;
}
.card .ds-skill .skill .bar-html {
  width: 95%;
  animation: htmlSkill 1s;
  animation-delay: 0.4s;
}
.card .ds-skill .skill .bar-css {
  width: 90%;
  animation: cssSkill 2s;
  animation-delay: 0.4s;
}
.card .ds-skill .skill .bar-js {
  width: 75%;
  animation: jsSkill 3s;
  animation-delay: 0.4s;
}
@keyframes fadeInMove {
  0% {
    opacity: 0;
    left: -300px;
  }
  100% {
    opacity: 1;
    left: 0;
  }
}
@keyframes fadeIn {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}
@keyframes htmlSkill {
  0% {
    width: 0;
  }
  100% {
    width: 95%;
  }
}
@keyframes cssSkill {
  0% {
    width: 0;
  }
  100% {
    width: 90%;
  }
}
@keyframes jsSkill {
  0% {
    width: 0;
  }
  100% {
    width: 75%;
  }
}
@keyframes mvBottom {
  0% {
    bottom: -150px;
  }
  100% {
    bottom: 10px;
  }
}
@keyframes mvTop {
  0% {
    top: -150px;
  }
  100% {
    top: 40px;
  }
}
@keyframes dsTop {
  0% {
    top: -150px;
  }
  100% {
    top: 0;
  }
}
.following {
  color: white;
  background: crimson;
}

@charset "UTF-8";
@import url(https://fonts.googleapis.com/css?family=Montserrat:400,700);
@import url(https://fonts.googleapis.com/css?family=Fjalla+One);
.badge {
  position: relative;
  width: 176px;
  display: inline-block;
  left:40%;
  top:20%;
  background-color:transparent;
}
.badge .title {
  font-family: "Montserrat", sans-serif;
  font-weight: bold;
  font-size: 1.7em;
  position: absolute;
  top: -28px;
  border-radius: 8px 8px 0 0;
  text-align: center;
  width: 100%;
  background: red;
  padding: 20px 0px;
}
.badge .subtitle {
  position: absolute;
  font-family: "Fjalla One", sans-serif;
  font-size: 1.8em;
  width: 100%;
  text-align: center;
  color: white;
  position: absolute;
  top: 100px;
}
.badge .subtitle:after {
  content: "★ ★ ★";
  display: block;
  font-size: .4em;
  position: relative;
  margin: 15px 0 0;
  transition: all .3s;
}
.badge:hover .subtitle:after {
  word-spacing: 30px;
}

.red .title {
  background: #DC514E;
}
.red .subtitle:after {
  color: #DC514E;
}

.green .title {
  background: #2ecc71;
}
.green .subtitle:after {
  color: #2ecc71;
}

.gray .title {
  background: #95a5a6;
}
.gray .subtitle:after {
  color: #95a5a6;
}

.yellow .title {
  background: #f1c40f;
}
.yellow .subtitle:after {
  color: #f1c40f;
}

.blue .title {
  background: #3498db;
}
.blue .subtitle:after {
  color: #3498db;
}

.badgetext{
	color:white;
	position:relative;
	top:15%;
	left:40%;
	font-size:30px;
	font-family: 'Open Sans', sans-serif;
}
.line{
width: 752px;
height: 47px;
border-bottom: 3px solid white;
position: absolute;
left:40%;
top:15%;
}

#table {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 43%;
  margin:200px 40px 40px 650px;
  
}

#table td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#table tr:nth-child(even){background-color: #ff8282;}
#table tr:nth-child(odd){background-color: #fc6d6d;}


#table tr:hover {background-color: #ddd;}

#table th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #dc143c;
  color: white;
}

</style>
<body>

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
      <li><a href="userlogin.php" onclick="return confirm('Are you sure to logout?');"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
    </ul>
  </div>
</nav>

</div>

   
</div>

<?php
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

$gcp = mysqli_query($con,"SELECT users.name, quiz.csp FROM users INNER JOIN quiz ON quiz.quizid=users.quizid WHERE name='$name' AND csp='gcp'");
$rowcount1=mysqli_num_rows($gcp);

$aws = mysqli_query($con,"SELECT users.name, quiz.csp FROM users INNER JOIN quiz ON quiz.quizid=users.quizid WHERE name='$name' AND csp='aws'");
$rowcount2=mysqli_num_rows($aws);

$azure =mysqli_query($con, "SELECT users.name, quiz.csp FROM users INNER JOIN quiz ON quiz.quizid=users.quizid WHERE name='$name' AND csp='azure'");
$rowcount3=mysqli_num_rows($azure);
?>

<div class="card">
  <div class="ds-top"></div>
  <div class="avatar-holder">
    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1820405/profile/profile-512.jpg?1533058950" alt="Albert Einstein">
  </div>
  <div class="name">
    <h1 style="color:white"><?php echo $name ?> </h1>
    
  </div>
 
  <div class="ds-info">
    <div class="ds pens">
      <h6 title="Number of pens created by the user"><b>Quizzes</b><i class="fas fa-edit"></i></h6>
      <p><?php echo $userquiz ?></p>
    </div>
    <div class="ds projects">
      <h6 title="Number of projects created by the user"><b>Projects </b><i class="fas fa-project-diagram"></i></h6>
      <p>0</p>
    </div>
    <div class="ds posts">
      <h6 title="Number of posts"><b>Posts</b> <i class="fas fa-comments"></i></h6>
      <p>0</p>
    </div>
  </div>
  <div class="ds-skill">
    <h6>Skill <i class="fa fa-code" aria-hidden="true"></i></h6>
    <div class="skill html">
      <h6><i class="fab fa-google"></i> GCP </h6>
      <div class="bar bar-html">
        <p><?php echo ($rowcount1)*10 ?>%</p>
      </div>
    </div>
    <div class="skill css">
      <h6><i class="fab fa-aws"></i> AWS </h6>
      <div class="bar bar-css">
        <p><?php echo ($rowcount2)*10 ?>%</p>
      </div>
    </div>
    <div class="skill javascript">
      <h6><i class="fab fa-microsoft"></i> Azure </h6>
      <div class="bar bar-js">
        <p><?php echo ($rowcount3)*10 ?>%</p>
      </div>
    </div>
  </div>
</div>

<?php
echo'<h1 class="badgetext">My Badges</h1>
<br>
<div class="line"></div>';

if($totquiz==$userquiz)
{
echo'<div class="badge red">
  <svg xmlns="http://www.w3.org/2000/svg" version="1.1" x="0px" y="0px" width="176px" height="192px" viewBox="0 0 216 232">
		<path fill="#2B2B2B" d="M207,0C171.827,0.001,43.875,0.004,9.003,0c-5.619-0.001-9,3.514-9,9c0,28.23-0.006,151.375,0,169    c0.005,13.875,94.499,54,107.999,54S216,191.57,216,178V9C216,3.298,212.732,0,207,0z"/>
</svg>
  <p class="title">CLOUD<br> MASTER</p>
  <p class="subtitle">CTF 395</p>
</div>';
}

if($gcpquizzes==$rowcount1)

{
echo'<div class="badge green">
  <svg xmlns="http://www.w3.org/2000/svg" version="1.1" x="0px" y="0px" width="176px" height="192px" viewBox="0 0 216 232">
		<path fill="#2B2B2B" d="M207,0C171.827,0.001,43.875,0.004,9.003,0c-5.619-0.001-9,3.514-9,9c0,28.23-0.006,151.375,0,169    c0.005,13.875,94.499,54,107.999,54S216,191.57,216,178V9C216,3.298,212.732,0,207,0z"/>
</svg>
  <p class="title">GCP<br/>MASTER</p>
  <p class="subtitle">CTF 372</p>
</div>';
}

if($awsquizzes==$rowcount2)

{
echo'<div class="badge yellow">
  <svg xmlns="http://www.w3.org/2000/svg" version="1.1" x="0px" y="0px" width="176px" height="192px" viewBox="0 0 216 232">
		<path fill="#2B2B2B" d="M207,0C171.827,0.001,43.875,0.004,9.003,0c-5.619-0.001-9,3.514-9,9c0,28.23-0.006,151.375,0,169    c0.005,13.875,94.499,54,107.999,54S216,191.57,216,178V9C216,3.298,212.732,0,207,0z"/>
</svg>
  <p class="title">AWS <br>MASTER</p>
  <p class="subtitle">CTF 365</p>
</div>';
}

if($azurequizzes==$rowcount3)

{
echo'<div class="badge blue">
  <svg xmlns="http://www.w3.org/2000/svg" version="1.1" x="0px" y="0px" width="176px" height="192px" viewBox="0 0 216 232">
		<path fill="#2B2B2B" d="M207,0C171.827,0.001,43.875,0.004,9.003,0c-5.619-0.001-9,3.514-9,9c0,28.23-0.006,151.375,0,169    c0.005,13.875,94.499,54,107.999,54S216,191.57,216,178V9C216,3.298,212.732,0,207,0z"/>
</svg>
  <p class="title">AZURE<br> MASTER</p>
  <p class="subtitle">CTF 365</p>
</div>';
}
?>
<?php



$sql = "SELECT users.name, quiz.title,quiz.csp, users.quizscore FROM users INNER JOIN quiz ON quiz.quizid=users.quizid WHERE name='$name' AND empid='$empid'";
                
               if(mysqli_query($con, $sql)){ 
			
                        $result = $con->query($sql);
                        $con->close(); 
                        
		} else{ 
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($con); 
		} 
		
?>
<table id="table"> 
			<tr> 
				 <th>Name</th> 
				<th>Quiz title</th> 
                <th>CSP</th> 
                <th>Quiz score</th>  
			</tr> 
			<!-- PHP CODE TO FETCH DATA FROM ROWS--> 
			<?php // LOOP TILL END OF DATA 
				while($rows = $result->fetch_assoc()) 
				{ 
			?> 
			<tr> 
				<!--FETCHING DATA FROM EACH 
					ROW OF EVERY COLUMN--> 
				<td><?php echo $rows['name'];?></td> 
				<td><?php echo $rows['title'];?></td> 
				<td><?php echo $rows['csp'];?></td> 
                <td><?php echo $rows['quizscore'];?></td> 
				
			</tr> 
			<?php 
				} 
			?> 
		</table> 

<script>
const target = {
  clicked: 0,
  currentFollowers: 90,
  btn: document.querySelector("a.btn"),
  fw: document.querySelector("span.followers")
};

const follow = () => {
  target.clicked += 1;
  target.btn.innerHTML = 'Following <i class="fas fa-user-times"></i>';

  if (target.clicked % 2 === 0) {
    target.currentFollowers -= 1;
    target.btn.innerHTML = 'Follow <i class="fas fa-user-plus"></i>';
  }
  else {
    target.currentFollowers += 1;
  }

  target.fw.textContent = target.currentFollowers;
  target.btn.classList.toggle("following");
}

</script>
</body>
</html>