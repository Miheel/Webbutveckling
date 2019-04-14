function compstr(UPin) {
    "use strict";
    if ("up" === UPin) {
        //server is up
        document.getElementById("status").classList.remove('status_down');
        document.getElementById("status").classList.add('status_up');
    } else if ("down" === UPin) {
        //server is down
        document.getElementById("status").classList.remove('status_up');
        document.getElementById("status").classList.add('status_down');
    }
}

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
    var status_str = 0;
    if (status.online === true) {
        status_str = "up";
    } else if (status.online === false) {
        status_str = "down";
    } else {
        status_str = "err";
    }
    compstr(status_str);
});
/*-----------------------------------------------------------------------*/
/*-----------------------------------------------------------------------*/