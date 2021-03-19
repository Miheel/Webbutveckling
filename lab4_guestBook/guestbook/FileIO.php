<?php
	class FileIO{
		private $fileName;
		
		function __construct($fileName){
			$this->fileName = $fileName;
		}
		
		/**
		 *
		 * opens a file and reads the content and unserialize the read data
		 * @return array unserialized data read from the file 
		 */
		public function read(){
			$file = fopen($this->fileName, "r") or die("Unable to read file");
			$objStr = fgets($file);
			fclose($file);			
			return unserialize($objStr);
		}
		
		/**
		 *
		 * opens a file and writes the content from a given array to file serialized
		 * @param array $dataArr given array to write to file
		 */
		public function write($dataArr){
			$file = fopen($this->fileName, "w") or die("Unable to write to file");
			$serStr = serialize($dataArr);
			fwrite($file, $serStr);
			fclose($file);
		}
	}
?>