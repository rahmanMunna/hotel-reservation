function validateSignupForm() {
  let username = document.forms["signupForm"]["username"].value;
  let email = document.forms["signupForm"]["email"].value;
  let password = document.forms["signupForm"]["password"].value;

  if (username.trim() === "" || email.trim() === "" || password.trim() === "") {
    alert("All fields are required.");
    return false;
  }

  if (!email.includes("@")) {
    alert("Enter a valid email.");
    return false;
  }

  if (password.length < 6) {
    alert("Password must be at least 6 characters.");
    return false;
  }

  return true;
}
