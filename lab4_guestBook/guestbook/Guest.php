<?php
	class Guest{
		private $author;
		private $message;
		private $timeStamp;
		
		function __construct($author, $message, $timeStamp){
			$this->author = $author;
			$this->message = $message;
			$this->timeStamp = $timeStamp;
		}

		public function getAuthor(){
			return $this->author;
		}
		
		public function getMessage(){
			return $this->message;
		}
		
		public function setMessage($msg){
			$this->message = $msg;
		}
		
		public function getTimeStamp(){
			return $this->timeStamp;
		}

		public function __serialize()
		{
			return [
			'author' => $this->author,
			'message' => $this->message,
			'timeStamp' => $this->timeStamp,
			];
		}
		
		public function __unserialize($data)
		{
			$this->author = $data['author'];
			$this->message = $data['message'];
			$this->timeStamp = $data['timeStamp'];
		}
		
		public function toString(){
			return "<p class=\"post\"><span class=\"author\">" . 
					$this->author . "</span><br><span class=\"message\">" . 
					$this->message . "</span><br><span class=\"timeStamp\">" . 
					$this->timeStamp . 
					"<button>Remove</button></span></p>";
		}
		
		public function __toString(){
			return $this->toString();
		}
	}
?>