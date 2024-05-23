<?php
session_start();
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
  <link rel="stylesheet" href="./style.css" />
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <style>
    .dropdown {
      position: relative;
      display: inline-block;
    }
    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f9f9f9;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      z-index: 1;
    }
    .dropdown-content a {
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
    }
    .dropdown-content a:hover {
      background-color: #f1f1f1;
    }
    .dropdown:hover .dropdown-content {
      display: block;
    }
  </style>
</head>
<body>
    <main>
  <nav>
    <div class="menu">
      <div class="header-content-1">
        <div class="left-content">
          <div class="home">
            <a href="./index.php"><i class="material-icons">home</i>Beranda</a>
          </div>
          <div class="cek-transaction">
            <a href="./Transaksi/cektransaksi.html"><i class="material-icons">search</i>Cek Transaksi</a>
          </div>
          <div class="compare-price">
            <a href="./Banding Harga/Compare.html"><span class="material-symbols-outlined">compare_arrows</span>Banding Harga</a>
          </div>
        </div>
      </div>
      <div class="header-content-2">
        <div class="right-content">
          <div class="search-container">
            <button id="searchButton"><i class="material-icons">search</i></button>
          </div>
          <div class="language-selector">
            <select id="languageSelect" onchange="changeLanguage()">
              <option value="id">ID</option>
              <option value="en">Eng</option>
            </select>
          </div>
          <div class="auth-links">
            <?php if (isset($_SESSION['user_name'])): ?>
              <div class="dropdown">
                <button class="profileButton">Selamat datang, <?php echo htmlspecialchars($_SESSION['user_name']); ?></button>
                <div class="dropdown-content">
                  <a href="./login_coba/logout.php">Keluar</a>
                </div>
              </div>
            <?php else: ?>
              <div class="loginButton" id="loginButtonContainer">
                <a href="./login_coba/login.php" id="loginButton">Masuk</a>
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
