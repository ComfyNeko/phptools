<!DOCTYPE html>
<html lang="en">
<head>
  <title>Quizzie</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  
</head>
<style>
@import url("https://fonts.googleapis.com/css?family=Spartan&display=swap");
* {
  margin: 0;
  padding: 0;
}

body {
  background: url("https://sharegate.com/app/uploads/2020/05/sgdesktop-teamsmigration-release-featured-1-920x517.png");
  background-size: cover;
  width: 100vw;
  height: 100vh;
  display: grid;
  align-items: center;
  justify-items: center;
  font-size: 12pt;
  font-family: "Spartan";
  color: #2A293E;
}



.skills {
  width: 80%;
  max-width: 660px;
  height: 480px;
  height: 188px;
  margin: auto;
  position: relative;
}

.lines {
  height: 100%;
  position: relative;
}

.line {
  height: inherit;
  width: 2px;
  position: absolute;
  background: linear-gradient(to right, black, red);;
}
.line.l--0 {
  left: 0;
}
.line.l--25 {
  left: 25%;
}
.line.l--50 {
  left: 50%;
}
.line.l--75 {
  left: 75%;
}
.line.l--100 {
  left: calc(100% - 1px);
}

.line__label {
  display: block;
  width: 100px;
  text-align: center;
  position: absolute;
  bottom: -20px;
  right: -50px;
}
.line__label.title {
  text-transform: uppercase;
  font-weight: bold;
}

.charts {
  width: 100%;
  height: 100%;
  position: absolute;
  top: 0;
  left: 0;
  z-index: 10;
}

.chart:not(:first-child) {
  margin-top: 10px;
}

.chart__title {
  display: block;
  margin: 0 0 10px;
  font-weight: bold;
  opacity: 0;
  animation: 1s anim-lightspeed-in ease forwards;
}
.chart--prod .chart__title {
  animation-delay: 3.3s;
}
.chart--design .chart__title {
  animation-delay: 4.5s;
}

.chart--horiz {
  overflow: hidden;
}

.chart__bar {
  height: 30px;
  margin-bottom: 10px;
  background: linear-gradient(to left, black, red);
  border-top-right-radius: 4px;
  border-bottom-right-radius: 4px;
  opacity: 0;
  animation: 1s anim-lightspeed-in ease forwards;
}
.chart--dev .chart__bar:nth-of-type(11) {
  animation-delay: 2.7s;
}
.chart--dev .chart__bar:nth-of-type(10) {
  animation-delay: 2.5s;
}
.chart--dev .chart__bar:nth-of-type(9) {
  animation-delay: 2.3s;
}
.chart--dev .chart__bar:nth-of-type(8) {
  animation-delay: 2.1s;
}
.chart--dev .chart__bar:nth-of-type(7) {
  animation-delay: 1.9s;
}
.chart--dev .chart__bar:nth-of-type(6) {
  animation-delay: 1.7s;
}
.chart--dev .chart__bar:nth-of-type(5) {
  animation-delay: 1.5s;
}
.chart--dev .chart__bar:nth-of-type(4) {
  animation-delay: 1.3s;
}
.chart--dev .chart__bar:nth-of-type(3) {
  animation-delay: 1.1s;
}
.chart--dev .chart__bar:nth-of-type(2) {
  animation-delay: 0.9s;
}
.chart--dev .chart__bar:nth-of-type(1) {
  animation-delay: 0.7s;
}
.chart--prod .chart__bar:nth-of-type(2) {
  animation-delay: 4.2s;
}
.chart--prod .chart__bar:nth-of-type(1) {
  animation-delay: 4s;
}
.chart--design .chart__bar:nth-of-type(4) {
  animation-delay: 5.8s;
}
.chart--design .chart__bar:nth-of-type(3) {
  animation-delay: 5.6s;
}
.chart--design .chart__bar:nth-of-type(2) {
  animation-delay: 5.4s;
}
.chart--design .chart__bar:nth-of-type(1) {
  animation-delay: 5.2s;
}

.chart__label {
  padding-left: 10px;
  line-height: 30px;
  color: white;
}

@keyframes anim-lightspeed-in {
  0% {
    transform: translateX(-200%);
    opacity: 1;
  }
  100% {
    transform: translateX(0);
    opacity: 1;
  }
}

.box-container {
  margin: 100px auto;
  width: 80%;
  height: 500px;
  display: flex;
  align-items: stretch;
  box-shadow: 0 0 3px 5px rgba(0, 0, 0, 0.03);
}
.box-container.right-open .box1-content {
  flex: 0;
  padding: 0;
  opacity: 0;
}
.box-container.right-open .box1-side {
  flex: 0;
}
.box-container.right-open .box2-side {
  flex: 2;
}
.box-container.right-open .box2-content {
  flex: 4;
  padding: 30px 40px;
  opacity: 1;
}

.box1-content,
.box1-side,
.box2-content,
.box2-side {
  transition: all 0.3s ease-out;
  color: darkslategray;
  overflow: hidden;
}

