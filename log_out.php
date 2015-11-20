<?php
	session_start();
	
	if(!isset($_SESSION['username']) && !isset($_COOKIE['username'])){
		header("Location: login.php");
		
	}
	//destroying session and cookie
	if(isset($_GET['logout'])){
		session_unset();
		session_destroy();
		setcookie('username','',time()-3600);
		header("Location: login.php");
	}
	//echo "Are you sure you you want to log out? "."<br>"."<br>";
	
	
?>
<html>
	<form action="log_out.php" method="get">
	
		<button type="submit" name="logout" value="logout">Log Out</button>
		<a href="admin.php">Go to admin panel</a>
	</form>
</html>