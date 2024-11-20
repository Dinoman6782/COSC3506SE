function checkPasswordLength() {
  const passwordInput = document.getElementById("password");
  const errorMessage = document.getElementById("errorMessage");
  const errorLabel = document.getElementById("errorLabel");
  const signUpButton = document.getElementById("signUpButton");
  if (passwordInput.value.length < 8) {
    errorMessage.classList.remove("hidden");
    errorLabel.textContent =
      "Error: Password must be at least 8 characters long.";
    passwordInput.classList.remove("valid-input");
    passwordInput.classList.add("invalid-input");
    signUpButton.classList.remove("mt-14");
  } else {
    errorMessage.classList.add("hidden");
    passwordInput.classList.remove("invalid-input");
    passwordInput.classList.add("valid-input");
    signUpButton.classList.add("mt-14");
  }
}
