<!DOCTYPE html>
<html lang="en">
<?php
  
  include("includes/header.php");
  
  //include("includes/sidebar.php");

?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Rental Hub</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .navbar {
            background-color: #4caf50;
            overflow: hidden;
        }

        .navbar a {
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }

        .content {
            padding: 20px;
        }
    </style>
</head>

<body>
    <div class="navbar">
        <a href="#home">Home</a>
        <a href="#aboutus">About Us</a>
        <a href="#contactus">Contact Us</a>
        <a href="login.php">Login</a>
    </div>

    <div class="content">
        <h1>Welcome to Student Rental Hub!</h1> <?php
echo $_SESSION['name']; ?>
        <p>Find the perfect rental accommodation for your student life.</p>
    </div>
</body>

</html>

