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
					echo "Connected Successfully"."<br>";
				}
		public function insertElement($userName,$password,$firstName,$lastName,$country,$gender,$dateOfBirth){
			$sql = "INSERT INTO user(user_name,password,firstname,lastname,country,gender,DateOfBirth) 
					VALUES('$userName','$password','$firstName','$lastName','$country','$gender','$dateOfBirth')";
			if($this->conn->query($sql)===True){
			//echo "Congratulation!! You are successfully registered. Please log in now.",$this->conn->insert_id."<br>";
				header("Location:login.php");
			}
			else{
				echo "Error". $sql ."<br>". $this->conn->error;
			}
			return $sql;
		}
		public function close(){
					$this->conn->close();
				}
		
	}
?>