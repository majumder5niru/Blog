<!DOCTYPE html>
<html lang="en">
<head>	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Home</title>

	<!-- Bootstrap CSS file -->
	<link href="css/bootstrap.min.css" rel="stylesheet" />
	<link href="blog.css" rel="stylesheet" />
	<script>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
	</script>

</head>

<body>

	<!-- Header -->
	<header class="navbar navbar-inverse navbar-fixed-top bs-docs-nav" role="banner">			
		<div class="container">
				<nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">

				<ul class="nav navbar-nav">
					<li class="active"><a href="index.php">Home</a></li>
					
					<li><a href="about.php">About</a></li>
				</ul>
			</nav>
		</div>
	</header>

	<!-- Body -->
	<div class="container">
		<div class="row">
			<div class="col-md-8">
			<h1>Posts</h1>
				

				
				<article>
						 <?php
					include "create_class.php";
					$db = new Blog;
					
					//calling funciton for showing all post in home page
					$result = $db->show_all_post();
					
				?>
							
				</article>
				

			</div>
			<div class="col-md-4">

						<h3>Want to write something?</h3>
						<a href="userRegistration.php"><button type="button" class="btn btn-lg btn-success navbar-btn">Sign Up</button></a><br><br>									
						<h3>Already a blogger?</h3><br>
						<a href="login.php"><button type="button" class="btn btn-lg btn-info navbar-btn">Log In</button></a>

				<!-- Categories -->


				<!-- Recent Comments -->


			</div>
		</div>
	</div>

	<!-- Footer -->
	<footer>
		<div class="container">
			<hr />
			<p class="text-center">Copyright &copy; Nirupam Mozumder. All rights reserved.</p>
		</div>
	</footer>

	<!-- Jquery and Bootstrap Script files -->
	<script src="lib/jquery-2.0.3.min.js"></script>
	<script src="lib/bootstrap-3.0.3/js/bootstrap.min.js"></script>
</body>
</html>