// change navBar color when scorll starts
window.addEventListener("scroll", function () {
    var scroll = window.pageYOffset;
    var nav = document.getElementById("navBar");
    var upBtn = this.document.getElementById("upBtn");
    if(scroll > 10){
        nav.classList.add("navBarColored");
    }else{
        nav.classList.remove("navBarColored");
    }

    if(scroll > 50){
        upBtn.classList.add("upBtnShow");
    }else{
        upBtn.classList.remove("upBtnShow");
    }

    upBtn.addEventListener("click", function() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    });

});


// set up le downCounter
let countDownDate = new Date("May 14, 2023 23:59:59").getTime();

let counter = setInterval(() => {

    let dateNow = new Date().getTime();
    let dateDiff = countDownDate - dateNow;

    let days = Math.floor(dateDiff / (1000 * 60 * 60 * 24));
    let hours = Math.floor((dateDiff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    let minutes = Math.floor((dateDiff % (1000 * 60 * 60)) / (1000 * 60));
    let seconds = Math.floor((dateDiff % (1000 * 60))/1000);

    document.getElementById("daysNum").innerHTML = days < 10 ? `0${days}`: days;
    document.getElementById("hoursNum").innerHTML = hours < 10 ? `0${hours}`: hours;
    document.getElementById("minsNum").innerHTML = minutes < 10 ? `0${minutes}`: minutes;
    document.getElementById("secsNum").innerHTML = seconds < 10 ? `0${seconds}`: seconds;

    if(dateDiff < 0) {
        clearInterval(counter);
    }

}, 1000);

