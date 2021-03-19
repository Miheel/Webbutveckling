"use stric";
document.addEventListener("DOMContentLoaded", function(){ 
	var form = document.getElementById("myForm");
	form.addEventListener("submit", switchPage);
});

function switchPage(event){
  //prevent default behaviour of sending form
  event.preventDefault();
	
  //hide and show pages
  document.getElementById("page1").style.display = "none";
  document.getElementById("page2").style.display = "inline-block";
  
  //Get values from form to put into page 2 elemets
  document.getElementById("company").innerHTML = event.target[0].value;
  document.getElementById("name").innerHTML = event.target[2].value + " " + event.target[1].value;
  document.getElementById("title").innerHTML = event.target[3].value;
  document.getElementById("phone").innerHTML = "Tfn: " + event.target[4].value;
  document.getElementById("email").innerHTML = "E-post: " + event.target[5].value;
  
  //Get style elements from form to style page 2 card
  document.getElementById("page2").style.background = event.target[6].value;
  document.getElementById("page2").style.color = event.target[7].value;
  document.getElementById("page2").style.fontFamily = event.target[8].value;
}