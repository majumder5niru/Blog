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
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$db = "blog";
	$conn = @mysql_connect($servername,$username,$password,$db);
	if(!$conn){
		die("connection failed:" .mysql_error());
	}
	//echo "Connected Successfully"."<br>";
	mysql_select_db("blog",$conn);
	
	if(isset($_GET['update'])){
		$UpdateQuery = "UPDATE post SET title='$_GET[title]',content='$_GET[content]' WHERE  post_id = '$_GET[post_id]'";
		mysql_query($UpdateQuery,$conn);
	}
	if(isset($_GET['delete'])){
		$deleteQuery = "DELETE FROM post  WHERE  post_id = '$_GET[post_id]'"; 
		mysql_query($deleteQuery,$conn);
	}
	
	$sql = "SELECT * FROM post WHERE user_name = '$_SESSION[username]' ";
	$myData = mysql_query($sql,$conn);
	echo "All post created by ".$_SESSION['username'];
	echo "<table border=1>
	<tr>
		<th>title</th>
		<th>content</th>
	</tr>";
	while($record = mysql_fetch_array($myData)){
		echo "<form action='Edit_Delete.php' method='get'>";
		echo "<tr>";
		echo "<td>"."<textarea type='text' name='title'>".$record['title']."</textarea>"."</td>";
		echo "<td>"."<textarea type='text' name='content'>".$record['content']."</textarea>"."</td>";
		echo "<td>"."<input type='hidden' name='post_id' value='".$record['post_id']."'></td>";
		
		echo "<td>"."<input type='submit' name='update' value='update'>"."</td>"."<br>";
		echo "<td>"."<input type='submit' name='delete' value='delete'>"."</td>";
		echo "</tr>";
		
		echo "</form>";
	}
	echo "</table>";
	mysql_close($conn);
?>