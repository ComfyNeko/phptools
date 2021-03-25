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
:root {
  --background-dark: #2d3548;
  --text-light: rgba(255, 255, 255, 0.6);
  --text-lighter: rgba(255, 255, 255, 0.9);
  --spacing-s: 8px;
  --spacing-m: 16px;
  --spacing-l: 24px;
  --spacing-xl: 32px;
  --spacing-xxl: 64px;
  --width-container: 1200px;
}

* {
  border: 0;
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

html {
  height: 100%;
  font-family: "Spartan";
  font-size: 14px;
}

body {
  height: 100%;
  width: 100vw;
  height: 100vh;
  display: grid;
  font-size: 12pt;
  font-family: "Spartan";
  color: #2A293E;
}

.hero-section {
  align-items: flex-start;
  background-image: url("https://sharegate.com/app/uploads/2020/05/sgdesktop-teamsmigration-release-featured-1-920x517.png");
  display: flex;
  min-height: 250%;
  justify-content: center;
  padding: var(--spacing-xxl) var(--spacing-l);
}

.card-grid {
  display: grid;
  grid-template-columns: repeat(1, 1fr);
  grid-column-gap: var(--spacing-l);
  grid-row-gap: var(--spacing-l);
  max-width: var(--width-container);
  width: 100%;
}
@media (min-width: 540px) {
  .card-grid {
    grid-template-columns: repeat(2, 1fr);
  }
}

@media (min-width: 960px) {
  .card-grid {
    grid-template-columns: repeat(4, 1fr);
  }
}

.card {
  list-style: none;
  position: relative;
  height: 70%;
}

.card:before {
  content: "";
  display: block;
  padding-bottom: 150%;
  width: 100%;
}

.card__background {
  background-size: cover;
  background-position: center;
  border-radius: var(--spacing-l);
  bottom: 0;
  filter: brightness(0.75) saturate(1.2) contrast(0.85);
  left: 0;
  position: absolute;
  right: 0;
  top: 0;
  transform-origin: center;
  trsnsform: scale(1) translateZ(0);
  transition: filter 200ms linear, transform 200ms linear;
}

.card:hover .card__background {
  transform: scale(1.05) translateZ(0);
}

.card-grid:hover > .card:not(:hover) .card__background {
	background-color: orange;
    filter: brightness(0.5) saturate(2.5) contrast(1.2) blur(20px);
}

.card__content {
  left: 0;
  padding: var(--spacing-l);
  position: absolute;
  top: 0;
}

.card__category {
  color: var(--text-light);
  font-size: 1.5rem;
  margin-bottom: var(--spacing-s);
  text-transform: uppercase;
}

.card__heading {
  color: var(--text-lighter);
  font-size: 1.4rem;
  font-family: "Spartan";
  text-shadow: 2px 2px 20px rgba(0, 0, 0, 0.2);
  line-height: 1.4;
  word-spacing: 100vw;
  text-transform: uppercase;
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
        <div class="input-group-btn">
          <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i>
          </button>
        </div>
      </div>
    </form>
      <li><a href="adminlogin.php" onclick="return confirm('Are you sure to logout?');"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
    </ul>
  </div>
</nav>
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
			   

	?>
<section class="hero-section">
  <div class="card-grid">
		   <?php //for($i=0;$i<=$sql;$i++){ 
	 $row = mysqli_query($conn,"SELECT * FROM quiz ORDER BY quizid ASC");			
		    while($rows = $row->fetch_assoc()){
	?>
    <a class="card" href="#">
      <div class="card__background" style="background-image: url(https://wallpapercave.com/wp/wp4978351.jpg)"></div>
      <div class="card__content">
        <p class="card__category"><?php echo $rows['title'] ?></p>
        <h3 class="card__heading" style = "font-family:courier new;">CSP:<?php echo $rows['csp'] ?></h3>
		<h3 class="card__heading"style = "font-family:courier new;">No.of questions:<?php echo $rows['noq']?></h3>
		<h3 class="card__heading"style = "font-family:courier new;">Time:<?php echo $rows['time'] ?></h3>
      </div>
    </a>
		   <?php }} ?>
      <div>
</section>
</body>
</html>