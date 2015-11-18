<?php
	class Blog{
		public $conn;
		public function __construct(){
			$servername = "localhost";
			$username = "root";
			$password = "";
			$db = "blog";
			$this->conn = new mysqli($servername,$username,$password,$db);
			if($this->conn->connect_error){
				die("connection failed:" .$this->conn->connect_error);
			}
			//echo "Connected Successfully"."<br>";
		}
			

		//inserting element into post table
		public function insertContent($title,$category,$content,$userName,$user_id){
			$sql = "INSERT INTO post(title,category,content,user_name,user_id) VALUES('$title','$category','$content','$userName','$user_id')";
			if($this->conn->query($sql)===True){
			echo "Your blog is created successfully and your blog number is ".$this->conn->insert_id."<br>";
			}
			else{
				echo "Error". $sql ."<br>". $this->conn->error;
			}
			return $sql;
		}
		//function for showing individual post in admin page
		public function show_post_individually_by_user_name($userName){
			$sql = "SELECT * FROM post WHERE user_name = '$userName'";
			$result = $this->conn->query($sql);
			if($result->num_rows>0){
				while(($row = $result->fetch_assoc())){
					echo "<b>".$row["title"]."</b>"."<br>";
					echo "<i>".$row["category"]."</i>"."<br>";
					echo $row["content"]."<br>";
					echo "Blog is created by "."<i>".$row["user_name"]."</i>"."<br>" ;
					}
			}
		}
		//function for showing all post in home page
		public function show_all_post(){
			$sql = "SELECT * FROM post WHERE user_name LIKE user_name";
			$result = $this->conn->query($sql);
			if($result->num_rows>0){
				while(($row = $result->fetch_assoc())){
					echo "<b>".$row["title"]."</b>"."<br>";
					echo "<i>".$row["category"]."</i>"."<br>";
					echo $row["content"]."<br>";
					echo "Blog is created by " ."<b>".$row["user_name"]."</b>"."<br>" ;
					}
			}
		}
		 //funciton for adding category into dropdown menu
		public function dropdown(){
					$sql = "SELECT * FROM post";
					$result = $this->conn->query($sql);
					if($result->num_rows>0 ){
						while($row = $result->fetch_assoc() ){
							echo "<option value=\"{$row['post_id']}\">{$row['category']}</option>"."<br>";
						}
					}
					else{
						echo "0 results";
					}
				}
		//funciton for getting user_id from user table to post table		
		public function user_id_by_username($userName) {
			$sql = "SELECT user_id FROM user WHERE user_name = '$userName'";
			$result = $this->conn->query($sql);
			   if($result->num_rows>0){
						while(($row = $result->fetch_assoc())){
							return $row['user_id'];
							}
				
				}
		}
		public function close(){
					$this->conn->close();
			}
		
	}
?>