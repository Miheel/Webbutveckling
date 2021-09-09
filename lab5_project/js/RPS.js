"use strict";
/*jslint node: true */
/*jslint esversion: 6 */

/*
    Rock paper scissor game against a bot
    best of three to win
*/


var choises = ['Rock', 'Paper', 'Scissor'];
var round = 0;
var unused;


class Player {
    constructor() {
        this.choise = 'indecisive';
        this.score = 0;
        this.win = 0;
    }
}


document.addEventListener('DOMContentLoaded', function(unused) {

    var user = new Player();
    var DogeBot = new Player();

    window.addEventListener('click', function(Event) {

        gaem(Event, user, DogeBot);

    })
})



function gaem(event, user, DogeBot) {

    var rand = Math.random();
    var randome = Math.floor(rand * choises.length);
    DogeBot.choise = choises[randome];
    user.choise = funkyChoises(event);

    if (user.choise !== undefined) {

        if (DogeBot.choise == user.choise) {
            // innerhtml is a draw

            console.log('Doge: ' + DogeBot.choise + '\n' + 'User ' + user.choise + '\nDraw');

            // plz alert with 'Doge: '+DogeBot+'\n'+'User'+user+'\nDraw'
            alert('Doge Chose: ' + DogeBot.choise + '\n' + 'You chose: ' + user.choise + '\nI´ts a draw');

        } else if (user.choise == 'Rock' && DogeBot.choise == 'Scissor' || user.choise == 'Paper' && DogeBot.choise == 'Rock' || user.choise == 'Scissor' && DogeBot.choise == 'Paper') {
            // innerhtml usesr win

            user.score++
            console.log('Doge: ' + DogeBot.choise + '\n' + 'User: ' + user.choise + '\nUser: WIN');

            // plz alert with 'Doge: '+DogeBot+'\n'+'User: '+user+'\nUser: WIN'
            alert('Doge Chose: ' + DogeBot.choise + '\n' + 'You chose: ' + user.choise + '\nYou win');

        } else {
            // innerhtml doge win
            DogeBot.score++
            console.log('Doge: ' + DogeBot.choise + '\n' + 'User: ' + user.choise + '\nDoge WIN');

            // plz alert with 'Doge: '+DogeBot+'\n'+'User: '+user+'\nDoge WIN'
            alert('Doge Chose: ' + DogeBot.choise + '\n' + 'You chose: ' + user.choise + '\nDoge WIN');

        }

    }

    win(user, DogeBot);

}



function funkyChoises(event) {
    if (event.target.id == 'rock') {
        return 'Rock';
    } else if (event.target.id == 'paper') {
        return 'Paper';
    } else if (event.target.id == 'scissor') {
        return 'Scissor';
    }
}



function win(usr, bot) {

    if (usr.score >= 2) {
        // bigify usrWin

        document.getElementById('userWin')
            .innerHTML = ++usr.win;

        usr.score = 0;
        bot.score = 0;

    } else if (bot.score >= 2) {
        // bigify dogewin

        document.getElementById('botWin')
            .innerHTML = ++bot.win;

        usr.score = 0;
        bot.score = 0;
    }

    document.getElementById('roundNr')
        .innerHTML = ++round;
}
