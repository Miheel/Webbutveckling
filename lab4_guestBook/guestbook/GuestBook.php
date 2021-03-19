<?php
	include "Guest.php";
	include "FileIO.php";

	class GuestBook{
		private $guestArr = [];
		private $fileio;
		
		function __construct($fileName){
			 $this->fileio = new FileIO($fileName);
			 $this->guestArr = $this->fileio->read();
		}
		
		/**
		 *
		 * prepend a guest object to an array and and saves the array to file.
		 * 
		 * @param String $name the name of the author of the post
		 * @param String $msg the authored message
		 * @param String $time the time post was submitted
		 */
		public function addPost($name, $msg, $time){
			array_unshift($this->guestArr, new Guest($name, $msg, $time));
			$this->saveGuestBook();
		}
		
		public function updatePost($index, $msg){
			$this->guestArr[$index]->setMessage($msg);
		}
		
		/**
		 *
		 * Removes a object based on index from the array and saves the array to file
		 * 
		 * @param int $index the index in the array to remove the object
		 */
		public function removePost($index){
			unset($this->guestArr[$index]);
			$this->guestArr = array_values($this->guestArr);
			$this->saveGuestBook();
		}
		
		/**
		 *
		 * Retuns a array with all guest objects in
		 * 
		 * @return array the array containing all guest objects from read from file
		 */
		public function getGuestBook(){
		    return $this->guestArr;
		}

		/**
		 *
		 * saves the contents of the guestarray to file
		 */
		public function saveGuestBook(){
			$this->fileio->write($this->guestArr);
		}
	}
?>


















