function comp(UPin){
  var UP = "up";
	if (UP === UPin)
	{
		document.getElementById("status").classList.remove('status_down');
		document.getElementById("status").classList.add('status_up');
	}
	else{
		document.getElementById("status").classList.remove('status_up');
		document.getElementById("status").classList.add('status_down');
	}		
}