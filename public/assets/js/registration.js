document.getElementById("myForm").addEventListener("submit", function (event) {
  // Prevent default form submission
  event.preventDefault();

  // Get references to form elements
  let firstName = document.getElementById("first_name");
  let lastName = document.getElementById("last_name");
  let email = document.getElementById("email");
  let password = document.getElementById("password");
  let confirmPassword = document.getElementById("confirm_password");

  // Clear any previous error messages
  clearErrorMessages();

  // Validation logic
  let isValid = true;

  // Trim all input values before validation
  trimInputValues([firstName, lastName, email, password, confirmPassword]);

  // Check if First Name is empty
  if (firstName.value === "") {
    showError(firstName, "First Name cannot be empty");
    isValid = false;
  }

  // Check if Last Name is empty
  if (lastName.value === "") {
    showError(lastName, "Last Name cannot be empty");
    isValid = false;
  }

  // Check if Email is empty or has invalid format
  if (!validateEmail(email.value)) {
    showError(email, "Please enter a valid email address");
    isValid = false;
  }

  // Check if Password is empty
  if (password.value === "") {
    showError(password, "Password cannot be empty");
    isValid = false;
  } else if (password.value.length < 8) {
    showError(password, "Password must be at least 8 characters long");
    isValid = false;
  }

  // Check if Confirm Password matches Password
  if (confirmPassword.value !== password.value) {
    showError(confirmPassword, "Passwords do not match");
    isValid = false;
  }

  // Submit the form if validation is successful
  if (isValid) {
    const encodedEmail = encodeURIComponent(email.value);
    window.location.href = "success.html?email=" + encodedEmail;
    const result = {
      name: firstName.value + lastName.value,
      email: email.value,
    };
    console.log("result", result);
  }
});
function trimInputValues(inputs) {
  inputs.forEach((input) => (input.value = input.value.trim()));
}

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
