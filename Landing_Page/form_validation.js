document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('signupForm');
    if (form) {
      form.addEventListener('submit', function (e) {
        e.preventDefault();
        const name = document.getElementById('name').value.trim();
        const email = document.getElementById('email').value.trim();
        const password = document.getElementById('password').value;
  
        if (name.length < 3) {
          alert("Name must be at least 3 characters long.");
          return;
        }
  
        if (!/^\S+@\S+\.\S+$/.test(email)) {
          alert("Enter a valid email address.");
          return;
        }
  
        if (password.length < 6) {
          alert("Password must be at least 6 characters.");
          return;
        }
  
        alert("Registration successful!");
      });
    }
  });