function validateProfileForm() {
    let username = document.getElementById("username").value.trim();
    let email = document.getElementById("email").value.trim();
    let valid = true;

    if (username.length < 3) {
        alert("Username must be at least 3 characters.");
        valid = false;
    }
    if (!email.includes('@')) {
        alert("Enter a valid email.");
        valid = false;
    }
    return valid;
}

function validatePasswordForm() {
    let pass = document.getElementById("new_pass").value;
    let confirm = document.getElementById("confirm_pass").value;

    if (pass.length < 6) {
        alert("Password must be at least 6 characters.");
        return false;
    }
    if (pass !== confirm) {
        alert("Passwords do not match.");
        return false;
    }
    return true;
}
