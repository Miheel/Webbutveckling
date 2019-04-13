function comp(UPin) {
	
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