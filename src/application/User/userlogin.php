<!DOCTYPE html>
<html>
<head>
<title>The Quizzie login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
h1 {text-align: center;}
h2 {text-align: center;}
body, html {
  height: 100%;
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}
.bg-img {
  /* The image used */
  background-image: url("gcp.jpg");

  min-height: 680px;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}
/* Add styles to the form container */
.center {
  position: fixed;
  top: 50%;
  left: 50%;
  /* bring your own prefixes */
  transform: translate(-50%, -50%);
  width:500px;
  padding : 16px;
  background-color: #9fb1cc;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}
/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}
</style>
</head>
<body>
<div class="bg-img">
  <form name="myform" class="center" method="post" action="login.php" onsubmit="ValidateEmail(document.myform.email);">  
      <h1>WELCOME BACK!</h1>
      <h2>Login</h2>
      <hr>
      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
      <div class="clearfix">
      <button type="submit" class="signupbtn">login</button>
        
      </div>
  </form>
</div>
<script>  
function ValidateEmail(email) 
{
 if (/^[_A-Za-z0-9-\\+]+(\\.[_A-Za-z0-9-]+)*@gmail.com$/.test(myform.email.value))
  {
    return (true)
  }
    alert("You have entered an invalid email address!")
    return (false)
}
  
</script>
</body>
</html>
