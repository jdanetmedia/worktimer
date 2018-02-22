var visibleTimer = document.getElementById('visibleTimer'),
    start = document.getElementById('start'),
    stop = document.getElementById('stop'),
    clear = document.getElementById('clear'),
    seconds = 0,
    minutes = 0,
    hours = 0,
    t;
    onlySeconds = 0;

function add() {
    seconds++;
    if (seconds >= 60) {
        seconds = 0;
        minutes++;
        if (minutes >= 60) {
            minutes = 0;
            hours++;
        }
    }

    visibleTimer.textContent = (hours ? (hours > 9 ? hours : "0" + hours) : "00") + ":" + (minutes ? (minutes > 9 ? minutes : "0" + minutes) : "00") + ":" + (seconds > 9 ? seconds : "0" + seconds);
    document.title = (hours ? (hours > 9 ? hours : "0" + hours) : "00") + ":" + (minutes ? (minutes > 9 ? minutes : "0" + minutes) : "00") + ":" + (seconds > 9 ? seconds : "0" + seconds);
    secondsTimer();
    timer();
}

function timer() {
    t = setTimeout(add, 1000);
}
//timer();

function secondsTimer() {
  onlySeconds++;
}

/* Start button */
start.onclick = timer;

/* Stop button */
stop.onclick = function() {
    document.getElementById("workSeconds").value = onlySeconds;
    document.getElementById("workTimeFormatted").value = (hours ? (hours > 9 ? hours : "0" + hours) : "00") + ":" + (minutes ? (minutes > 9 ? minutes : "0" + minutes) : "00") + ":" + (seconds > 9 ? seconds : "0" + seconds);
    clearTimeout(t);
}

/* Clear button */
clear.onclick = function() {
    visibleTimer.textContent = "00:00:00";
    document.title = "00:00:00";
    document.getElementById("workSeconds").value = "";
    document.getElementById("workTimeFormatted").value = "";
    seconds = 0; minutes = 0; hours = 0;
    onlySeconds = 0;
    document.getElementById("workTime").textContent = "";
}
