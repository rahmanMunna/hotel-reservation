document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("maintenanceForm");
    if (form) {
      form.addEventListener("submit", function (e) {
        e.preventDefault();
        let isValid = true;
  
        const roomNumber = document.getElementById("roomNumber");
        const issueType = document.getElementById("issueType");
        const description = document.getElementById("description");
  
        const roomNumberError = document.getElementById("roomNumberError");
        const issueTypeError = document.getElementById("issueTypeError");
        const descriptionError = document.getElementById("descriptionError");
  
        roomNumberError.textContent = issueTypeError.textContent = descriptionError.textContent = "";
  
        if (roomNumber.value.trim() === "") {
          roomNumberError.textContent = "Please enter the room number.";
          isValid = false;
        }
  
        if (issueType.value === "") {
          issueTypeError.textContent = "Please select an issue type.";
          isValid = false;
        }
  
        if (description.value.trim().length < 10) {
          descriptionError.textContent = "Please provide a detailed description (at least 10 characters).";
          isValid = false;
        }
  
        if (isValid) {
          alert("Maintenance report submitted successfully!");
          form.reset();
        }
      });
    }
  });
  