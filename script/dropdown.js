  document.addEventListener('DOMContentLoaded', function() {
    var profileButton = document.querySelector('.profileButton');
    var dropdownContent = document.querySelector('.dropdown-content');

    profileButton.addEventListener('click', function(event) {
      event.stopPropagation(); // Mencegah event click dari window
      var isOpen = dropdownContent.style.display === 'block';
      dropdownContent.style.display = isOpen ? 'none' : 'block';
      profileButton.setAttribute('aria-expanded', isOpen ? 'false' : 'true');
    });

    window.addEventListener('click', function(event) {
      if (!profileButton.contains(event.target)) {
        dropdownContent.style.display = 'none';
        profileButton.setAttribute('aria-expanded', 'false');
      }
    });
  });
