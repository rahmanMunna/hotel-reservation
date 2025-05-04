document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('roleForm');
    if (form) {
      form.addEventListener('submit', function (e) {
        e.preventDefault();
        const email = document.getElementById('userEmail').value.trim();
        const role = document.getElementById('role').value;
  
        if (!email || !/^\S+@\S+\.\S+$/.test(email)) {
          alert("Enter a valid email address.");
          return;
        }
  
        if (!role) {
          alert("Please select a role.");
          return;
        }
  
        window.location.href = "access_success.html";
      });
    }
  });