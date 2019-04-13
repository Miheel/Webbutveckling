/*--------The code snippet below is provided by https://mcapi.us/--------*/
/*-----------------------------------------------------------------------*/	

	//MinecraftAPI.getServerStatus('StarMC.ddns.net', {
	MinecraftAPI.getServerStatus('play.minesuperior.com', {
		port: 25565 // optional, only if you need a custom port
	}, function(err, status) {
		if (err) {
			return document.querySelector('.server-status').innerHTML = 'Error loading status';
		}
		// you can change these to your own message!
		document.querySelector('.server-online').innerHTML = status.online ? 'up' : 'down';
		
		var status_ = 0;
		
		if (status.online === true) {
			status_ = "up";
		} else if (status.online === false) {
			status_ = "down";
		} else {
			status_ = "err";
		}
		
		compstr(status_);
	});
/*-----------------------------------------------------------------------*/
/*-----------------------------------------------------------------------*/	

function compstr(UPin) {
	
	if ("up" === UPin) {
		//server is up
		document.getElementById("status").classList.remove('status_down');
		document.getElementById("status").classList.add('status_up');
	} 
	else if ("down" === UPin) {
		//server is down
		document.getElementById("status").classList.remove('status_up');
		document.getElementById("status").classList.add('status_down');
	} 
}