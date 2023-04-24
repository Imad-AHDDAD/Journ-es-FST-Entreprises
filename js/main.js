window.addEventListener('load', function () {
    var loading = document.getElementById('loader-container');
    loading.style.display = 'none';
});

// change navBar color when scorll starts
var prevScrollpos = window.pageYOffset;
window.addEventListener("scroll", function () {
    var scroll = window.pageYOffset;
    var nav = document.getElementById("navBar");
    if (scroll > 10) {
        nav.classList.add("navBarColored");
        nav.classList.add("invisible");
    } else {
        nav.classList.remove("navBarColored");
        nav.classList.remove("invisible");
    }

    if (prevScrollpos > scroll) {
        nav.classList.add("visible");
        nav.classList.remove("invisible");
    } else {
        nav.classList.remove("visible");
    }
    
    prevScrollpos = scroll;

    if (scroll > 50) {
        upBtn.classList.add("upBtnShow");
    } else {
        upBtn.classList.remove("upBtnShow");
    }

});


// set up le downCounter
let countDownDate = new Date("May 15, 2023 23:59:59").getTime();
let counter = setInterval(() => {

    let dateNow = new Date().getTime();
    let dateDiff = countDownDate - dateNow;

    let days = Math.floor(dateDiff / (1000 * 60 * 60 * 24));
    let hours = Math.floor((dateDiff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    let minutes = Math.floor((dateDiff % (1000 * 60 * 60)) / (1000 * 60));
    let seconds = Math.floor((dateDiff % (1000 * 60)) / 1000);

    document.getElementById("daysNum").innerHTML = days < 10 ? `0${days}` : days;
    document.getElementById("hoursNum").innerHTML = hours < 10 ? `0${hours}` : hours;
    document.getElementById("minsNum").innerHTML = minutes < 10 ? `0${minutes}` : minutes;
    document.getElementById("secsNum").innerHTML = seconds < 10 ? `0${seconds}` : seconds;

    if (dateDiff < 0) {
        clearInterval(counter);
    }

}, 1000);

// reset form on click on reset btn
var form = document.getElementById("registrationForm");
var resetBtn = document.getElementById("btn-reset");
resetBtn.addEventListener("click", function () {
    form.reset();
});

