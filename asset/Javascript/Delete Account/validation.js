function handleDeleteAccount() {
    const password = document.getElementById('password').value;
    const retypePassword = document.getElementById('retype-password').value;

    if (password === "" || retypePassword === "") {
        alert("Fill all the field");
        return false;
    }
    if (password !== retypePassword) {
        alert("Password doesn't match");
        return false;
    }
    return true;
}