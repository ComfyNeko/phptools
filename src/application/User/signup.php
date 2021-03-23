
<!DOCTYPE html>
<html>
<head>
<title>Quizzie sign-up</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
@import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
*{
  margin: 0;
  padding: 0;
  outline: none;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
body{
  height: 100vh;
  width: 100%;
  background: -webkit-radial-gradient(ellipse farthest-corner at center top, #f39264 0%, #f2606f 100%);
      background: radial-gradient(ellipse farthest-corner at center top, #f39264 0%, #f2606f 100%);	  
}
.show-btn{
  background: #fff;
  padding: 10px 20px;
  font-size: 20px;
  font-weight: 500;
  color: #3498db;
  cursor: pointer;
  box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
}
.show-btn, .container{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

input[type="checkbox"]{
  display: none;
}
.container{
  display: none;
  background: #fff;
  width: 410px;
  padding: 30px;
  box-shadow: 0 0 8px rgba(0,0,0,0.1);
}
#show:checked ~ .container{
  display: block;
}
.container .close-btn{
  position: absolute;
  right: 20px;
  top: 15px;
  font-size: 18px;
  cursor: pointer;
}
.container .close-btn:hover{
  color: #3498db;
}
.container .text{
  font-size: 35px;
  font-weight: 600;
  text-align: center;
}
.container form{
  margin-top: -20px;
}
.container form .data{
  height: 45px;
  width: 100%;
  margin: 40px 0;
}
form .data label{
  font-size: 18px;
}
form .data input{
  height: 100%;
  width: 100%;
  padding-left: 10px;
  font-size: 17px;
  border: 1px solid silver;
}
form .data input:focus{
  border-color: #3498db;
  border-bottom-width: 2px;
}
form .forgot-pass{
  margin-top: -8px;
}
form .forgot-pass a{
  color: #3498db;
  text-decoration: none;
}
form .forgot-pass a:hover{
  text-decoration: underline;
}
form .btn{
  margin: 30px 0;
  height: 45px;
  width: 100%;
  position: relative;
  overflow: hidden;
}
form .btn .inner{
  height: 100%;
  width: 300%;
  position: absolute;
  left: -100%;
  z-index: -1;
  background: -webkit-radial-gradient(ellipse farthest-corner at center top, #f39264 0%, #f2606f 100%);
      background: radial-gradient(ellipse farthest-corner at center top, #f39264 0%, #f2606f 100%);	  
  transition: all 0.4s;
}
form .btn:hover .inner{
  left: 0;
}
form .btn button{
  height: 100%;
  width: 100%;
  background: none;
  border: none;
  color: #fff;
  font-size: 18px;
  font-weight: 500;
  text-transform: uppercase;
  letter-spacing: 1px;
  cursor: pointer;
}
form .signup-link{
  text-align: center;
}
form .signup-link a{
  color: #3498db;
  text-decoration: none;
}
form .signup-link a:hover{
  text-decoration: underline;
}
</style>
</head>
<body>
<div class="bg-img">




<div class="center">
      <input type="checkbox" id="show">
      <label for="show" class="show-btn">Sign-up</label>
      <div class="container">
        <label for="show" class="close-btn fas fa-times" title="close"></label>
        <div class="text">Sign-up Form</div>
<form name="myform" action="sign.php" method="post" onsubmit="return ValidateEmail();">
          <div class="data">
            <label for="empid"><b>Employee ID</b></label>
      <input type="text" placeholder="Enter Employee ID" name="empid" required>
          </div>
		  
		  <div class="data">
       <label for="empname"><b>Employee name</b></label>
      <input type="text" placeholder="Enter name" name="name" required>
          </div>
		  
		  <div class="data">
<label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>
          </div>
<div class="data">

           <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
          </div>

<div class="btn">
            <div class="inner">
</div>
<button type="submit">Sign up</button>
          </div>
<div class="signup-link">
Already a member? <a href="index.php">Login</a></div>
</form>
</div>
</div>
<!--
  <form name="myform" action="sign.php" method="post" onsubmit="return ValidateEmail();">
      <h1>Sign Up</h1>
      <p>Please fill in this form to create an account.</p>
      <hr>
     <label for="empid"><b>Employee ID</b></label>
      <input type="text" placeholder="Enter Employee ID" name="empid" required>

      <label for="empname"><b>Employee name</b></label>
      <input type="text" placeholder="Enter name" name="name" required>

      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>

      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="submit" class="signupbtn">Sign Up</button>
     <p>Already a registered user? <a href="index.php">login</a> </p>
      <label>   
    </div> --> 

<script>
function ValidateEmail(email) 
{
 if (/^[_A-Za-z0-9-\\+]+(\\.[_A-Za-z0-9-]+)*@gmail.com$/.test(myform.email.value))
  {
    return (true)
  }
    alert("Only mail IDs with virtusa domain are allowed!")
    return (false)
}
</script>
</body>
</html>

