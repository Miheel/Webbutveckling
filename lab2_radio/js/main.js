"use strict";

var baseURL = "http://api.sr.se/api/v2/";
var aud = new Audio();

//
// Wait for DOM to load
document.addEventListener("DOMContentLoaded", function(){ 
    var xmlhttp = new XMLHttpRequest();

    //
    // Read SR channels and dynamically create list of channels
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == XMLHttpRequest.DONE ) { // Request DONE
           if (xmlhttp.status == 200) { // Alles OK, => 200 says we are ready to go?
                var jsonData = JSON.parse( xmlhttp.responseText );
                for(var i=0; i < jsonData.channels.length; i++){
					var channelIcon = "";
					// set channelIcon if it exists
					if(jsonData.channels[i].imagetemplate != undefined){
						channelIcon = jsonData.channels[i].imagetemplate;
					}
					document.getElementById("mainnavlist").innerHTML += "<li id='"+jsonData.channels[i].id+"'><img src='" + channelIcon + "' width="+30+">" + jsonData.channels[i].name + "</li>";
					document.getElementById("searchProgram").innerHTML += "<option value='"+jsonData.channels[i].id+"'>"+jsonData.channels[i].name+"</option>";      
                }
           }
           else if (xmlhttp.status == 400) { // It seems we are in trouble => 400 Bad request
              alert("There was an error 400");
           }
           else { // More trouble => "we are out on our own"
               alert("something else other than 200 was returned: "+xmlhttp.status);
           }
        }
    };

    xmlhttp.open("GET", baseURL + "channels?size=100&format=json", true);
    xmlhttp.send();

    //
    // Create eventlistener for click on search program
    document.getElementById('searchbutton').addEventListener("click", function(e){
		var id = document.getElementById("searchProgram");
		document.getElementById("info").innerHTML = "";
		
		var reqChanelSchedule = "scheduledepisodes?channelid=" + id.value + "&";
		loadContent(reqChanelSchedule, getContentSchedule);
    }) 

    //		
    // Create eventlistener for clicks on dynamically created list of channels in mainnavlist
    document.getElementById('mainnavlist').addEventListener("click", function(e){
		
		//get id of clicked listItem in mainnavlist
		var channelid = e.target.id;
	   if (channelid == ""){
		   //get id of clicked listItem in mainnavlist if img is clicked
		   var channelid = e.target.parentNode.id;
	   } 
	   document.getElementById("info").innerHTML = "";
	   
	   var reqChanels = "channels/" + channelid + "?";
	   var reqPlaylist = "playlists/rightnow?channelid=" + channelid + "&";
	   loadContent(reqChanels, getContentProgramDescript);
	   loadContent(reqPlaylist, getContentProgram);
	})      
    
})// End of DOM await

/**
 *
 *@callback requestedCallBack
 *@param {(Array|object)}
 */

/**
 *loop through the data array
 *and puts schedule fields inside scheduleStr string with html taggs
 *@param {String} request - requested URL
 *@param {requestedCallBack} func - callback to handle 
 */
function loadContent(request, func) {
	var info = document.getElementById("info");
	var xmlhttp = new XMLHttpRequest();

	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == XMLHttpRequest.DONE) {
			if (xmlhttp.status == 200) {
				var jsonData = JSON.parse(xmlhttp.responseText);
				info.innerHTML += func(jsonData);
			} else if (xmlhttp.status == 400) {
				alert("There was an error 400");
			} else {
				alert(xmlhttp.status);
			}
		}
	};
	xmlhttp.open("GET", baseURL + request + "format=json", true);
	xmlhttp.send();
}

/**
 *loop through the data array
 *and puts schedule fields inside scheduleStr string with html taggs
 *@param {Array.<schedule>} data - array to loop through
 *@return {string} scheduleStr - finished html to add to view on document 
 */
function getContentSchedule(data) {
	var scheduleStr = "", startTime = "";
	
	if (data.schedule.length > 0) {
		for (var i = 0; i < data.schedule.length; i++) {
			startTime = new Date(parseInt(data.schedule[i].starttimeutc.substr(6)));
			scheduleStr += "<h1>" + data.schedule[i].title + "</h1><p><strong>" + data.schedule[i].description + "</strong></p><p>" + startTime + "</p><hr>";
		}
	}
	else{
		scheduleStr = "<h1>No programs scheduled</h1>"
	}
	return scheduleStr;
}

/**
 *puts channel object fields inside programDescriptStr string  with html taggs
 *@param {object.<channel>} data - channel object to get fields from
 *@return {string} programDescriptStr - finished html to add to view on document 
 */
function getContentProgramDescript(data) {
	var programDescriptStr = "<h1>" + data.channel.name + "</h1><p><strong>" + data.channel.tagline + "</strong></p><hr>";
	playSong(aud, data.channel.liveaudio.url);
	
	return programDescriptStr;
}

/**
 *puts channel object fields inside programDescriptStr string  with html taggs
 *@param {object.<playlist>} data - playlist object to get fields from
 *@return {string} programStr - finished html to add to view on document 
 */
function getContentProgram(data) {
	var prev = "",next = "";
	try {
		prev = data.playlist.previoussong.description;
	} catch {
		prev = "No previous song";
	}

	try {
		next = data.playlist.nextsong.description;
	} catch {
		next = "No Next song";
	}
	var programStr = "<p>Previous song: " + prev + "</p><p>Next song: " + next + "</p>";

	return programStr;
}

/**
 *Start a audio track from URL
 *Stops current audio if alredy playing and plays new audio
 *@param {Audio} audio - audio player to play the track
 *@param {String} URL - suplied url to get audio track
 */
function playSong(audio, URL) {
	audio.addEventListener("loadeddata", function() {
		audio.mute = true;
	}, false);
	audio.src = URL;
	audio.play();
}