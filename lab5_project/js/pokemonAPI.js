'use strict';

var baseInfoURL  = "https://pokeapi.co/api/v2";
var baseSpriteURL = "https://pokeres.bastionbot.org/images/pokemon/";

var pokemonChain = document.getElementById("pokemonChain");

document.addEventListener("DOMContentLoaded", ()=>{
    let randChainID = Math.floor(Math.random() * 200) + 1;
    let request = "/evolution-chain/" + randChainID;
    loadContent(request, parseData);
})

function loadContent(request, func) {
	var xmlhttp = new XMLHttpRequest();

	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == XMLHttpRequest.DONE) {
			if (xmlhttp.status == 200) {
				var jsonData = JSON.parse(xmlhttp.responseText);
                //console.log(jsonData);
                func(jsonData);
			} else if (xmlhttp.status == 400) {
				alert("There was an error 400");
			} else {
				alert(xmlhttp.status);
			}
		}
	};
	xmlhttp.open("GET", baseInfoURL + request + "?format=json", true);
	xmlhttp.send();

}

function parseData(data){

    let basic = data.chain.species;
    let stage_1 = data.chain?.evolves_to[0];
    let stage_2 = data.chain?.evolves_to[0]?.evolves_to[0];


    let pokeID = [basic.url];
    let pokeName = [basic.name]
    if (stage_1 != undefined) {
        pokeID.push(stage_1.species.url);
        pokeName.push(stage_1.species.name);
        if (stage_2 != undefined) {
            pokeID.push(stage_2.species.url);
            pokeName.push(stage_2.species.name);
        }
    }

    createEvolChain(pokeName, pokeID);
}

function createEvolChain(pokeName, pokeID){
    // console.log(pokeID);
    //console.log(pokeName);
    let i = 0;
    for(const id of pokeID){
        createPokeWrapper(pokeName, id, i++);
    }
}

function createPokeWrapper(pokeName, pokeID, index){
    let pokeWrapper = document.createElement("div");
    let spriteWrapper = document.createElement("div");
    let pokeSprite = document.createElement("img");
    let textWrapper = document.createElement("div");       
    let pokeSpriteName = document.createElement("span");

    pokeWrapper.className  = "pokeWrapper";
    spriteWrapper.className  = "spriteWrapper";
    textWrapper.className  = "textWrapper";

    pokeSprite.srcset = baseSpriteURL + substrURL(pokeID) + ".png";
    pokeSprite.alt = pokeName[index];
    pokeSprite.className  = "sprite";

    pokeSpriteName.className  = "spriteName";
    pokeSpriteName.innerHTML  = pokeName[index];

    spriteWrapper.append(pokeSprite)
    textWrapper.append(pokeSpriteName)

    pokeWrapper.append(spriteWrapper);
    pokeWrapper.append(textWrapper);

    pokemonChain.append(pokeWrapper);
}

function substrURL(pokeIDURL){
    return pokeIDURL.substring(42, pokeIDURL.length-1);
}
