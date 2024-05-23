document
  .querySelector(".hamburger-menu")
  .addEventListener("click", function () {
    const headerContent2 = document.querySelector(
      ".main-nav .header-content-2"
    );
    if (headerContent2.style.display === "block") {
      headerContent2.style.display = "none";
    } else {
      headerContent2.style.display = "block";
    }
  });
