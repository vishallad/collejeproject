<?php
include "config.php";
session_start();
if(!isset($_SESSION["username"])){
    header("Location:{$hostname}/index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>home</title>
	<link rel="stylesheet" type="text/css" href="home.css">
</head>
<body>
<header>

            <div class="logo">
            	<a href="#">INFODAM</a>
            	
            </div>
            <nav> 
                <a href="service.php">SERVICIES</a>
                <a href="aboutus.php">ABOUT US</a>
                                <a href="logout.php">LOGOUT</a>				
			</nav>
</header>
<div>
	<P>FOR EMERGENCY TEXT ALERT  <button onclick="window.location.href='registration.php';">REGISTER HERE</button><P>
</div>
<div>
	<center><h1>table upcoming</h1></center>
</div>
</body>
</html>