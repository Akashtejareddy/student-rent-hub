<?php
    session_start();
    include("includes/db.php");
    include("includes/functions.php");
  
  if(!isset($_SESSION['name'])){
    
    header("Location: invitation.php");
  
  }

?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<style>
body {
  font-family: "Lato", sans-serif;
  background-color: #e8e8e8;
  margin: 0px;
  background-image: url('../images/image1.png');
}

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #FFFFFF;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 18px;
  color: #000000;
  display: block;
  transition: 0.3s;
}


.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}

</style>

</head>
<body>

<div style="background-color: #e31837;height: 50px;" class="d-flex justify-content-between" >
<span style="font-size:30px;cursor:pointer;padding-top: 6px;padding-left: 10px;color:#fff" onclick="openNav()">&#9776; Student Rental Hub!</span>
<a href="logout.php" class="text-white p-3">logout</a>
</div>