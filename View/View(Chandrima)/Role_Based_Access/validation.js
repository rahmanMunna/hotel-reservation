function validateRoleForm() {
  const role = document.querySelector('select[name="role"]').value;
  if (!role) {
    alert("Please select a role.");
    return false;
  }
  return true;
}
