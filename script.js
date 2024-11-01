document.getElementById('registrationForm').addEventListener('submit', function(event) {
    // Client-side validation
    const name = document.getElementById('name').value.trim();
    const email = document.getElementById('email').value.trim();
    const password = document.getElementById('password').value.trim();
    const phone = document.getElementById('phone').value.trim();

    // Check if fields are not empty
    if (!name || !email || !password) {
        alert("Please fill in all required fields.");
        event.preventDefault();
        return;
    }

    // Check password length
    if (password.length < 6) {
        alert("Password must be at least 6 characters long.");
        event.preventDefault();
        return;
    }

    // Basic email validation (HTML5 input type="email" handles this as well)
    const emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
    if (!emailPattern.test(email)) {
        alert("Please enter a valid email address.");
        event.preventDefault();
        return;
    }

    // Optional phone validation
    const phonePattern = /^[0-9]{10}$/; // Example: 10-digit phone number
    if (phone && !phonePattern.test(phone)) {
        alert("Please enter a valid phone number (10 digits).");
        event.preventDefault();
    }
});
