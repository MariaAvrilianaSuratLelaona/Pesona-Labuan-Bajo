<!DOCTYPE html>
<html lang="en">
<head>
  <title>Register</title>
  <link rel="icon" href="Labuan Bajo 2.jpeg" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&family=Roboto:wght@500;700&display=swap" rel="stylesheet"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
  <div class="container">
    <header>
      <nav>
        <div class="logo">
          <img src="Labuan Bajo 2.jpeg" alt="" width="100px"/>
        </div>
        <input type="checkbox" id="click" />
        <label for="click" class="menu-btn">
          <i class="fas fa-bars"></i>
        </label>
        <ul>
          <li><a href="index.html">Home</a></li>
          <li><a href="#">Categories</a></li>
          <li><a href="login.html" class="btn_login">Login</a></li>
        </ul>
       </nav>
      </header>
    <main>
      <div class="center">
         <div class="form-login">
          <h2>Register</h2>
          <form action="register-proses.php" method="post">
            <input class="input" type="email" name="email" id="email"
              placeholder="Enter your email" />
            <input class="input" type="text" name="username" id="username"
              placeholder="Choose a username"/>
            <input class="input" type="password" name="password" id="password"
              placeholder="Create a password" />
            <button type="submit" class="btn_login" name="register" id="register">
              Register
            </button>
          </form>
          <p>Already have an account? <a href="login.html" class="link-register">Login here</a></p>
         </div>
       </div>
    </main>
    <footer>
      <h4>&copy;Labuan Bajo : Wisata Surga Tersembunyi di Nusa Tenggara Timur jadi pilihan untuk menghabiskan waktu liburan berharga anda.</h4>
    </footer>
   </div>

   <script>
    const registerForm = document.getElementById('registerForm');

    registerForm.addEventListener('submit', function(event) {
      event.preventDefault();

      // Get form values
      const email = document.getElementById('email').value;
      const username = document.getElementById('username').value;
      const password = document.getElementById('password').value;

      // You can add further validation here if needed

      // Save data to local storage
      localStorage.setItem('registeredEmail', email);
      localStorage.setItem('registeredUsername', username);
      // Encrypt or hash the password before storing in local storage for security purposes
      localStorage.setItem('registeredPassword', password);

      // Show alert box
      alert('Registrasi Berhasil!!');
    });
  </script>
</body>
</html>
