//comfirm to subcribes to news letters
function myFunction() {
    var txt;
    var r = confirm("are u sure!");
    if (r == true) {
        txt = "subscribe successfully!";
    } else {
        txt = "You pressed Cancel!";
    }
    document.getElementById("subscribe").innerHTML = txt;
    alert(txt)
}

// Set the date we're counting down to
var countDownDate = new Date("June 10, 2020 12:00:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

    // Get today's date and time
    var now = new Date().getTime();

    // Find the distance between now and the count down date
    var distance = countDownDate - now;

    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    // Display the result in the element with id="demo"
    document.getElementById("demo").innerHTML = days + "d " + hours + "h " +
        minutes + "m " + seconds + "s ";

    // If the count down is finished, write some text
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "Application Closed";
    }
}, 1000);


//Move to and scrollby
function scrollWin(x, y) {
    window.scrollBy(x, y);
}
//like button

function clickCounter() {
    if (typeof(Storage) !== "undefined") {
        if (localStorage.clickcount) {
            localStorage.clickcount = Number(localStorage.clickcount) + 1;
        } else {
            localStorage.clickcount = 1;
        }
        document.getElementById("like").innerHTML = "Likes " + localStorage.clickcount + "";
    } else {
        document.getElementById("like").innerHTML = "Sorry, your browser does not support web storage...";
    }
}

//Dislike button

function DisklikeclickCounter() {
    if (typeof(Storage) !== "undefined") {
        if (localStorage.Disklikeclickcount) {
            localStorage.Disklikeclickcount = Number(localStorage.Disklikeclickcount) + 1;
        } else {
            localStorage.Disklikeclickcount = 1;
        }
        document.getElementById("dislike").innerHTML = "Dislikes " + localStorage.Disklikeclickcount + "";
    } else {
        document.getElementById("dislike").innerHTML = "Sorry, your browser does not support web storage...";
    }
}