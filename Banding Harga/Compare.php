<?php 
session_start();
$kondisi = isset($_SESSION['user_name']);
if (!$kondisi) {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-k6RqeWeci5ZR/Lv4MR0sA0FfDOM4J9fekP3kv12xs2vl7ur+ZDaR0Lp0QbsXYI5H" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>My PlanET</title>    
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="./style.compare.css" />
    </head>
    <main>
    <nav>
        <div class="menu">
          <div class="header-content-1">
            <div class="left-content">
              <div class="home">
                <a href="../index.php"
                  ><i class="material-icons">home</i>Beranda</a
                >
              </div>
              <div class="cek-transaction">
                <a href="../Transaksi/cektransaksi.php"
                  ><i class="material-icons">search</i>Cek Transaksi</a
                >
              </div>
              <div class="compare-price">
                <a href="./Banding Harga/Compare.php"
                  ><span class="material-symbols-outlined">compare_arrows</span
                  >Banding Harga</a
                >
              </div>
            </div>
          </div>
          <div class="header-content-2">
            <div class="right-content">
              <div class="search-container">
                <button id="searchButton">
                  <i class="material-icons">search</i>
                </button>
              </div>
              <div class="language-selector">
                <select id="languageSelect" onchange="changeLanguage()">
                  <option value="id">ID</option>
                  <option value="en">Eng</option>
                  <!-- Tambahkan pilihan bahasa lainnya sesuai kebutuhan -->
                </select>
              </div>
              <div class="auth-links">
                <?php if (isset($_SESSION['user_name'])): ?>
                  <div class="dropdown">
                  <button class="profileButton"  aria-haspopup="true" aria-expanded="false">Selamat datang, <?php echo htmlspecialchars($_SESSION['user_name']); ?></button>
                  <div class="dropdown-content">
                    <a href="./login/logout.php">Keluar</a>
                  </div>
                </div>
                <?php else: ?>
                <div class="loginButton" id="loginButtonContainer">
                  <a href="./login/login.php" id="loginButton">Masuk</a>
                </div>
                <div class="registerButton" id="registerButtonContainer">
                  <a href="../Register/register.html" id="registerButton">Daftar</a>
                </div>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
      </nav>

      <section id="compare-vendors">
        <h2>Compare Vendors</h2>
        <div class="comparison-table">
          <div class="vendor">
            <h3>Vendor A</h3>
            <ul>
              <li>Price: Rp 10,000,000</li>
              <li>
                Services: Event planning, Decoration, Catering, Photography
              </li>
              <li>Experience: 5 years</li>
              <li>Credibility: Highly rated</li>
            </ul>
          </div>
          <div class="vendor">
            <h3>Vendor B</h3>
            <ul>
              <li>Price: Rp 8,000,000</li>
              <li>
                Services: Event planning, Decoration, Catering, Photography,
                Entertainment
              </li>
              <li>Experience: 7 years</li>
              <li>Credibility: Trusted in the industry</li>
            </ul>
          </div>
        </div>
      </section>
    </main>

    <footer>
      <div class="footer-1">
        <div class="menu-container">
          <p class="menu-trigger">Social Media</p>
          <div class="social-media-menu">
            <a
              href="https://www.tiktok.com/"
              target="_blank"
              class="social-media-button tiktok"
              >TikTok</a
            >
            <a
              href="https://www.youtube.com/"
              target="_blank"
              class="social-media-button youtube"
              >YouTube</a
            >
            <a
              href="https://www.instagram.com/"
              target="_blank"
              class="social-media-button instagram"
              >Instagram</a
            >
          </div>
        </div>
        <div class="flow-container">
          <p class="flow-trigger">Peta Situs</p>
          <div class="peta-situs-flow">
            <a href="../index.php" class="peta-situs-button beranda">Beranda</a>
            <a
              href="../Transaksi/cektransaksi.php"
              class="peta-situs-button cek-transaksi"
              >Cek Transaksi</a
            >
            <a
              href="../Banding Harga/Compare.php"
              class="peta-situs-button banding-harga"
              >Banding Harga</a
            >
            <a href="../hubungi-kami" class="peta-situs-button hubungi-kami"
              >Hubungi Kami</a
            >
            <a
              href="../Dashboard/Dashboard.php"
              class="peta-situs-button dashboard"
              >Dashboard</a
            >
            <a href="../Ulasan/Ulasan.php" class="peta-situs-button ulasan"
              >Ulasan</a
            >
          </div>
        </div>
        <div class="support-container">
          <p class="support-trigger">Dukungan</p>
          <div class="dukungan-support">
            <a href="/WhatsApp" class="dukungan-button whatsapp">WhatsApp</a>
            <a href="/Email" class="dukungan-button email">Email</a>
            <a href="/Instagram" class="dukungan-button instagram-2"
              >Instagram</a
            >
          </div>
        </div>
        <div class="chat-container">
          <p class="chat-trigger">Chat</p>
          <div class="chat-pesan">
            <a href="/dirrectmessage" class="chat-button dirrectmessage"
              >Dirrect Message</a
            >
            <a href="/customersercvie" class="chat-button Customerservice"
              >Customer Service</a
            >
          </div>
        </div>
      </div>
    </footer>
    <script>    document.addEventListener('DOMContentLoaded', function() {
    var profileButton = document.querySelector('.profileButton');
    var dropdownContent = document.querySelector('.dropdown-content');

    profileButton.addEventListener('click', function(event) {
      event.stopPropagation();
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
</script>

    </body>
    </html>
    
