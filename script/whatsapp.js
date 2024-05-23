document
  .getElementById("review-form")
  .addEventListener("submit", function (event) {
    event.preventDefault();
    const name = document.getElementById("reviewer-name").value;
    const review = document.getElementById("review-content").value;
    const phoneNumber = "6282317578112"; // Ganti dengan nomor WhatsApp tujuan (format internasional tanpa '+' atau '00')

    const message = `Name: ${name}%0AReview: ${review}`;
    const whatsappURL = `https://api.whatsapp.com/send?phone=${phoneNumber}&text=${encodeURIComponent(
      message
    )}`;

    window.open(whatsappURL, "_blank");
  });
