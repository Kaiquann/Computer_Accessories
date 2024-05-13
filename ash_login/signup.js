function createAccount(username, password) {
  username = document.getElementById("username").value;
  password = document.getElementById("confirm_pass").value;

  if (username != "" && password != "") {
    localStorage.setItem(username, username);
    localStorage.setItem(password, password);
    if (
      confirm(
        "Username: " +
        username +
        "\nYour account has been created.\nDo you want to login now?"
      )
    ) {
      setTimeout(function () {
        window.location.replace((document.src = "ash_login.html"));
      }, 0);
      return true;
    } else {
      return false;
    }
  }
}

function addAccount(username) {
  var username = document.getElementById("username").value;

  if (localStorage.getItem(username) == username) {
    if (
      confirm(
        document.getElementById("username").value +
        ", your account history has been found, do u want to login now?"
      )
    ) {
      setTimeout(function () {
        window.location.replace((document.src = "ash_login.html"));
      }, 0);
      return true;
    } else {
      return false;
    }
  } else {
    createAccount();
  }
}
