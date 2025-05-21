function filterAmenities() {
  const value = document.getElementById("amenityFilter").value;
  const cards = document.querySelectorAll(".amenity-card");

  cards.forEach(card => {
    if (value === "all" || card.classList.contains(value)) {
      card.style.display = "block";
    } else {
      card.style.display = "none";
    }
  });
}
