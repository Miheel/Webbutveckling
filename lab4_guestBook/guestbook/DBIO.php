<?php 

class DBIO{

	private $conn;

	public function __construct(){

		$servername = "studentmysql.miun.se";		
		$dbname = "mile1900";
		$username = "mile1900";
		$password = "gxc1ga5e";	
		
		try{
			$this->conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
			$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}
		catch(PDOException $e){
			echo "Connection failed" . $e->getMessage();
		}
		
	}
	
	public function fetch(){
		$query = $this->conn->prepare("SELECT * FROM Posts ORDER BY ID DESC");
		$query->execute();

		return $query->fetchAll();
	}
	
	public function insert($username, $message){
		$date = Date("Y-m-d h:i:s");
		$query = $this->conn->prepare("INSERT INTO Posts(Username, Message, Date) VALUES(:username, :message, :date)");
		$query->bindParam(':username', $username);
		$query->bindParam(':message', $message);
		$query->bindParam(':date', $date);
		
		$query->execute();
	}
	
	public function delete($id){
		$query = $this->conn->prepare("DELETE FROM Posts WHERE ID= :id;");
		$query->bindParam(':id', $id);
		$query->execute();
	}
	
}
?>