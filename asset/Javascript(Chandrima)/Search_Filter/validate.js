function validateForm() {
  const name = document.forms["inquiryForm"]["name"].value.trim();
  const email = document.forms["inquiryForm"]["email"].value.trim();
  const message = document.forms["inquiryForm"]["message"].value.trim();

  if (!name || !email || !message) {
    alert("All fields are required.");
    return false;
  }

  if (!email.includes("@") || email.length < 6) {
    alert("Invalid email format.");
    return false;
  }

  return true;
}
