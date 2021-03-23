<!DOCTYPE html> 
<html> 
<title>The Certs</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong&effect=emboss">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head> 
	<title>Insert Page page</title> 
</head> 
<style> 
body {
  margin: 0;
  background-color:#68a5b3;
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


#table {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 20%;
  margin:50px 40px 40px 500px;
  
}

#table td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#table tr:nth-child(even){background-color: #f2f2f2;}
#table tr:nth-child(odd){background-color: white;}


#table tr:hover {background-color: #ddd;}

#table th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #39cae6;
  color: white;
}

</style>
<body>
<section> 
<br>

<div>
  <form class="example" action="adminsearch.php" method="POST" style="margin:auto;max-width:600px">
  <input type="text" placeholder="Search.." name="search">
  <button type="submit"><i class="fa fa-search"></i></button>
  </form>
</div>
<br>
<br>
<div class="sidenav">
 
<h3 class="font-effect-emboss" style="padding:20px">The Certs Admin</h3>
<br>

  <a href="admin.php">Dashboard</a>
<br>
  
  <button class="dropdown-btn">View certificates 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    
    
    <a href="expired.php">Expired Certificate</a>
    <a href="viewall.php">View all</a>
  </div>
<br>

  <a href="adminlogin.php" onclick="return confirm('Are you sure to logout?');">Logout</a>
</div>



</div>


</section>
 
	<center> 


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
		
               
                $sql = "SELECT * FROM register WHERE expires_in = 'Expired'";
                
               if(mysqli_query($conn, $sql)){ 
			
                        $result = $conn->query($sql);
                        $conn->close(); 
                        
		} else{ 
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn); 
		} 
		

		?> 


<section> 
		
		<!-- TABLE CONSTRUCTION--> 
		<table id="table"> 
			<tr> 
				 <th>Employee ID</th> 
				<th>CSP</th> 
                                <th>Certificate level</th> 
                                <th>Certificate ID</th> 
				<th>Certificate name</th>
                                <th>Date of certification</th>  
                                <th>Expiry Date</th> 
				<th>Validity</th> 
                                <th>Expires in</th> 
			</tr> 
			<!-- PHP CODE TO FETCH DATA FROM ROWS--> 
			<?php // LOOP TILL END OF DATA 
				while($rows = $result->fetch_assoc()) 
				{ 
			?> 
			<tr> 
				<!--FETCHING DATA FROM EACH 
					ROW OF EVERY COLUMN--> 
				<td><?php echo $rows['EmployeeID'];?></td> 
				<td><?php echo $rows['csp'];?></td> 
				<td><?php echo $rows['certificate_level'];?></td> 
                                <td><?php echo $rows['certificate_id'];?></td> 
				<td><?php echo $rows['certificate_name'];?></td> 
                                <td><?php echo $rows['exam_date'];?></td> 
                                <td><?php echo $rows['expiry_date'];?></td>
                                <td><?php echo $rows['validity'];?></td> 
                                <td><?php echo $rows['expires_in'];?></td> 
			</tr> 
			<?php 
				} 
			?> 
		</table> 
	</section> 
	</center> 

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
