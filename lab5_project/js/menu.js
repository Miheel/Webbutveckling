'use strict';
/*jslint node: true */
/*jslint esversion: 6 */

document.addEventListener("DOMContentLoaded", function(){ 
	document.getElementById("btn").addEventListener("click", viewMenu);
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
