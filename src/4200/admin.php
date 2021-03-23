<!DOCTYPE html>
<html>
<head>
<title>The Certs</title>
<!-- Add icon library -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong&effect=emboss">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia&effect=emboss">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
body {
  
  text-color: "white";
  margin: 0;
  background-color: #68a5b3;

}

* {
  box-sizing: border-box;
}


form.example input[type=text] {
  padding: 10px;
  border-radius:10px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 50%;
  background: #f1f1f1;
}

form.example button {
  border-radius:10px;
  float: left;
  width: 20%;
  
  padding: 10px;
  background: #39cae6;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none;
  cursor: pointer;
}

form.example button:hover {
  background: #24dbff;
}

form.example::after {
  content: "";
  clear: both;
  display: table;
}

/* Fixed sidenav, full height */
.sidenav {
  font-family: "Trirong", sans-serif;
  height: 100%;
  width: 223px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #343738;
  overflow-x: hidden;
  padding-top: 20px;
}

/* Style the sidenav links and the dropdown button */
.sidenav a, .dropdown-btn {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 20px;
  color: #818181;
  display: block;
  border: none;
  background: none;
  width: 100%;
  text-align: left;
  cursor: pointer;
  outline: none;
}

/* On mouse-over */
.sidenav a:hover, .dropdown-btn:hover {
  color: #f1f1f1;
  background-color:#39cae6;
}

/* Main content */
.main {
  margin-left: 200px; /* Same as the width of the sidenav */
  font-size: 20px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}

/* Add an active class to the active dropdown button */


/* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
.dropdown-container {
  display: none;
  background-color: #262626;
  padding-left: 8px;
}

/* Optional: Style the caret down icon */
.fa-caret-down {
  float: right;
  padding-right: 8px;
}

/* Some media queries for responsiveness */
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
.grid-container {
  display: grid;
  grid-template-columns: auto auto auto auto;
  grid-gap: 10px;
  background-color: #68a5b3;
  padding: 10px;
  float:right;

}

.grid-container > div {
  background-color: black;
  text-align: center;
  padding: 0px 0;
  font-size: 30px;
}

.item1 {
  grid-column: 1/ 4;
  grid-column-start: 2;
}


.flip-card1 {
  background-color: transparent;
  width: 380px;
  height: 255px;
  perspective: 1000px;
  position:absolute;
  bottom: 30px;
  left: 585px;
}

.flip-card1-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.6s;
  transform-style: preserve-3d;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
}

.flip-card1:hover .flip-card-inner {
  transform: rotateY(180deg);
}

.flip-card1-front, .flip-card1-back {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

.flip-card1-front {
  background-color:#467b87;
  color: black;
}

.flip-card1-back {
  background-color: #65b7c9;
  color: white;
  transform: rotateY(180deg);
}

.flip-card {
  background-color: transparent;
  width: 380px;
  height: 255px;
  perspective: 1000px;
  position:absolute;
  bottom: 30px;
  right: 10px;
}

.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.6s;
  transform-style: preserve-3d;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
}

.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

.flip-card-front {
  background-color: #343738;
  color: #738085;
  text-align:center;
}

.flip-card-back {
  background-color:#5b6569 ;
  color: white;
  font-size: 30px;
  transform: rotateY(180deg);
}

.button {
  font-family: "Trirong", sans-serif;
  border-radius: 18px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 20px;
  padding: 20px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 21px 10px 10px 235px;
  width:335px;
  height:255px;

  
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}

h3{
font-family: "Trirong", sans-serif;
font-size:20px;
color:white;

}
</style>
</head>     

<body>

<?php 
        // servername => localhost 
		// username => root 
		// password => empty 
		// database name => signup 
		$conn = mysqli_connect("localhost", "root", "", "signup"); 
		
		// Check connection 
		if($conn === false){ 
			die("ERROR: Could not connect. "
				. mysqli_connect_error()); 
		} 

      	
$data = mysqli_query($conn,'SELECT COUNT(csp) AS num FROM register WHERE csp="gcp"') or die(mysqli_error());
$row = mysqli_fetch_assoc($data);
$numusers = $row['num'];

