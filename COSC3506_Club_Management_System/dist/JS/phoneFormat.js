function formatPhoneNumber(input) {
  // Remove all non-digit characters
  let phoneNumber = input.value.replace(/\D/g, "");

  // Format the phone number
  let formattedNumber = "";
  if (phoneNumber.length > 0) {
    formattedNumber += "(" + phoneNumber.substring(0, 3) + ")";
  }
  if (phoneNumber.length >= 4) {
    formattedNumber += "-" + phoneNumber.substring(3, 6);
  }
  if (phoneNumber.length >= 7) {
    formattedNumber += "-" + phoneNumber.substring(6, 10);
  }

  // Set the formatted phone number back to the input field
  input.value = formattedNumber;
}

function validateForm() {
  const phoneInput = document.getElementById("phone").value;
  const phonePattern = /^\(\d{3}\)-\d{3}-\d{4}$/;
  if (phoneInput === "" || phonePattern.test(phoneInput)) {
    return true;
  } else {
    alert(
      "Please enter a valid phone number in the format (123)-456-7890 or leave it empty."
    );
    return false;
  }
}
