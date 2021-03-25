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
  background: url("https://sharegate.com/app/uploads/2020/05/sgdesktop-teamsmigration-release-featured-1-920x517.png") center center no-repeat;
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

.contact-us {
  background: #f8f4e5;
  padding: 50px 100px;
  border-top: 10px solid #f45702;
}

label, input, textarea {
  display: block;
  width: 100%;
  font-size: 12pt;
  line-height: 24pt;
  font-family: "Spartan";
}

input {
  margin-bottom: 24pt;
}

h3 {
  font-weight: normal;
  font-size: 10pt;
  line-height: 24pt;
  font-style: italic;
  margin: 0 0 0.5em 0;
}

span {
  font-size: 8pt;
}

em {
  color: #f45702;
  font-weight: bold;
}

input, textarea {
  border: none;
  border: 1px solid rgba(0, 0, 0, 0.1);
  border-radius: 2px;
  background: #f8f4e5;
  padding-left: 5px;
  outline: none;
}

input:focus, textarea:focus {
  border: 1px solid #6bd4b1;
}

textarea {
  resize: none;
}

button {
  display: block;
  float: right;
  line-height: 24pt;
  padding: 0 20px;
  border: none;
  background: #f45702;
  color: white;
  letter-spacing: 2px;
  transition: 0.2s all ease-in-out;
  border-bottom: 2px solid transparent;
  outline: none;
}
button:hover {
  background: inherit;
  color: #f45702;
  border-bottom: 2px solid #f45702;
}

::selection {
  background: #ffc7b8;
}

input:-webkit-autofill,
input:-webkit-autofill:hover,
input:-webkit-autofill:focus,
textarea:-webkit-autofill,
textarea:-webkit-autofill:hover,
textarea:-webkit-autofill:focus {
  border: 1px solid #6bd4b1;
  -webkit-text-fill-color: #2A293E;
  -webkit-box-shadow: 0 0 0px 1000px #f8f4e5 inset;
  transition: background-color 5000s ease-in-out 0s;
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
          <button class="btn btn-default" type="submit">
            <i class="glyphicon glyphicon-search"></i>
          </button>
        </div>
      </div>
    </form>
      <li><a href="adminlogin.php" onclick="return confirm('Are you sure to logout?');"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
    </ul>
  </div>
</nav>
  
<div class="container">
  <h3></h3>
  <p></p>
</div>
<div class="contact-us">
  <form action="insert.php" method="post">
    <label for="quiztitle">QUIZ TITLE <em>&#x2a;</em></label><input id="quiztitle" name="quiztitle" required="" type="text" />
	<label for="csp">CSP <em>&#x2a;</em></label><input id="csp" name="csp" required="" type="text" />
	<label for="noq">NUMBER OF QUESTIONS<em>&#x2a;</em></label><input id="noq" name="noq" required="" type="text" />
	<label for="time">TIME<em>&#x2a;</em></label><input id="time" name="time" type="text" />
	<button name="submit" id="submit">SUBMIT</button>
  </form>
</div>
</body>
</html>