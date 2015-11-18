<?php
	include "create_class.php";
		session_start();
	//setcookie('user_name', '')
	//$_SESSION["error"]="You are not permitted to eneter in page c";
	if(!isset($_SESSION['username']) && !isset($_COOKIE['username'])){
		header("Location: login.php");
		
	}
	if(isset($_GET['logout'])){
		session_unset();
		session_destroy();
		setcookie('username','',time()-3600);
		header("Location: login.php");
	}
	//finding user name using session
	$userName = isset($_SESSION['username']) ? $_SESSION['username'] : $_COOKIE['username'];
	$db = new Blog;
	//$db->show_post_individually_by_user_name($userName);
	//caliing function for showing all post in home page
	$db->show_all_post();
?>