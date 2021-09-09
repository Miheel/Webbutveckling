<?php

	class DBIO{

		private $conn;

		public function __construct(){

			include "../includes/config.php";

			try{
				$this->conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
				$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			}
			catch(PDOException $e){
				echo "Connection failed" . $e->getMessage();
			}
		}
	
		public function setScore($game, $user, $cookieScore = -1, $RPSWin = -1, $RPSLoss = -1)
		{
			if (null !== $this->getScore($user)){

				$query = $this->conn->prepare("UPDATE Scores SET win= :RPSWin, loss= :RPSLoss, score= :cookieScore 
												WHERE GameName= :game AND UserID IN
												(SELECT UserID from User WHERE Username= :username)");
			}
			else {
				$query = $this->conn->prepare("INSERT INTO Scores(win, loss, score, GameName, UserID)
											SELECT :RPSWin, :RPSLoss, :cookieScore, :game, UserID FROM User
											WHERE Username= :username");
			}

			$query->bindParam(':RPSWin', $RPSWin);	
			$query->bindParam(':RPSLoss', $RPSLoss);	
			$query->bindParam(':cookieScore', $cookieScore);		
			$query->bindParam(':game', $game);										
			$query->bindParam(':username', $user);

			$query->execute();

		}
	
		public function getScore($user)
		{
			$query = $this->conn->prepare("SELECT Scores.*, User.Username FROM Scores 
											INNER JOIN User
											ON Scores.UserID = User.UserID
											WHERE User.Username= :user
											ORDER BY GameName");
			$query->bindParam(':user', $user, PDO::PARAM_STR);

			$query->execute();

			return $query->fetchAll();

		}

		public function fetchComments($game){
			$query = $this->conn->prepare("SELECT Comment.*, User.Username FROM Comment 
											INNER JOIN User
											ON Comment.UserID = User.UserID
											WHERE Game= :game ORDER BY CommentID DESC");
			$query->bindParam(':game', $game, PDO::PARAM_STR);

			$query->execute();

			return $query->fetchAll();
		}

		public function insertComment($username, $message, $game){

			$date = Date("Y-m-d h:i:s");
			$query = $this->conn->prepare("INSERT INTO Comment(Game, Message, Date, UserID)
											select :game, :message, :date, UserID from User
											where Username= :username");
			$query->bindParam(':game', $game);	
			$query->bindParam(':message', $message);	
			$query->bindParam(':date', $date);												
			$query->bindParam(':username', $username);

			$query->execute();

		}

		public function deleteComment($id){
			$query = $this->conn->prepare("DELETE FROM Comment WHERE CommentID= :id");
			$query->bindParam(':id', $id);

			$query->execute();
		}

		public function checkUser($user, $pass){
			$query = $this->conn->prepare("SELECT Username FROM User WHERE Username= :username AND Password= :password");
			$query->bindParam(':username', $user);
			$query->bindParam(':password', $pass);

			$query->execute();

			return count($query->fetchAll()) != 0 ? true : false;
		}

		public function checkUsername($user){
			$query = $this->conn->prepare("SELECT Username FROM User WHERE Username= :username");
			$query->bindParam(':username', $user);

			$query->execute();

			return count($query->fetchAll()) != 0 ? true : false;
		}

		public function adduser($user, $pass){
			$query = $this->conn->prepare("INSERT INTO User(Username, Password) VALUES(:username, :password)");
			$query->bindParam(':username', $user);
			$query->bindParam(':password', $pass);

			$query->execute();
		}

	}
?>
