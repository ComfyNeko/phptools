<!DOCTYPE html> 
<html> 
<title>The Certs</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong&effect=emboss">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head> 
	<title>The certs-admin</title> 
</head> 
<style> 
body {
  
  text-color: "white";
  margin: 0;
  background-image: url("success1.png");
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

h1{
font-family: "Trirong", sans-serif;
font-size:30px;
color:white;
text-align:center;
right:30px;
}

h3{
font-family: "Trirong", sans-serif;
font-size:20px;
color:white;

}
</style>

<section> 
<br>
<div>
  <form class="example" action="adminsearch.php" method="POST" style="margin:auto;max-width:600px">
  <input type="text" placeholder="Search.." name="search">
  <button type="submit"><i class="fa fa-search"></i></button>
  </form>
</div>

<h1> Notification has been successfully sent!
<div class="sidenav">
 
<h3 class="font-effect-emboss" style="padding:20px">The Certs Admin</h2>

  <a href="admin.php">Dashboard</a>
<br>
  
  <button class="dropdown-btn">View certificates 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    
    
    <a href="expired.php">Expired Certificates</a>
    <a href="viewall.php">View all</a>
  </div>
<br>

  <a href="adminlogin.php" onclick="return confirm('Are you sure to logout?');">Logout</a>
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
		
	if(count($_POST)>0) {
               echo "ekbkw";
		$sql = "SELECT email FROM register r JOIN signedup_users s on (s.EmployeeID = r.EmployeeID) where expires_in <30 AND expires_in<30";
		
		if(mysqli_query($conn, $sql)){ 
			$sql = "SELECT email FROM register r JOIN signedup_users s on (s.EmployeeID = r.EmployeeID) where expires_in <30 AND expires_in<30";
                        $result = $conn->query($sql);
                        $conn->close(); 
                        
		} else{ 
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn); 
		} 
		
			
				while($rows = $result->fetch_assoc()) 
				{ 
			

$mailid = $row['email'];
$subject = "Successful";
$text_message = "Hello";
$message = "hellooooooo, Thank you for registering with CERT!!";
try
{
require 'Exception.php';
require 'PHPMailer.php';
require 'SMTP.php';
 
$mail = new PHPMailer\PHPMailer\PHPMailer(); 
$mail->IsSMTP();
$mail->isHTML(true);
$mail->SMTPDebug = 0;
$mail->SMTPAuth = true;
$mail->SMTPSecure = "ssl";
$mail->Host = "smtp.gmail.com";
$mail->Port = '465';
$mail->AddAddress($mailid);
$mail->Username ="comfytheneko@gmail.com";
$mail->Password ="@Rosh0312";
$mail->SetFrom('comfytheneko@gmail.com','Roshini');
$mail->AddReplyTo("comfytheneko@gmail.com",'Roshini');
$mail->Subject = $subject;
$mail->Body = $message;
$mail->AltBody = $message;
if($mail->Send())
{
echo("Successful");
}
}
catch(phpmailerException $ex)
{
$msg = '
'.$ex->errorMessage().'
';
}
}		
}		
?>		
</table> 
	</section> 
	</center> 
</body> 

</html> 