$data1 = mysqli_query($conn,'SELECT COUNT(csp) AS num FROM register WHERE csp="aws"') or die(mysqli_error());
$row = mysqli_fetch_assoc($data1);
$numusers1 = $row['num'];

$data2 = mysqli_query($conn,'SELECT COUNT(csp) AS num FROM register WHERE csp="azure"') or die(mysqli_error());
$row = mysqli_fetch_assoc($data2);
$numusers2 = $row['num'];

$data3 = mysqli_query($conn,'SELECT COUNT(csp) AS num FROM register WHERE certificate_level="associate"') or die(mysqli_error());
$row = mysqli_fetch_assoc($data3);
$numassoc = $row['num'];

$data4 = mysqli_query($conn,'SELECT COUNT(csp) AS num FROM register WHERE certificate_level="professional"') or die(mysqli_error());
$row = mysqli_fetch_assoc($data4);
$numprof = $row['num'];


$data5 = mysqli_query($conn,'SELECT COUNT(EmployeeID) AS num FROM register') or die(mysqli_error());
$row = mysqli_fetch_assoc($data5);
$totcerts = $row['num'];

$data6 = mysqli_query($conn,'SELECT COUNT(EmployeeID) AS num FROM signedup_users') or die(mysqli_error());
$row = mysqli_fetch_assoc($data6);
$totusers = $row['num'];

?> 
 
<body>
<br>

<div>
  <form class="example" action="adminsearch.php" method="POST" style="margin:auto;max-width:600px">
  <input type="text" placeholder="Search.." name="search">
  <button type="submit"><i class="fa fa-search"></i></button>
  
  </form>

</div>
<br>

<div class="sidenav">
 
<h3 class="font-effect-emboss" style="padding:20px">  The Certs Admin </h3>
<br>

  <a href="admin.php">Dashboard</a>
<br>
  
  <button class="dropdown-btn">View certificates 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
   
  
    <a href="expired.php">Expired certificates</a>
    <a href="viewall.php">View all</a>
  </div>
<br>

  <a href="adminlogin.php" onclick="return confirm('Are you sure to logout?');">Logout</a>
</div>


<div class="grid-container">
  <div class="item1">
    <div id="container" style="width: 634px; height: 254px"></div>
  </div>
  <div class="item2">
    <div id="piechart"></div> 
  </div>  
</div>

<div class="flip-card1">
  <div class="flip-card-inner">
    <div class="flip-card-front">
         <img src="cer.png" alt="Avatar" style="width:230px;height:170px;">
        <h2> Total certificates registered </h2> 
    </div>
    <div class="flip-card-back">
       <br>
      <h1><?php echo$totcerts ?></h1>
    </div>
  </div>
</div>


<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
     <br>
       <img src="user.png" alt="Avatar" style="width:155px;height:150px;">
      <h2> Total number of users </h2>
      
    </div>
    <div class="flip-card-back">
      <br>
      <h1><?php echo$totusers ?></h1>
    </div>
  </div>
</div>
<button class="button" onclick="document.location='expiringcert.php'"><span>Certificates which are about to expire within 30 days! </span></button>
</div>


<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">

var x = parseInt( <?php echo$numusers ?> ); 

var y = parseInt( <?php echo$numusers1 ?> ); 

var z = parseInt( <?php echo$numusers2 ?> ); 



// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Task', 'Hours per Day'],
  ['Gcp', x],
  ['AWS', y],
  ['AZure', z],
  
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'Number of certifications done under each csp', 'width':480, 'height':254,backgroundColor: 'white',
    is3D: true};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
</script>

<script src="https://cdn.anychart.com/releases/8.0.0/js/anychart-base.min.js"></script>
<script>
      anychart.onDocumentReady(function() {
 var x= parseInt( <?php echo$numassoc ?> );
 var y= parseInt( <?php echo$numprof ?> );
        // set the data
        var data = {
            header: ["Name", "No.of certifications"],
            rows: [
              ["Associate", x],
              ["professional", y],
             
              
        ]};
 
       // create the chart
       var chart = anychart.bar();
 
        // add the data
        chart.data(data);
 
        // set the chart title
        chart.title("The level of certification");
 
        // draw
        chart.container("container");
        chart.draw();
      });
    </script>
    </script>

<script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}
</script>


</body>
</html>


