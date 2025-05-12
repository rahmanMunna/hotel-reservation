function validateForm(formId) {
    const form = document.getElementById(formId);
    form.addEventListener("submit", function (e) {
      e.preventDefault();
      let valid = true;
      const inputs = form.querySelectorAll("input, select");
      inputs.forEach(input => {
        const errorSpan = document.getElementById(input.name + "Error");
        if (input.value.trim() === "") {
          errorSpan.textContent = "This field is required.";
          valid = false;
        } else {
          errorSpan.textContent = "";
        }
      });
      if (valid) alert("Form submitted successfully!");
    });
  }
  