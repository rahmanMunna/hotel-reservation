function validateBookingForm() {
  const form = document.forms["bookingForm"];
  const name = form["name"].value.trim();
  const email = form["email"].value.trim();
  const room = form["room"].value;
  const checkin = form["checkin"].value;
  const checkout = form["checkout"].value;

  if (!name || !email || !room || !checkin || !checkout) {
    alert("Please fill in all fields.");
    return false;
  }

  if (!email.includes("@") || email.length < 5) {
    alert("Invalid email address.");
    return false;
  }

  if (checkin >= checkout) {
    alert("Check-out must be after check-in.");
    return false;
  }

  return true;
}
