// GET ALL ELEMENTS FROM THE WEBPAGE NEED
const themeBtn = document.getElementById('themeBtn');
const nameField = document.getElementById('name');
const emailField = document.getElementById('email');
const phoneField = document.getElementById('phone');
const passwordField = document.getElementById('password');
const confirmPasswordField = document.getElementById('confirmPassword');
const sumitBtn = document.getElementById('submitBtn');
const nameCount = document.getElementById('nameCount');
const emailMsg = document.getElementById('emialMsg');
const phoneMsg = document.getElementById('phoneMsg');
const confirmMsg = document.getElementById('confirmMsg');
const strengthFill = document.getElementById('strengthFill');
const strengthText = document.getElementById('strengthText');
const form = document.getElementById('signupForm');

// THEME SWITCHING
themeBtn.addEventListener('click', () => {
    document.body.classList.toggle("dark-theme");

    if (document.body.classList.contains("dark-theme")) {
        themeBtn.textContent = "Light Mode";
    } else {
        themeBtn.textContent = "Dark Mode";
    }
});

// NAME COUNTER
nameField.addEventListener("input", () => {

    nameCount.textContent = `${nameField.value.length} / 50`;

    // All validations call this function to display validation errors if any
    validateForm();
});


// EMAIL VALIDATION
emailField.addEventListener("input", () => {
    // Uses regular expression
    const pattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (pattern.test(emailField.value)) {
        emailMsg.textContent = "Valid email";
        emailMsg.className = "valid";
    }
    else {
        emailMsg.textContent = "Invalid email";
        emailMsg.className = "invalid";
    }

    validateForm();
});


// PHONE VALIDATION
phoneField.addEventListener("input", () => {
    // Uses regular expression
    const phonePattern = /^09\d{9}$/;

    if (phonePattern.test(phoneField.value)) {
        phoneMsg.textContent = "Valid phone number";
        phoneMsg.className = "valid";
    }
    else {
        phoneMsg.textContent =
            "Format: 09XXXXXXXXX";
        phoneMsg.className = "invalid";
    }

    validateForm();
});


// PASSWORD STRENGTH
passwordField.addEventListener("input", () => {
    const password = passwordField.value;

    let strength = 0;

    if (password.length >= 8) strength++;
    if (/[A-Z]/.test(password)) strength++;
    if (/[0-9]/.test(password)) strength++;
    if (/[!@#$%^&*]/.test(password)) strength++;

    switch (strength) {
        case 1:
            strengthFill.style.width = "25%";
            strengthFill.style.background = "red";
            strengthText.textContent = "Weak";
            break;

        case 2:
            strengthFill.style.width = "50%";
            strengthFill.style.background = "orange";
            strengthText.textContent = "Fair";
            break;

        case 3:
            strengthFill.style.width = "75%";
            strengthFill.style.background = "gold";
            strengthText.textContent = "Good";
            break;

        case 4:
            strengthFill.style.width = "100%";
            strengthFill.style.background = "green";
            strengthText.textContent = "Strong";
            break;

        default:
            strengthFill.style.width = "0%";
            strengthText.textContent = "";
    }

    checkPasswords();
    validateForm();
});


// CONFIRM PASSWORD
confirmPasswordField.addEventListener("input", () => {
    checkPasswords();
    validateForm();
});

function checkPasswords() {
    if ( // You can put conditions in multiple lines for easier reading
        passwordField.value ===
        confirmPasswordField.value &&
        passwordField.value !== ""
    ) {
        confirmMsg.textContent = "Passwords match";

        confirmMsg.className = "valid";
    }
    else {
        confirmMsg.textContent = "Passwords do not match";

        confirmMsg.className = "invalid";
    }

}


// SHOW/HIDE PASSWORD
// You can 'chain' function calls: getElementById and addEventListener
document.getElementById("togglePassword").addEventListener("click", () => {

    if (passwordField.type === "password") {
        passwordField.type = "text";
    }
    else {
        passwordField.type = "password";
    }

});


// ENABLE SUBMIT BUTTON
function validateForm() {
    // These uses regular expression (regex)
    const emailValid = /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(emailField.value);

    const phoneValid = /^09\d{9}$/.test(phoneField.value);

    const passwordsMatch = passwordField.value === confirmPasswordField.value && passwordField.value.length >= 8;

    const nameValid = nameField.value.trim().length > 1;

    submitBtn.disabled = !(emailValid && phoneValid && passwordsMatch && nameValid);

}


// SUBMIT BUTTON IS CLICKED
form.addEventListener("submit", (e) => {
    // The argument 'e' 
    e.preventDefault();

    document.getElementById("successMessage").textContent = "Registration Successful!";

    form.reset();

    strengthFill.style.width = "0%";
    strengthText.textContent = "";
    submitBtn.disabled = true;
});