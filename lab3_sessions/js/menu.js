'use strict'
document.addEventListener("DOMContentLoaded", function(){ 
	document.getElementById("btn").addEventListener("click", viewMenu);
	window.addEventListener("resize", sizeChange);
	
});

function viewMenu(){
	var menu = document.getElementById("menuID");
	if(menu.className === "menu"){
		menu.className += " showMenu";
	}
	else{
		menu.className = "menu";
	}
}

function sizeChange(){
	var clientHeight = document.getElementById('menuBar').clientHeight;
	document.getElementById("menuContainer").style.height = clientHeight + "px";
	
	var menu = document.getElementById("menuID");
	if(menu.className !== "menu"){
		menu.className = "menu";
	}
}