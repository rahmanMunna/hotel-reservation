document.getElementById("contactForm").addEventListener("submit", function (e) {
    let valid = true;
  
    
    document.querySelectorAll('.error').forEach(e => e.textContent = '');
  
     
    const name = document.getElementById("name").value.trim();
    if (name === "") {
      document.getElementById("nameError").textContent = "Name is required.";
      valid = false;
    }
  
     
    const email = document.getElementById("email").value.trim();
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
      document.getElementById("emailError").textContent = "Enter a valid email.";
      valid = false;
    }
  
     
    const message = document.getElementById("message").value.trim();
    if (message.length < 10) {
      document.getElementById("messageError").textContent = "Message must be at least 10 characters.";
      valid = false;
    }
  
    
    const captcha = document.getElementById("captcha").value.trim();
    if (captcha !== "5") {
      document.getElementById("captchaError").textContent = "Incorrect CAPTCHA answer.";
      valid = false;
    }
  
    if (!valid) {
      e.preventDefault();
    }
  });
  