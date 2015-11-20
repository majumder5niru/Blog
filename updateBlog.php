
<?php 
//This page is not used
session_start();
//include "blogClass.php";
?>
<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$db = "blog";
	$conn = @mysql_connect($servername,$username,$password,$db);
	
	if(!$conn){
		die("connection failed:" .mysql_error());
	}
	echo "Connected Successfully"."<br>";
	mysql_select_db("blog",$conn);
	
	if(isset($_POST['Edit'])){
		$UpdateQuery = "UPDATE post SET title='$_POST[title]',Category='$_POST[category]'
							WHERE p_id='$_POST[p_id]' ";
		mysql_query($UpdateQuery,$conn);
	};
	if(isset($_POST['delete'])){
		$deleteQuery = "DELETE FROM post WHERE p_id='$_POST[p_id]'"; 
		mysql_query($deleteQuery,$conn);
	};
	
	$sql = "SELECT * FROM post";
	$myData = mysql_query($sql,$conn);
	echo "<table border=1>
	<tr>
		<th>title</th>
		<th >Category</th>
		<th >Edit</th>
		<th >Delete</th>
	</tr>";
	/*while($record = mysql_fetch_array($myData)){
		echo "<form action='update_delete.php' method='post'>";
		echo "<tr>";
		echo "<td>"."<textarea type='text' name='title'>".$record['title']."</textarea>"."</td>";
		echo "<td>"."<textarea type='text' name='content'>".$record['content']."</textarea>"."</td>";
		echo "<td>"."<input type='submit' name='Edit' value='Edit'>"."</td>"."<br>";
		echo "<td>"."<input type='submit' name='delete' value='Delete'>"."</td>";
		echo "<td>"."<input type='hidden' name='p_id' value='".$record['p_id']."'></td>";	
		echo "</tr>";
		echo "</form>";
	}*/
	echo "</table>";
	mysql_close($conn);
?>


<!DOCTYPE html>
<html lang="en">
<head>	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Creative Blog</title>
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
				<a href="index.php" class="navbar-brand">Creative Blog</a>
			</div>
			<nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">

				<ul class="nav navbar-nav">
					<li class="active"><a href="index.php">Home</a></li>
					<li><a href="login.php">Members</a></li>
					<li><a href="about.php">About</a></li>
				</ul>
			</nav>
		</div>
	</header>

	<!-- Body -->
	<div class="container">
		<h1 align="center">Update Blog</h1>
		
		<div class="contact-form">


			<div class="col-md-12">
				
				<div class="row">
			
					<form form action='update_delete.php' method='post'>
							
									<div class="form-group">
										<label for="name" class="col-md-2">Title:</label>
										<?php
											while($record = mysql_fetch_array($myData)){
												echo "<input type='hidden' name='p_id' value=$record['p_id']>";
												echo "<textarea  name='title'>".$record['title']."</textarea>";
												
										 		?>
										
											
										
												</div>

												<div class="form-group">
												  <label for="content">Content:</label>
												    <textarea class="form-control" rows="10" id="content">
												    <?php
														echo "<textarea type='text' name='content'>".$record['content']."</textarea>";
													 ?>
													</textarea>
												</div>
							
							
							<button type="submit" class="btn btn-lg btn-primary">Submit</button>
							<button type="Show" class="btn btn-lg btn-info"><a href="singlepost.php">Show</a></button>
									
						<?php
									}		
										 ?>
									
					</form>
					
				</div >
			</div>	
		</div>
	</div>

	<!-- Footer -->
	<footer>
		<div class="container">
			<hr />
			<p class="text-center">Copyright &copy; Nirupam.All rights reserved.</p>
		</div>
	</footer>

	<!-- Jquery and Bootstrap Script files -->
	<script src="lib/jquery-2.0.3.min.js"></script>
	<script src="lib/bootstrap-3.0.3/js/bootstrap.min.js"></script>
</body>
</html>
