var rentButton = document.getElementById("rentBut");
var arrow = document.getElementById("arrow");
var form = document.getElementById("rentwrapper");
var close = document.getElementById("close");
var vid = document.getElementById("vid");
var pause = document.getElementById("vidPause");
var rentForm = document.getElementById("rentForm");
var conts = document.getElementsByClassName("container1");
var loginbut = document.getElementById("loginbut");
var loginForm = document.getElementById("loginForm");

var formOut = false;
var loginOut = false;

function formFadeIn() {
    conts[0].classList.add("fade-out-fwd");
    conts[1].classList.add("fade-out-fwd");

    setTimeout(function () {
        conts[0].style.display = "none";
        conts[1].style.display = "none";
        loginFormFadeOut();
        form.classList.add("fade-out-top");
        form.style.display = "block";
        formOut = true;
    }, 400);
}

function formFadeOut() {
    form.classList.toggle("fade-out-top");
    form.classList.add("fade-out-fwd");
    setTimeout(function () {
        form.style.display = "none";
        conts[0].style.display = "block";
        conts[1].style.display = "block";
        rentButton.classList.toggle("fade-in-bck");
        arrow.classList.toggle("fade-in-bck");
        formOut = false;
    }, 600)
}

function loginFormFadeIn(){
    if(formOut)
        formFadeOut();
    loginOut = true;
    setTimeout(function () {  
        loginForm.classList.add("fade-out-top");
        loginForm.style.display = "inline";
        }, 400);
}

function loginFormFadeOut(){
    loginForm.classList.toggle("fade-out-top");
    loginForm.classList.add("fade-out-fwd");
    setTimeout(function () {
        loginForm.style.display = "none";
        loginOut = false;
    }, 600)
}
vid.addEventListener("click", function () {
    if (formOut)
        formFadeOut();
    if(loginOut)
        loginFormFadeOut();
    formOut = false;
    rentForm.reset();
})
rentButton.addEventListener("click", function () {
    formFadeIn();
})
loginbut.addEventListener("click", function () {
    if(loginOut)
        loginFormFadeOut();
    loginFormFadeIn();
})

close.addEventListener("click", function () {
    formFadeOut();
    rentForm.reset();
});

pause.addEventListener("click", function () {
    vid.classList.toggle("vidFade");
    if (vid.paused) {
        vid.play();
        pause.classList.toggle("triangle-right");
        pause.classList.add("pause");
        pause.innerHTML = "&#9616;&nbsp;&#9612;";
    } else {
        vid.pause();
        pause.innerHTML = "";
        pause.classList.toggle("pause");
        pause.classList.add("triangle-right");
    }
});

setTimeout(function () {
    conts[0].classList.add("fade-in-bck");
    conts[1].classList.add("fade-in-bck");
    conts[0].style.display = "block";
    conts[1].style.display = "block";
    $("#bott").css("display", "block");
    $("#carousel").css("display", "block");
    $('.carousel').carousel('next');
}, 400);

setInterval(function () {
    var car = document.getElementById("Samochod").value;
    var start = document.getElementById("datetimepicker1").value;
    var end = document.getElementById("datetimepicker2").value;
    var pay = document.getElementById("pay");
    var date1 = new Date(start);
    var date2 = new Date(end);
    var rentingTime = date2 - date1;
    var oneDay = 86400000;
    if (rentingTime == 0)
        rentingTime = 1;

    if (rentingTime > 0) {
        if (car == "Benz") {
            var payment = 100 * (rentingTime / oneDay).toFixed(2);
            pay.innerHTML = "Do zapłaty: " + payment + " zł";
        } else if (car == "Corsa") {
            var payment = 70 * (rentingTime / oneDay).toFixed(2);
            pay.innerHTML = "Do zapłaty: " + payment + " zł";
        } else if (car == "Passat") {
            var payment = 50 * (rentingTime / oneDay).toFixed(2);
            pay.innerHTML = "Do zapłaty: " + payment + " zł";
        } else
            pay.innerHTML = "Do zapłaty: 0 zł";
    }


}, 500);

function scrollTo() {
    $('html, body').animate({
        scrollTop: $('#bott').offset().top
    }, 1500);
    return false;
}

arrow.addEventListener("click", function () {
    scrollTo();
});