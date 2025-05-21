document.addEventListener("DOMContentLoaded", function () {
  const form = document.getElementById("reviewForm");
  const ratingError = document.getElementById("ratingError");
  const commentError = document.getElementById("commentError");

  form.addEventListener("submit", function (event) {
    let valid = true;

    // Check if a rating is selected
    const ratingChecked = document.querySelector('input[name="rating"]:checked');
    if (!ratingChecked) {
      ratingError.textContent = "Please select a star rating.";
      valid = false;
    } else {
      ratingError.textContent = "";
    }

    // Check if the comment is not empty
    const comment = document.getElementById("comment").value.trim();
    if (comment === "") {
      commentError.textContent = "Please enter a comment.";
      valid = false;
    } else {
      commentError.textContent = "";
    }

    // Prevent form submission if validation fails
    if (!valid) {
      event.preventDefault();
    }
  });
});