.box1-side,
.box2-side {
  display: flex;
  justify-content: center;
  align-items: flex-end;
}

.box1-content {
  background: #fdad5c;
  flex: 4;
  padding: 30px 40px;
}

.box1-side {
  background: #ffd8a7;
  flex: 2;
}

.box2-side {
  background: #fdad5c;
  flex: 0;
}

.box2-content {
  background: #ffd8a7;
  flex: 0;
}

button {
  background: black;
  padding: 10px 50px;
  border-radius: 5px;
  border: none;
  box-shadow: 1px 1px 8px 1px rgba(0, 0, 0, 0.32);
  color: white;
  margin: 30px 0;
}

ol.gradient-list > li::before, ol.gradient-list > li {
  box-shadow: 0.25rem 0.25rem 0.6rem rgba(0, 0, 0, 0.05), 0 0.5rem 1.125rem rgba(75, 0, 0, 0.05);
}

/*** STYLE ***/
*,
*:before,
*:after {
  box-sizing: border-box;
}

main {
  display: block;
  margin: 0 auto;
  max-width: 40rem;
  padding: 1rem;
}

ol.gradient-list {
  counter-reset: gradient-counter;
  list-style: none;
  margin: 1.75rem 0;
  padding-left: 1rem;
}
ol.gradient-list > li {
  background: white;
  border-radius: 0 0.5rem 0.5rem 0.5rem;
  counter-increment: gradient-counter;
  margin-top: 1rem;
  min-height: 3rem;
  padding: 1rem 1rem 1rem 3rem;
  position: relative;
}
ol.gradient-list > li::before, ol.gradient-list > li::after {
  background: linear-gradient(135deg, #83e4e2 0%, #a2ed56 100%);
  border-radius: 1rem 1rem 0 1rem;
  content: "";
  height: 3rem;
  left: -1rem;
  overflow: hidden;
  position: absolute;
  top: -1rem;
  width: 3rem;
}
ol.gradient-list > li::before {
  align-items: flex-end;
  content: counter(gradient-counter);
  color: #1d1f20;
  display: flex;
  font: 900 1.5em/1 "Montserrat";
  justify-content: flex-end;
  padding: 0.125em 0.25em;
  z-index: 1;
}
ol.gradient-list > li:nth-child(10n+1):before {
  background: linear-gradient(135deg, rgba(162, 237, 86, 0.2) 0%, rgba(253, 220, 50, 0.2) 100%);
}
ol.gradient-list > li:nth-child(10n+2):before {
  background: linear-gradient(135deg, rgba(162, 237, 86, 0.4) 0%, rgba(253, 220, 50, 0.4) 100%);
}
ol.gradient-list > li:nth-child(10n+3):before {
  background: linear-gradient(135deg, rgba(162, 237, 86, 0.6) 0%, rgba(253, 220, 50, 0.6) 100%);
}
ol.gradient-list > li:nth-child(10n+4):before {
  background: linear-gradient(135deg, rgba(162, 237, 86, 0.8) 0%, rgba(253, 220, 50, 0.8) 100%);
}
ol.gradient-list > li:nth-child(10n+5):before {
  background: linear-gradient(135deg, #a2ed56 0%, #fddc32 100%);
}
ol.gradient-list > li:nth-child(10n+6):before {
  background: linear-gradient(135deg, rgba(162, 237, 86, 0.8) 0%, rgba(253, 220, 50, 0.8) 100%);
}
ol.gradient-list > li:nth-child(10n+7):before {
  background: linear-gradient(135deg, rgba(162, 237, 86, 0.6) 0%, rgba(253, 220, 50, 0.6) 100%);
}
ol.gradient-list > li:nth-child(10n+8):before {
  background: linear-gradient(135deg, rgba(162, 237, 86, 0.4) 0%, rgba(253, 220, 50, 0.4) 100%);
}
ol.gradient-list > li:nth-child(10n+9):before {
  background: linear-gradient(135deg, rgba(162, 237, 86, 0.2) 0%, rgba(253, 220, 50, 0.2) 100%);
}
ol.gradient-list > li:nth-child(10n+10):before {
  background: linear-gradient(135deg, rgba(162, 237, 86, 0) 0%, rgba(253, 220, 50, 0) 100%);
}
ol.gradient-list > li + li {
  margin-top: 2rem;
}
</style>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="quizzie.php">Quizzie</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="home.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
	  <li class="dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-sunglasses"></span> Quiz Maker<span class="caret"></span></a>
	  <ul class="dropdown-menu">
          <li><a href="cq.php">Create Quiz</a></li>
          <li><a href="deletequiz.php">Delete Quiz</a></li>
		  <li><a href="display.php">Display Quiz</a></li>
	  </ul>
      </li>	
      <li><a href="user.php"><span class="glyphicon glyphicon glyphicon-flash"></span> Users</a></li>	  
	  <li><a href="leaderboard.php"><span class="glyphicon glyphicon-stats"></span> Leaderboard</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
    <form class="navbar-form navbar-left" action="search.php" method="post">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search" name="search">
      </div>
    </form>
	  <li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>
      <li><a href="adminlogin.php" onclick="return confirm('Are you sure to logout?');"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
    </ul>
  </div>
</nav>
  
<div class="box-container">
  <div class="box1-content content">
    <h1>Hello Admin</h1>
	<br>
  <br>
  <br>

    <div class="skills">
  <ul class="lines">
    <li class="line l--0">
      <span class="line__label">
        Quizzes
      </span>
    </li>
    <li class="line l--25">
      <span class="line__label">
        25%
      </span>
    </li>
    <li class="line l--50">
      <span class="line__label">
        50%
      </span>
    </li>
    <li class="line l--75">
      <span class="line__label">
        75%
      </span>
    </li>
    <li class="line l--100">
      <span class="line__label">
        100%
      </span>
    </li>
  </ul>
  <?php
	       $conn = new mysqli("localhost", "root", "", "quizdb");
		   if(($_POST)>0){
	
	         //  $quizid=mysqli_query($conn,"SELECT quizid FROM quiz ORDER BY quizid DESC LIMIT 1");
	         //  if(!$quizid){
	           //     die(mysqli_error($conn));
	            //}
	           //if(mysqli_num_rows($quizid) > 0) { 
                 // $quizidr = mysqli_fetch_assoc($quizid);
	              //echo $quizidr["quizid"].'<br>';
	              //$sql= $quizidr["quizid"];
	            //} 
			   $row = mysqli_query($conn,"SELECT * FROM quiz ORDER BY quizid ASC");			
		    while($rows = $row->fetch_assoc()){
	?>

 
  <div class="charts">
    <div class="chart chart--dev">
      <span class="chart__title">CSP</span>
      <ul class="chart--horiz">
	  <?php $csp = $conn->query("SELECT COUNT(csp) FROM quiz WHERE csp='gcp'"); 
            if(mysqli_num_rows($csp) > 0) { 
              $qr = mysqli_fetch_assoc($csp);
	           //echo $qr["COUNT(csp)"].'<br>';
	          $gcp = $qr["COUNT(csp)"];
			  $gcp = $gcp*40;
	}	  
	  ?>
        <li class="chart__bar" style="width: <?php echo $gcp;?>%;">
          <span class="chart__label">
            GCP
          </span>
        </li>
        <li class="chart__bar" style="width: 98%;">
          <span class="chart__label">
            AWS
          </span>
        </li>
        <li class="chart__bar" style="width: 70%;">
          <span class="chart__label">
            Azure
          </span>
        </li>
      </ul>
    </div>
  </div>
  <?php }} ?>
</div>
  </div>
  <div class="box1-side">
    <button class="right-button">⟶</button>
  </div>
  <div class="box2-side">
    <button class="left-button">⟵</button>
  </div>
  <div class="box2-content content">
    <h1>Quizzie's Data</h1>
	<?php 

		
		$conn = mysqli_connect("localhost", "root", "", "quizdb"); 
		
		// Check connection 
		if($conn === false){ 
			die("ERROR: Could not connect. "
				. mysqli_connect_error()); 
		} 
		
                $sql = $conn->query("SELECT COUNT(name) FROM users");
                if(mysqli_num_rows($sql) > 0) { 
                $users = mysqli_fetch_assoc($sql);
	            // echo $qr["COUNT(csp)"].'<br>';
	            $user = $users["COUNT(name)"];
	            }	
                $sql1 = $conn->query("SELECT COUNT(title) FROM quiz");
                if(mysqli_num_rows($sql1) > 0) { 
                $title = mysqli_fetch_assoc($sql1);
	            // echo $qr["COUNT(csp)"].'<br>';
	            $title = $title["COUNT(title)"];
	            }
                $sql2 = $conn->query("SELECT COUNT(questions) FROM questions");
                if(mysqli_num_rows($sql2) > 0) { 
                $question = mysqli_fetch_assoc($sql2);
	            // echo $qr["COUNT(csp)"].'<br>';
	            $question = $question["COUNT(questions)"];
	            }
                $sql3 = $conn->query("SELECT COUNT(overallscore) FROM users");
                if(mysqli_num_rows($sql3) > 0) { 
                $rank = mysqli_fetch_assoc($sql3);
	            // echo $qr["COUNT(csp)"].'<br>';
	            $rank = $rank["COUNT(overallscore)"];
	            }	  							
                
                        
		?>

   <main>
  <ol class="gradient-list">
    <li>Total Number of Users : <?php echo $user;?></li>
    <li>Total Number of Quizzes : <?php echo $title;?></li>
	<li>Total Number of Questions : <?php echo $question;?></li>
	<li>Number of Rank Holders : <?php echo $rank;?></li>
  </ol>
</main> 
  </div>
</div>
<script>
const container = document.querySelector('.box-container');
const contents = document.querySelectorAll('.content');
const buttons = document.querySelectorAll('button');

buttons.forEach(button => button.addEventListener('click', function () {
  container.classList.toggle('right-open');
}));
</script>
</body>
</html>