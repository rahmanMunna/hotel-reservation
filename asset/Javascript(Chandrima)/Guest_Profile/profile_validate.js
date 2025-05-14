function validatePreferences() {
  const floor = document.forms["preferenceForm"]["floor"].value;
  const view = document.forms["preferenceForm"]["view"].value;

  if (!floor || !view) {
    alert("Please select both floor and view preferences.");
    return false;
  }

  return true;
}
