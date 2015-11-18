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
		
		
		
		//matching with login and registration
		
		public function matchTable($userName,$password){
			
			$sql = "SELECT user_name,password FROM user
			WHERE user_name ='$userName' AND password='$password'";
			$result = $this->conn->query($sql);
			if($result->num_rows>0){
						while(($row = $result->fetch_assoc()) ){
							//echo "login completed."."<br>";//set this line in b page
							$_SESSION['username']=$_POST['username'];
							//$_COOKIE['username']=$_POST['username'];
							header("Location: create_new_blog.php");
					}
					
				}
					else{
						echo "user name and password is not correct."."<br>";
					}
						
				
		}
				
				
		
		public function close(){
					$this->conn->close();
				}
		
	}
?>