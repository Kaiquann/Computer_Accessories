function checkAccount(username, password) {
  username = document.getElementById("username").value;
  password = document.getElementById("password").value;

  today = new Date();
  var expire = new Date();
  expire.setTime(today.getTime() + 3600000 * 24 * 15);

  if (localStorage.getItem(username) == username) {
    if (localStorage.getItem(password) == password) {
      today = new Date();
      var expire = new Date();
      expire.setTime(today.getTime() + 3600000 * 24 * 15);

      document.cookie =
        "username=" + username + ";path=/" + ";expires=" + expire.toUTCString();
      document.cookie =
        "password=" +
        encodeURI(password) +
        ";path=/" +
        ";expires=" +
        expire.toUTCString();
      alert("Welcome Back, " + username);
      setTimeout(function () {
        window.location.replace((document.src = "/index.html"));
      }, 0);
    } else {
      alert(username + ", password wrong!!!");
      return false;
    }
  } else if (username == "" || password == "") {
    username.focus();
    return false;
  } else if (
    confirm(
      "Our database don't have this userdata.\nDo you want to sign up now?"
    )
  ) {
    setTimeout(function () {
      window.location.replace((document.src = "ash_signup.html"));
    }, 0);
  } else {
    document.getElementById("username").value = "";
    document.getElementById("password").value = "";
    return false;
  }
}

function noForgotPass() {
  alert("Sorry, We Don't Support Forgot Password!!!");
  return false;
}
