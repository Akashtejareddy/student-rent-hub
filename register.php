<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Rental Hub</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Lato', sans-serif;
            background-color: #f8f9fa;
            background-image: url('https://media.istockphoto.com/id/1410534409/photo/small-balconies-at-a-student-residence.jpg?s=1024x1024&w=is&k=20&c=UDmQEFPh7XxGmpaGixmenpYscx8v98YSUaSfh6uzvR4=');
            background-size: cover;
            background-blur: 5px;
        }

        .container {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.2);
        }

        .container h1 {
            text-align: center;
            color: #333;
        }

        .form-group {
            margin-bottom: 25px;
        }
   
        .form-control {
            width: 100%;
            padding: 8px;
            font-size: 16px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .btn-success {
            background-color: #28a745;
            border: none;
            padding: 12px 20px;
            font-size: 18px;
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }

        .btn-success:hover {
            background-color: #218838;
        }

        .signin a {
            color: #28a745;
            font-weight: bold;
        }

        .signin a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<?php

  session_start();

  if(isset($_SESSION['name'])){
    header("Location: invitation.php");
  }

  include("includes/db.php");
  include("includes/functions.php");

?>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <h1 class="mb-4">User Registration Page</h1>
                <form action="" method="post">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="uname" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="psw" required>
                    </div>
                    <div class="form-group">
                        <label for="pnumber">Phone Number</label>
                        <input type="tel" class="form-control" id="pnumber" name="pnumber" required>
                    </div>
					<div class="form-group">
                        <label for="location">Location</label>
                        <input type="text" class="form-control" id="location" name="location" required>
                    </div>
                    <div class="form-group">
                        <label for="time-period">Time Period</label>
                        <select class="form-control" id="time-period" name="time_period" required>
                            <option value="3 months">3 Months</option>
                            <option value="6 months">6 Months</option>
                            <option value="1 year">1 Year</option>
                            <option value="2 years">2 Years</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-success btn-block">Register</button>
                </form>
                <div class="text-center mt-3 signin">
                    <p>Already have an account? <a href="login.php">Sign in</a></p>
                </div>
            </div>
        </div>
    </div>
	<?php  

    if(isset($_POST["submit"])){  

      user_register();

    }  
?>
</body>

</html>
