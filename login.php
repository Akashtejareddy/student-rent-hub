<?php  

  session_start();
  
   if(isset($_SESSION['name'])){
         header("Location: invitation.php");
  }
include("includes/db.php");
include("includes/functions.php");

if(isset($_POST["submit"])){  
    
    userlogin();
}


?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
<style>
body {
  font-family: "Montserrat", sans-serif;
  background-color: #f4f4f4;
  margin: 0;
  background-image: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)),url('https://media.istockphoto.com/id/1410534409/photo/small-balconies-at-a-student-residence.jpg?s=1024x1024&w=is&k=20&c=UDmQEFPh7XxGmpaGixmenpYscx8v98YSUaSfh6uzvR4=');
  background-size: cover;
}

.loginBlock {
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
}

.container {
  background-color: rgba(255, 255, 255, 0.9);
  padding: 20px;
  border-radius: 10px;
  box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.2);
}

.container h1 {
  text-align: center;
  color: #333;
}

.form-group {
  margin-bottom: 20px;
}

.form-control {
  width: 100%;
  padding: 10px;
  font-size: 16px;
  border-radius: 5px;
  border: 1px solid #ccc;
}

.btn-success {
  background-color: #28a745;
  color: #fff;
  border: none;
  padding: 10px 20px;
  font-size: 18px;
  border-radius: 5px;
  cursor: pointer;
}

.btn-success:hover {
  background-color: #218838;
}

.psw {
  color: #333;
}

</style>
</head>
<body>
  
<div class="loginBlock">
  <form action="" method="post" class="container w-50">
    <h1>Login Page</h1>
    <div class="form-group">
      <label for="uname"><b>Email</b></label>
      <input type="email" placeholder="Enter Email" class="form-control" name="email" required>
    </div>
    <div class="form-group">
      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" class="form-control" name="pass" required>
    </div>
    <button type="submit" class="btn btn-success" name="submit">Login</button>
    <div class="psw">You can register here if you do not have an account, <a href="register.html">Click Here!</a></div>
  </form>
</div>

<script>

</script>

</body>
</html>

<script>
document.SignUpPage.UsernameField.focus();
function checkInputs() {
    var Prompts = "";
    Username = window.document.SignUpPage.UsernameField.value;
    Password = document.SignUpPage.PasswordField.value;
    RePassword = SignUpPage.RePasswordField.value;
    Name = SignUpPage.NameField.value;
    if (Username == "" || Password == "" || RePassword == "" || Name == "") {
          if (Username == "")
             Prompts +="Please enter your username!\n";
          if (Password == "")
             Prompts +="Please enter your password!\n";
       }else {
          document.SignUpPage.submit();
       }
   }

</script>