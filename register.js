
var count = 0;
var bars = document.getElementsByClassName("section");
function validatename() {

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4) {
            var res = this.responseText;
            if (res == "false") {
                $("#loginbtn").css("background-color", "#FF0000")
            }
        }
    }
    xhttp.open("GET", "retrievereq.php?q=name", true);
    xhttp.send();
}
$("#loginbtn").on("click", () => {
    alert(document.cookie);
});
function decevent() {
    count -= 1;
    display();
}
display();
function incevent() {
    count += 1;
    display();


}
function display() {
    for (var i = 0; i < bars.length; i++) {
        var track = ".track" + i;
        if (i == count) {
            bars[i].style.display = "flex";

            $(track).css("color", "blue");
        }
        else {
            bars[i].style.display = "none";
            $(track).css("color", "black");
        }

    }
}

function loginhere() {
    if (localStorage.getItem("user") == null) {
        $(".splash").removeClass("u2d").addClass("d2u");
        document.body.style.overflow = "hidden";
        $("main").css("opacity", 0.4);
    }
    else {
        const datainp = document.getElementsByClassName("takeinp");
        alert("ok");
        var user = localStorage.getItem("user");
        var name = datainp[0].value;
        var sdate = datainp[1].value;
        var stime = datainp[2].value;
        var edate = datainp[3].value;
        var etime = datainp[4].value;
        var loc = datainp[5].value;
        var pin = datainp[6].value;
        var url = datainp[7].value;

        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function (event) {
            if (event.target.readyState == 4 && event.target.status == 200) {
                alert("Event has been added") ;
                Location.href = ""
            }
        };
        xhttp.open("POST", "addevent.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

        var parse =
            "user=" + encodeURIComponent(user) + "&name=" + encodeURIComponent(name) + "&sdate=" + encodeURIComponent(sdate) +
            "&stime=" + encodeURIComponent(stime) + "&edate=" + encodeURIComponent(edate) + "&etime=" + encodeURIComponent(etime) +
            "&loc=" + encodeURIComponent(loc) + "&pin=" + encodeURIComponent(pin) + "&url=" + encodeURIComponent(url);

        xhttp.send(parse);



    }
}
