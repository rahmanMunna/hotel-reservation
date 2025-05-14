document.addEventListener("DOMContentLoaded", () => {
  const input = document.getElementById("searchInput");
  input.addEventListener("input", () => {
    // Add AJAX call here to show live results (optional enhancement)
    console.log("Searching for:", input.value);
  });
});
