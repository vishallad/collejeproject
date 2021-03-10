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
	<title>aboutus</title>
	<link rel="stylesheet" type="text/css" href="aboutus.css">
</head>
<body>
	

	<div class="main">
		<header>

	            <div class="logo">
	            	<a href="#">INFODAM</a>
	            	
	            </div>
	            <nav> 
	            	<a href="home.html">HOME</a>
                        <a href="service.php">SERVICIES</a>
					<a href="logout.php">LOG OUT</a>
					
					
				</nav>
	</header>
		<center>
		<div class="content">
			<h1>ABOUT US</h1>
			<P>Our system gives information, warning, Data to local public 
and it help them for securing their home, life in rainy season and 
using flood detection damage cause of that reduce. user also log 
in on website and see all the detail regarding dam, rain. 
This system is developed in order to save the lives of 
people, their habitant and the economy.Just register yourself on 
Infodam and get real time Data.</P>
		</div></center>

	</div>
</body>
</html>