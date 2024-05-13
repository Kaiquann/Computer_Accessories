//User Account
function checkAccount(username, getUser) {
    getUser = getUsername("username");
    username = localStorage.getItem(getUser);

    if (getUser == username) {
        document.getElementById("username").innerText = "Welcome Back, " + username;
        document.getElementById("signinorout").innerText = "Sign Out";
        document.getElementById("signinorout").addEventListener("click", function () {
            if (confirm("Are you sure you want to sign out, " + username + "?")) {
                today = new Date();
                var expire = new Date();
                expire.setTime(today.getTime() + 3600000 * 24 * 15);

                document.cookie =
                    "username=" + "" + ";path=/" + ";expires=" + expire.toUTCString();
                document.cookie =
                    "password=" +
                    encodeURI("") +
                    ";path=/" +
                    ";expires=" +
                    expire.toUTCString();
                return window.location.reload();
            } else {
                return false;
            }
        });
    } else {
        document.getElementById("username").innerText = "Welcome Back, Guest";
        document.getElementById("signinorout").innerText = "Sign In";
        document.getElementById("signinorout").addEventListener("click", function () {
            if (confirm("Click OK to Login.\nClick Cancel to Sign Up.")) {
                window.location.replace((document.src = "/ash_login/ash_login.html"));
                return false;
            } else if (
                confirm("Do you want to create an account now?\nClick OK to Sign Up.")
            ) {
                window.location.replace(
                    (document.src = "/ash_login/ash_signup.html")
                );
                return false;
            } else {
                return false;
            }
        });
    }
}

function getUsername(username) {
    let user = username + "=";
    let decodedCookie = decodeURIComponent(document.cookie);
    let ca = decodedCookie.split(";");
    for (let i = 0; i < ca.length; i++) {
        let c = ca[i];
        while (c.charAt(0) == " ") {
            c = c.substring(1);
        }
        if (c.indexOf(user) == 0) {
            return c.substring(user.length, c.length);
        }
    }
    return "";
}

window.onload = setTimeout(checkAccount, 500);

//Top Categories
//Image Variables
var i = 0;
var images = [];
var timing = 5000;

//Image list
images[0] = "/ash_image/home1.jpg";
images[1] = "/ash_image/home2.jpg";
images[2] = "/ash_image/home3.jpg";
images[3] = "/ash_image/home4.jpg";

//Change Image Function
function switchImg() {
    document.slide.src = images[i];

    if (i < images.length - 1) {
        i++;
    } else {
        i = 0;
    }

    //timing
    setTimeout("switchImg()", timing);
}
window.onload = setTimeout(switchImg, 500);

//Event Timetable
var loop = 0;
var looptime = 4000;
function timetable(dates, times, events) {
    dates = document.getElementById("date");
    times = document.getElementById("time");
    events = document.getElementById("event");

    switch (loop) {
        case 0:
            dates.innerText = "20/9/2022";
            times.innerText = "3PM-6PM";
            events.innerText = "CRACK THE CODE";
            loop = 1;
            break;
        case 1:
            dates.innerText = "23/9/2022";
            times.innerText = "10AM-12PM";
            events.innerText = "WEB DESIGN WEBINAR";
            loop = 2;
            break;
        case 2:
            dates.innerText = "1/10/2022";
            times.innerText = "8PM-10PM";
            events.innerText = "OCT LUCKY DRAW";
            loop = 3;
            break;
        case 3:
            dates.innerText = "10/10/2022";
            times.innerText = "10AM-12PM";
            events.innerText = "10/10 LUCKY DRAW!";
            loop = 4;
            break;
        default:
            loop = 0;
    }
    setTimeout("timetable()", looptime);
}

window.onload = setTimeout(timetable, 500);
