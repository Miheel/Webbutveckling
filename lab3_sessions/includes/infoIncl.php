<?php
	function info(){

		$date = date("Y-m-d H:i:s");
		$dateStr = "Datum/klockslag: " . $date;
		if(date("l") == "Friday"){
			$dateStr .= " - Äntligen fredag!";
		}

		$IP = $_SERVER["REMOTE_ADDR"];

		$path = $_SERVER['REQUEST_URI'];

		$agent = $_SERVER['HTTP_USER_AGENT'];

		$infoStr = '<ul>
			<li>' . $dateStr . '</li>
			<li>Din IP-adress: ' . $IP . '</li>
			<li>Sökväg/filnamn: ' . $path . '</li>
			<li>User agent: ' . $agent . '</li>
		</ul>';
		return $infoStr;
	}
?>