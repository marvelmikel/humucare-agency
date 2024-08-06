document
  .getElementById("loginForm")
  .addEventListener("submit", function (event) {
    event.preventDefault();

    var email = document.getElementById("email");
    var password = document.getElementById("password");

    clearErrorMessages();

    var isValid = true;

    if (!validateEmail(email.value)) {
      showError(email, "Please enter a valid email address");
      isValid = false;
    }

    if (password.value === "") {
      showError(password, "Password cannot be empty");
      isValid = false;
    }

    const validCredentials =
      email.value === "sample@gmail.com" && password.value === "password";

    if (isValid && !validCredentials) {
      showError(password, "Wrong credentials");
    }
    if (isValid && validCredentials) {
      window.location.href = "takeCourse.html";
    }
  });

function validateEmail(email) {
  const re =
    /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(String(email).toLowerCase());
}

function showError(element, message) {
  element.classList.add("error");

  const errorSpan = document.createElement("span");
  errorSpan.classList.add("error-message");
  errorSpan.textContent = message;

  element.parentNode.insertBefore(errorSpan, element.nextSibling);
}

function clearErrorMessages() {
  const errorInputs = document.querySelectorAll(".error");
  errorInputs.forEach((input) => input.classList.remove("error"));

  const errorMessages = document.querySelectorAll(".error-message");
  errorMessages.forEach((message) => message.remove());
}
