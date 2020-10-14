(function () {
    if ("undefined" != typeof snatchBot) {
        const n = document.getElementsByTagName('footer'),
              snatchbotInit = document.createElement('script');
        snatchbotInit.innerHTML = `window.sntchChat.Init(${snatchBot.botID})`;
        n.length ? n[0].appendChild(snatchbotInit) : document.body.appendChild(snatchbotInit);
    } else {
        console.log("ERROR: doesn't given SnatchBot ID");
    }
})();