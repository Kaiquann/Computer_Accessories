function submitted() {
    var username = document.getElementById("username").value;
    var rate1 = document.getElementById("rate1");
    var rate2 = document.getElementById("rate2");
    var rate3 = document.getElementById("rate3");
    var rate4 = document.getElementById("rate4");
    var rate5 = document.getElementById("rate5");
    var rated;

    if (rate1.checked) {
        rated =
            "Sorry for your bad experience, we will try to improve our service.";
    } else if (rate2.checked) {
        rated =
            "Sorry for your bad experience, we will try to improve our service.";
    } else if (rate3.checked) {
        rated = "Thanks for your rating!!!";
    } else if (rate4.checked) {
        rated = "Thanks for your good rating.";
    } else if (rate5.checked) {
        rated = "Thanks for your good rating, have a nice day.";
    } else {
        alert(username + ", Please rate our shop.");
        return false;
    }
    alert(username + ", " + rated);
    return true;
}
