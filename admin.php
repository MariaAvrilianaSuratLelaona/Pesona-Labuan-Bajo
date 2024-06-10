<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <link rel="item" href="item/Labuan Bajo 2.jpeg" />
  <link rel="stylesheet" href="css/admin.css" />
  <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin Labuan Bajo</title>
</head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <i class="bx bx-category"></i>
      <span class="logo_name">Labuan Bajo</span>
    </div>
    <ul class="nav-links">
      <li>
        <a href="#" class="active">
          <i class="bx bx-grid-alt"></i>
          <span class="links_name">Dashboard</span>
        </a>
      </li>
      <li>
        <a href="categories/categories.php">
          <i class="bx bx-box"></i>
          <span class="links_name">Categories</span>
        </a>
      </li>
      <li>
        <a href="transaction/transaction.php">
          <i class="bx bx-list-ul"></i>
          <span class="links_name">Transaction</span>
        </a>
      </li>
      <li>
        <a href="logout.php">
          <i class="bx bx-log-out"></i>
          <span class="links_name">Log out</span>
        </a>
      </li>
    </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class="bx bx-menu sidebarBtn"></i>
      </div>
      <div class="profile-details">
        <span class="admin_name">Admin Labuan Bajo</span>
      </div>
    </nav>
    <div class="home-content">
      <h2 id="text">
        <?php
        session_start();
        if (isset($_SESSION['username'])) {
          echo $_SESSION['username'];
        } else {
          echo "Guest";
        }
        ?>
      </h2>
      <h3 id="date"></h3>
      <p>Labuan Bajo : Wisata Surga Tersembunyi di Nusa Tenggara Timur jadi pilihan untuk menghabiskan waktu liburan berharga anda.</p>
    </div>
  </section>

  <script>
    let sidebar = document.querySelector(".sidebar");
    let sidebarBtn = document.querySelector(".sidebarBtn");

    // Toggle sidebar visibility
    sidebarBtn.onclick = function() {
      sidebar.classList.toggle("active");
      if (sidebar.classList.contains("active")) {
        sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
      } else {
        sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
      }
    };

    // Update the date and time
    function updateDateTime() {
      const months = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
      const days = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"];
      let date = new Date();
      let jam = date.getHours();
      let tanggal = date.getDate();
      let hari = days[date.getDay()];
      let bulan = months[date.getMonth()];
      let tahun = date.getFullYear();
      let m = checkTime(date.getMinutes());
      let s = checkTime(date.getSeconds());
      document.getElementById("date").innerHTML = `${hari}, ${tanggal} ${bulan} ${tahun}, ${jam}:${m}:${s}`;
    }

    // Add a leading zero to single digit numbers
    function checkTime(i) {
      return i < 10 ? "0" + i : i;
    }

    // Set the greeting message based on the current time
    function setGreeting() {
      let date = new Date();
      let jam = date.getHours();
      let greeting = "Selamat Malam,";
      if (jam >= 4 && jam <= 10) {
        greeting = "Selamat Pagi,";
      } else if (jam >= 11 && jam <= 14) {
        greeting = "Selamat Siang,";
      } else if (jam >= 15 && jam <= 18) {
        greeting = "Selamat Sore,";
      }
      document.getElementById("text").insertAdjacentText("afterbegin", greeting);
    }

    // Initialize the page on load
    window.onload = function() {
      setGreeting();
      updateDateTime();
      setInterval(updateDateTime, 1000); // Update time every second
    };
  </script>

</body>
</html>
