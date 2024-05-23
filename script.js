function changeChatType() {
  var chatTypeSelect = document.getElementById("chatTypeSelect");
  var selectedChatType = chatTypeSelect.value;

  // Sembunyikan semua tombol chat
  var chatButtons = document.querySelectorAll(".chat-button");
  chatButtons.forEach(function (button) {
    button.style.display = "none";
  });

  // Tampilkan tombol chat yang dipilih
  var selectedChatButton = document.querySelector(
    ".chat-button[value='" + selectedChatType + "']"
  );
  if (selectedChatButton) {
    selectedChatButton.style.display = "inline-block";
  }
}

function changeSocialMedia() {
  var socialMediaSelect = document.getElementById("socialMediaSelect");
  var selectedSocialMedia = socialMediaSelect.value;

  // Sembunyikan semua tombol sosial media
  var socialMediaButtons = document.querySelectorAll(".social-media-button");
  socialMediaButtons.forEach(function (button) {
    button.style.display = "none";
  });

  // Tampilkan tombol sosial media yang dipilih
  var selectedSocialMediaButton = document.querySelector(
    ".social-media-button[value='" + selectedSocialMedia + "']"
  );
  if (selectedSocialMediaButton) {
    selectedSocialMediaButton.style.display = "inline-block";
  }
}

function changeLanguage() {
  var select = document.getElementById("languageSelect");
  var selectedValue = select.options[select.selectedIndex].value;

  // Logika untuk mengganti bahasa sesuai dengan pilihan
  console.log("Bahasa telah diubah menjadi:", selectedValue);
}

var prevScrollpos = window.pageYOffset;

window.onscroll = function () {
  var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.querySelector("nav").classList.remove("active");
  } else {
    document.querySelector("nav").classList.add("active");
  }
  prevScrollpos = currentScrollPos;
};

document.addEventListener("DOMContentLoaded", function () {
  // Mendapatkan elemen-elemen yang dibutuhkan
  var searchInput = document.getElementById("searchInput");
  var searchButton = document.getElementById("searchButton");
  var searchResults = document.getElementById("searchResults");

  // Menambahkan event listener untuk tombol pencarian
  searchButton.addEventListener("click", function () {
    // Mengambil nilai input dari input pencarian
    var searchTerm = searchInput.value.trim();

    // Menampilkan pesan jika kotak pencarian kosong
    if (searchTerm === "") {
      searchResults.innerHTML = "Please enter a search term.";
      return;
    }

    // Memanggil fungsi pencarian dengan nilai yang dimasukkan
    search(searchTerm);
  });

  // Fungsi untuk melakukan pencarian
  function search(term) {
    // Simulasi pencarian (dapat diganti dengan proses pencarian yang sesungguhnya)
    var results = [
      "Search result 1 for " + term,
      "Search result 2 for " + term,
      "Search result 3 for " + term,
    ];

    // Menampilkan hasil pencarian
    displaySearchResults(results);
  }

  const searchButton = document.getElementById("searchButton");
  // Fungsi untuk menampilkan hasil pencarian
  function displaySearchResults(results) {
    // Mengosongkan konten sebelumnya
    searchResults.innerHTML = "";

    searchButton.addEventListener("click", function () {
      console.log("Tombol pencarian diklik!");
    });
    // Membuat dan menambahkan elemen untuk setiap hasil pencarian
    results.forEach(function (result) {
      var resultItem = document.createElement("div");
      resultItem.textContent = result;
      searchResults.appendChild(resultItem);
    });
  }
});

function login() {
  // Mengambil elemen form
  var form = document.getElementById("loginForm");

  // Melakukan pengalihan ke halaman beranda setelah login berhasil
  form.addEventListener("submit", function (event) {
    event.preventDefault(); // Mencegah pengiriman formulir secara langsung

    // Mengarahkan pengguna ke halaman beranda
    window.location.href = form.action;
  });
}

document.addEventListener("DOMContentLoaded", function() {
    const profileButton = document.getElementById('profileButton');
    
    // Periksa status login pengguna (asumsikan pengguna sudah login)
    const isLoggedIn = true;
    
    // Jika pengguna sudah login, ganti tombol "Profile"
    if (isLoggedIn) {
        profileButton.innerText = 'Profile';
    
        // Atur URL tujuan tombol "Profile"
        profileButton.onclick = function() {
            window.location.href = 'profile.html'; // Ganti dengan URL profil pengguna
        };
    }
});


document.addEventListener("DOMContentLoaded", function() {
    const loginButton = document.getElementById('loginButton');
    const registerButton = document.getElementById('registerButton');
    
    // Periksa status login pengguna (asumsikan pengguna sudah login)
    const isLoggedIn = true; // Ganti dengan cara Anda menentukan status login
    
    // Jika pengguna sudah login, sembunyikan tombol "Masuk" dan "Daftar"
    if (isLoggedIn) {
        loginButton.style.display = 'none';
        registerButton.style.display = 'none';
    }
});

