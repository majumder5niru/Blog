		<?php
			class Update{
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
				//Insert into post table
				
				public function insertContent($title,$category,$content){
					$sql = "INSERT INTO post(title,Category,content) VALUES('$title','$category','$content')";
					if($this->conn->query($sql)===True){
					//echo "New record created successfully ",$this->conn->insert_id."<br>";
					}
					else{
						echo "Error". $sql ."<br>". $this->conn->error;
					}
					return $sql;
				}
				// show all contents of php
				public function show_all_title_content(){
					$sql = "SELECT * FROM post";
					$result = $this->conn->query($sql);
					/*if($result->num_rows>0){
						while(($row = $result->fetch_assoc())){
							echo "<b>".$row["title"]."</b>";
							echo "<br>";
							echo $row["content"]."<br>";
						}
					}
					else{
						echo "0 results";
					}*/
				}
				
			public function close(){
					$this->conn->close();
				}
			}
		?>
	

