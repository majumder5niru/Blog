<?php 
	session_start();
	
	if(!isset($_SESSION['username']) && !isset($_COOKIE['username'])){
		header("Location: login.php");
		
	}
	if(isset($_GET['logout'])){
		session_unset();
		session_destroy();
		setcookie('username','',time()-3600);
		header("Location: login.php");
	}

	
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Admin Panel</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="style.css" rel="stylesheet">

  </head>

  <body>

    <div class="blog-masthead">
      <div class="container">
		  <div class="row">
		  	<div class="col-md-8">
				<h2 class="page-title">Admin Panel</h2>	
		  	</div>
		  	<div class="col-md-2 user-log">
				<ul>
					<a href="index.php"><li>Front Page</li></a>
				</ul>
			</div>
		  	<div class="col-md-2 user-log">
				<ul>
					<a href="log_out.php"><li>Log Out</li></a>
				</ul>
			</div>

		  </div>
      </div>
    </div>

    <div class="container">

		<div class="row">
			<div class="col-md-6">
				<div class="blog-header">
					<h3 class="user-title">Welcome to Admin panel</h3>
					<p class="lead blog-description">What would you like to do?</p>
				</div>
			</div>
					
			<div class="col-md-6">
				<ul class="bs-glyphicons">
					<li>
						<span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span>
						<a href="Edit_Delete.php"><span>Edit And Delete</span></a>
					</li>
					<li>
						<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
						<a href="create_new_blog.php"><span>Create New Post</span></a>
					</li>
				</ul>
			</div>
			
		</div>


		<div class="row">


			<div class="col-md-12">
				
				<div class="post-actions">
					<table class="table table-hover">
						<thead>
							
						</thead>
						 <tbody>
						 <tr>
						 <td>
						 <?php
						 include "create_class.php";
							$userName = isset($_SESSION['username']) ? $_SESSION['username'] : $_COOKIE['username'];
							$db = new Blog;
							
							//for showing individul post in home page
							$result = $db->show_post_individually_by_user_name($userName);?>
							
							</td>
							
							</tr>
							<tr>
								<td>
								<? php include "Edit_Delete.php"; ?>
							</td>
							</tr>
						 </tbody>
					</table>
				</div>
			</div>
			</div>


		</div><!-- /.row -->

    </div><!-- /.container -->

	<!-- Footer -->
	<footer>
		<div class="container">
			<hr />
			<p class="text-center">Copyright &copy; 5 Apaches - FTFL03. All rights reserved.</p>
		</div>
	</footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
