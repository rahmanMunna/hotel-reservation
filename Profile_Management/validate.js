// Edit Profile Form Validation
document.getElementById('editProfileForm')?.addEventListener('submit', function(e) {
    e.preventDefault();
    let isValid = true;
  
    const email = document.getElementById('email').value.trim();
    const phone = document.getElementById('phone').value.trim();
  
    const emailPattern = /^[^\\s@]+@[^\\s@]+\\.[^\\s@]+$/;
    if (!emailPattern.test(email)) {
      alert("Invalid email address.");
      isValid = false;
    }
  
    const phonePattern = /^\\d{10}$/;
    if (!phonePattern.test(phone)) {
      alert("Phone number must be 10 digits.");
      isValid = false;
    }
  
    if (isValid) {
      alert("Profile updated successfully!");
      // Submit form or save data logic
    }
  });
  
  // Update Password Form Validation
  document.getElementById('updatePasswordForm')?.addEventListener('submit', function(e) {
    e.preventDefault();
    let isValid = true;
  
    const newPassword = document.getElementById('newPassword').value.trim();
    const confirmPassword = document.getElementById('confirmPassword').value.trim();
  
    if (newPassword.length < 6) {
      alert("Password must be at least 6 characters.");
      isValid = false;
    }
  
    if (newPassword !== confirmPassword) {
      alert("Passwords do not match.");
      isValid = false;
    }
  
    if (isValid) {
      alert("Password updated successfully!");
      // Submit form or save data logic
    }
  });
  