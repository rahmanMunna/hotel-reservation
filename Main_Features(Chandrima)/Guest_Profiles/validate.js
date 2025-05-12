document.getElementById("preferenceForm").addEventListener("submit", function (e) {
    e.preventDefault();
    let isValid = true;
  
    const floor = document.getElementById("floor");
    const view = document.getElementById("view");
    const requests = document.getElementById("requests");
  
    const floorError = document.getElementById("floorError");
    const viewError = document.getElementById("viewError");
    const requestsError = document.getElementById("requestsError");
  
    floorError.textContent = viewError.textContent = requestsError.textContent = "";
  
    if (floor.value === "") {
      floorError.textContent = "Please select a floor.";
      isValid = false;
    }
  
    if (view.value === "") {
      viewError.textContent = "Please select a view.";
      isValid = false;
    }
  
    if (requests.value.trim().length < 3) {
      requestsError.textContent = "Please enter at least 3 characters.";
      isValid = false;
    }
  
    if (isValid) {
      alert("Preferences saved successfully!");
      
    }
  });
  