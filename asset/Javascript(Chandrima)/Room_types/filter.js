function filterRooms() {
  const value = document.getElementById("roomFilter").value;
  const cards = document.querySelectorAll(".room-card");

  cards.forEach(card => {
    if (value === "all" || card.classList.contains(value)) {
      card.style.display = "block";
    } else {
      card.style.display = "none";
    }
  });
}
