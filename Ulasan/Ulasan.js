document.addEventListener("DOMContentLoaded", function() {
    const reviewForm = document.getElementById("review-form");
    const previousReviews = document.getElementById("previous-reviews");

    // Load previous reviews from localStorage
    const savedReviews = JSON.parse(localStorage.getItem("reviews")) || [];

    // Display previous reviews
    savedReviews.forEach(review => {
        const reviewCard = document.createElement("div");
        reviewCard.classList.add("review-card");
        reviewCard.textContent = `${review.name}: ${review.content}`;
        previousReviews.appendChild(reviewCard);
    });

    // Handle form submission
    reviewForm.addEventListener("submit", function(event) {
        event.preventDefault();

        // Get form values
        const name = reviewForm.elements["reviewer-name"].value;
        const content = reviewForm.elements["review-content"].value;

        // Save review to localStorage
        savedReviews.push({ name, content });
        localStorage.setItem("reviews", JSON.stringify(savedReviews));

        // Create new review card and add to previous reviews section
        const reviewCard = document.createElement("div");
        reviewCard.classList.add("review-card");
        reviewCard.textContent = `${name}: ${content}`;
        previousReviews.appendChild(reviewCard);

        // Clear form fields
        reviewForm.reset();
    });
});
