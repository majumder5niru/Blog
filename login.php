<?php
	include "login_class.php";
	echo "Congratulation!! You are successfully registered. Please log in now."."<br>";
	session_start();
	if(isset($_SESSION['username'])||isset($_COOKIE['username'])){
		header("Location: log_out.php");
	}
	
		if(isset($_POST['username'])&& $_POST['username']!="" || isset($_POST['password']) && $_POST['password']!=""){
			$userName = $_POST['username'];
			$password = $_POST['password'];
			//$_SESSION['username']=$_POST['username'];
			$ulength = strlen($userName);
			$plength = strlen($password);
			//username and password validation
			if($ulength>=6 && $plength>=6){
			$db = new Blog;
			//calling function for matching login data with user table
			$db->matchTable($userName,$password);
			}
			else{
				echo "Username and password should be at least six character.";
			}
			//checking for remember me that means authentication
			if(isset($_POST['remember'] )&& $_POST['remember']=="true"){
				//$_SESSION['username']=$_POST['username'];
				setcookie('username',$_POST['username'],time()+3600);
				//echo "Welcome ", $_COOKIE['username']," your cookie is set","<br>";
				}
		header("Location: admin.php");
		}
		else{
			echo "Username and password should not be empty.";
		}
	
		
	
?>

<!DOCTYPE html>
<html lang="en">
<head>	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Log In</title>
	<!-- Bootstrap CSS file -->
	<link href="css/bootstrap.min.css" rel="stylesheet" />
	<link href="css/bootstrap-theme.min.css" rel="stylesheet" />
	<link href="blog.css" rel="stylesheet" />
	
</head>

<body>
	

	<!-- Header -->
	<header class="navbar navbar-inverse navbar-fixed-top bs-docs-nav" role="banner">
		<div class="container">
			<div class="navbar-header">
				<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="indexs.php" class="navbar-brand">Creative Blog</a>
			</div>
			<nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
			
				<ul class="nav navbar-nav">
					<li><a href="indexs.php">Home</a></li>
					<li class="active"><a href="login.php">Members</a></li>
					<li><a href="about.php">About</a></li>
				</ul>
			</nav>
		</div>
	</header>

	<!-- Body -->
	<div class="container">
		<h1 class="login">Log In</h1>

		<div class="contact-form">
			<form action="login.php" method="post" class="form-horizontal col-md-8" role="form">

			  <div class="form-group">
				<label for="name" class="col-md-2">User Name</label>
				<div class="col-md-10">
			    	<input type="text" class="form-control" id="name" name='username' >
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="password" class="col-md-2">Password</label>
			    <div class="col-md-10">
			    	<input type="password" class="form-control" id="password" name="password" placeholder='password'>
			    </div>
			  </div>
				
				<label class="col-md-8 checkbox">
                    <input type="checkbox"  value= "true" name='remember'> Remember me
				</label>
				
			  <div class="form-group">

				<div class="col-md-4 text-right">
			  		<button type="submit" class="btn btn-lg btn-primary" value="submit">Submit</button>
			  	</div>
				
			  </div>
			  
			</form>	
		</div>
	</div>

	<!-- Footer -->
	<footer>
		<div class="container">
			<hr />
			<p class="text-center">Copyright &copy; 5 Apaches - FTFL03 All rights reserved.</p>
		</div>
	</footer>

	<!-- Jquery and Bootstrap Script files -->
	<script src="lib/jquery-2.0.3.min.js"></script>
	<script src="lib/bootstrap-3.0.3/js/bootstrap.min.js"></script>
</body>
</html>