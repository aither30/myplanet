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
    <link rel="stylesheet" href="./style.Dashboard.css" />
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
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
                <a href="../Banding Harga/Compare.php"
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
                  <a href="#">Dashboard</a>
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

      <section class="dashboard">
        <div class="dashboard-item">
          <h2>Welcome to Your Dashboard</h2>
          <p>
            This is your personalized dashboard where you can manage your
            account.
          </p>
        </div>
        <div class="dashboard-item">
          <h3>Account Information</h3>
          <p>Name: John Doe</p>
          <p>Email: john@example.com</p>
          <p>Membership: Premium</p>
        </div>
        <div class="dashboard-item">
          <h3>Recent Activity</h3>
          <ul>
            <li>Logged in</li>
            <li>Updated profile picture</li>
            <li>Posted a comment</li>
          </ul>
        </div>
      </section>
    </main>

    <footer>
      <div class="img"></div>
      <!-- Site Map Section -->
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
            <a href="../index.php" class="peta-situs-button beranda"
              >Beranda</a
            >
            <a
              href="/Transaksi/cektransaksi.html"
              class="peta-situs-button cek-transaksi"
              >Cek Transaksi</a
            >
            <a href="../Banding Harga/Compare.php" class="peta-situs-button banding-harga"
              >Banding Harga</a
            >
            <a href="/hubungi-kami" class="peta-situs-button hubungi-kami"
              >Hubungi Kami</a
            >
            <a href="./Dashboard.php" class="peta-situs-button dashboard-footer"
              >Dashboard</a
            >
            <a href="../Ulasan/Ulasan.php" class="peta-situs-button ulasan">Ulasan</a>
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
  </body>
</html>
