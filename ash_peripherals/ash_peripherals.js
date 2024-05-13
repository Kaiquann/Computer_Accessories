function forward(getID) {
    var t = document.getElementById("toast");
    var id = document.getElementById(getID).getAttribute("href").toString();
    t.innerText = "Forwarding to: " + id;
    (t.className = "show"),
        setTimeout(function () {
            t.className = t.className.replace("show", "");
        }, 3000);
}
