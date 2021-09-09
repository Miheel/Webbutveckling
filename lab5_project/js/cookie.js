"use strict";
/*jslint node: true */
/*jslint esversion: 6 */

var cookie = document.getElementById("cookieArea");
var nrOfCookies = document.getElementById("cookies");
var cookieScore = document.getElementById("cookieScore");
var upgrades = document.getElementById("upgrades");
var cookies = 0;
var cpc = 1;
var cps = 0;
const ticksPs = 10;
const e = Math.E;

var store = {
    Upgrade1: {
        name: "cursor",
        img: "../resources/mouse.png",
        altText: "Cursor uppgrade in the store",
        price: 15,
        cpc: 1,
        owned: 0,
        calcPrice: function () {
            this.price = Math.round(0.225195 + 13.129 * Math.pow(e, 0.139526 * (this.owned + 1)));
        }
    },

    Upgrade2: {
        name: "autoCursor",
        img: "../resources/autoclick.png",
        altText: "Auto clicker uppgrade in the store",
        price: 15,
        cps: 0.1,
        owned: 0,
        calcPrice: function () {
            this.price = Math.round(0.225195 + 13.129 * Math.pow(e, 0.139526 * (this.owned + 1)));
        }
    },

    Upgrade3: {
        name: "Grandma",
        img: "../resources/grandma.png",
        altText: "Grandma uppgrade in the store",
        price: 100,
        cps: 1,
        owned: 0,
        calcPrice: function () {
            this.price = Math.round(0.391248 + 87.0043 * Math.pow(e, 0.139743 * (this.owned + 1)));
        }
    },

    Upgrade4: {
        name: "Farm",
        img: "../resources/farm.png",
        altText: "Farm uppgrade in the store",
        price: 1000,
        cps: 8,
        owned: 0,
        calcPrice: function () {
            this.price = Math.round(963.287 * Math.pow(e, 0.1395 * (this.owned + 1)) - 22.7191);
        }
    }
};

document.addEventListener("DOMContentLoaded", () => {

    createStore();

    cookie.addEventListener("click", (Event) => { click(Event); });
    //storepotion handler
    upgrades.addEventListener("click", (Event) => { purches(Event); });

    window.setInterval(loop, (1000 / ticksPs));
});

function click(event) {
    cookies += cpc;
    //console.log(cookies);

    clickFeedback(event);
}

function clickFeedback(event){

    let cookiesPerClickElem = document.createElement("span");
    let cookiesPerClickText = document.createTextNode("+" + cpc);
    cookiesPerClickElem.appendChild(cookiesPerClickText);

    cookiesPerClickElem.classList.add("clickFeedBack");
    cookiesPerClickElem.style.position = "absolute";
    cookiesPerClickElem.style.left = event.clientX + "px";
    cookiesPerClickElem.style.top = event.clientY + "px";

    cookie.appendChild(cookiesPerClickElem);

    setTimeout(() => {
        cookie.removeChild(cookie.childNodes[0]);
    }, 2000);

    //console.log(testNewElem);    
}

function clicksPerSec(storeItem) {
    if (storeItem.hasOwnProperty("cps")) {
        cps += storeItem.cps;
    }
    else {
        cpc += storeItem.cpc;
    }
}

function loop() {
    cookies += (cps / ticksPs);
    update();
}

function update() {
    nrOfCookies.innerHTML = Math.floor(cookies);
    cookieScore.value = Math.floor(cookies);
}

function purches(event) {
    var storeItem = store[event.target.id];

    if (event.target && event.target.nodeName == "IMG") {

        if (storeItem.price <= cookies) {

            cookies = cookies - storeItem.price;
            storeItem.owned++;
            storeItem.calcPrice();
            document.getElementById("price" + event.target.id).innerHTML = storeItem.price;

            clicksPerSec(storeItem);
        }
        //console.log(storeItem);
        //console.log(cps + " : " + cpc);
    }
}

function createStore() {
    for (var key in store) {

        let upgradeCookieValue = store[key].hasOwnProperty("cps") ? "cps: " + store[key].cps : "cpc: " + store[key].cpc;

        var storeOption = '<div class="upgrade">' +
            '<img src="' + store[key].img + '" alt="' + store[key].altText + '" class="storeImg" id="' + key + '">' +
            '<p class="priceTag">' +
            '<span >' + upgradeCookieValue + '</span><br>' +
            '<span>P: </span>' +
            '<span id="price' + key + '">' + store[key].price + '</span>' +
            '</p>' +
            '</div>';

        upgrades.innerHTML += storeOption;
    }
}
