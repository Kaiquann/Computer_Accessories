function checkEmail() {
  let email = document.getElementById("email").value;
  let messageBox = document.getElementById("messageBox").value;

  if (!email.includes("@")) {
    alert("Invalid Email Address: " + email);
    return false;
  } else if (messageBox == "") {
    alert("Invalid Message: " + messageBox);
    return false;
  }
}
