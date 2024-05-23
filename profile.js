document.addEventListener("DOMContentLoaded", function() {
    const profileButton = document.getElementById('profileButtonContainer');
    
    // Periksa status login pengguna (asumsikan pengguna sudah login)
    const isLoggedIn = true;
    
    // Jika pengguna sudah login, tampilkan tombol "Profile"
    if (isLoggedIn) {
        profileButton.style.display = 'inline-flex';
    } else {
        profileButton.style.display = 'none'; // Sembunyikan tombol "Profile" jika belum login
    }
});

function submitForm() {
    var form = document.getElementById("loginForm");
    var formData = new FormData(form);
    
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "/index.html", true);
    xhr.onload = function () {
        if (xhr.status === 200) {
            alert('Login berhasil!');
            // Redirect to another page after successful login if needed
            window.location.href = "/dashboard.html";
        } else {
            alert('Login gagal!');
        }
    };
    xhr.send(formData);
}
