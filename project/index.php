<!DOCTYPE html>
<html>
<head>
	<title> Form</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<link href="index.css" rel="stylesheet" type="text/css"/>


	<!--font -->

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;1,300;1,400&display=swap" rel="stylesheet">
	
</head>
<body>
<div>
<header>

            <div class="logo">
            	<a href="#">INFODAM</a>
            	
            </div>
            <nav> 
                <a href="service.php">SERVICIES</a>
                <a href="aboutus.php">ABOUT US</a>
				
			</nav>
</header>
	<div class="box">
            
		<div class="a">
                    <form action="<?php $_SERVER['PHP_SELF'];?>" method="POST">
		<img src="admin.jpg"/><br><br>
				<div class="form-input">
                                    <input type="email" placeholder="email" id="email" name="email"/>	
				</div>
				<div class="form-input">
                                    <input type="password" placeholder="password" id="password" name="password"/>
				</div>
              
                <input type="submit"  name="login" />
				<div class="GUEST">
					<button onclick="window.location.href='home.php';">CONTINUE AS GUEST</button>
				</div>
				new here?
				<div class="CREATEAC">
                                    <a href="registration.php"> <button id="CREATEAC">CREATE ACCOUNT</button></a>
				</div>
                    </form>
                    
		</div>
</div>
</body>
</html>

<?php
                    if(isset($_POST['login'] )){
                        include "config.php";
                        $username = mysqli_real_escape_string($con,$_POST['email']);
                        $password = ($_POST['password']);
                        
                        $sql = "SELECT ID,EMAIL FROM user_data WHERE EMAIL='{$username}' AND PASSWORD='{$password}'";
                        $result = mysqli_query($con, $sql) or die (mysqli_error($con));
                        
                        if(mysqli_num_rows($result)>0){
                            while($row = mysqli_fetch_assoc($result)){
                                session_start();
                                $_SESSION["username"]= $row['EMAIL'];
                                $_SESSION["userid"]= $row['ID'];
                                
                                
                                header("Location:{$hostname}/home.php");
                            }
                            
                        }else{
                            echo 'username and password are not matched';
                        }
                    }
                   
                    ?>