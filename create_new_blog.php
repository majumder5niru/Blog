<?php
		include "create_class.php";
		session_start();
		$db = new Blog;

	if(!isset($_SESSION['username']) && !isset($_COOKIE['username'])){
		header("Location: login.php");
		
	}
	if(isset($_GET['logout'])){
		session_unset();
		session_destroy();
		setcookie('username','',time()-3600);
		header("Location: login.php");
	}
		if(isset($_POST['title'],$_POST['category'],$_POST['content']))
		{
			
			$title = $_POST['title'];
			$category = $_POST['category'];
			$content = $_POST['content'];
			
			//finding username using session
			$userName = isset($_SESSION['username']) ? $_SESSION['username'] : $_COOKIE['username'];
			//calling funciton for finding user_id from user table  to post table
			$user_id = $db->user_id_by_username($userName);
			//calling function for inserting data into post table
			$db->insertContent($title,$category,$content,$userName,$user_id);
						
		}
		
?>
<!DOCTYPE html>
<html lang="en">
<head>	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Create Blog</title>
	<!-- Bootstrap CSS file -->
	<link href="lib/bootstrap-3.0.3/css/bootstrap.min.css" rel="stylesheet" />
	<link href="lib/bootstrap-3.0.3/css/bootstrap-theme.min.css" rel="stylesheet" />
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
				
			</div>
			<nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">

				<ul class="nav navbar-nav">
					<li class="active"><a href="index.php">Home</a></li>
					<li><a href="login.php">Action</a></li>
					<li><a href="about.php">About</a></li>
				</ul>
			</nav>
		</div>
	</header>

	<!-- Body -->
	<div class="container">
		<h1 align="center">Create Blog</h1>
		<center><a href="admin.php"><span>See Your Post</span></a></center>
		<div class="contact-form">


			<div class="col-md-12">
				
				<div class="row">
			
					<form action="create_new_blog.php" method="post">
				
						<div class="form-group">
							<label for="name" class="col-md-2">Title:</label>
							<div class="col-md-12">
								<input type="text" class="form-control" id="name" name ='title' placeholder="title">
							</div>
						</div>
						<div class="form-group">
							<label for="name" class="col-md-2">Category:</label>
							<div class="col-md-12">
								<select name='category' class="form-control">
												<option value=" ">Choose from below</option>
												<option value="science">Science</option>
												<option value="Technology">Technology</option>
												<option value="news">News</option>
												<option value="religion">Religion</option>
												<option value="philosophy">Philosophy</option>
												<option value="e-commerce">Online Buisness</option>
												<option value="education">Education</option>
												<option value="medical">Health</option>
												<option value="agriculture">Agriculture</option>
												<option value="politics">Politics</option>
												<?php
													$db->dropdown();
												?>
									</select>
							</div>
						</div>
						
						<div class="form-group">
						  <label for="content" class="col-md-2">Content:</label>
							<div class="col-md-12">
							<textarea class="form-control" rows="10" name ='content' id="content"></textarea>
							</div>
						</div>
						<div class="col-md-1" align="right">
							<button type="submit" class="btn btn-lg btn-primary" value="submit">Submit</button>
						</div>
					</form>
				</div>
			</div>	
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

