function validateInquiry() {
  const name = document.forms["inquiryForm"]["name"].value.trim();
  const email = document.forms["inquiryForm"]["email"].value.trim();
  const message = document.forms["inquiryForm"]["message"].value.trim();
  const captcha = document.forms["inquiryForm"]["captcha"].value.trim();

  if (!name || !email || !message || !captcha) {
    alert("All fields are required.");
    return false;
  }

  if (!email.includes("@") || email.length < 5) {
    alert("Invalid email address.");
    return false;
  }

  if (captcha !== "7") {
    alert("CAPTCHA incorrect.");
    return false;
  }

  return true;
}
