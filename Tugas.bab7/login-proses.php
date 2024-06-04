<?php 

include 'koneksi.php';

if (isset($_POST['login'])) {
    $requestUsername = $_POST['username'];
    $requestPassword = $_POST['password'];

    // Menggunakan prepared statement untuk menghindari SQL injection
    $stmt = mysqli_prepare($koneksi, "SELECT username, password FROM tb_pengunjung WHERE username = ?");
    mysqli_stmt_bind_param($stmt, "s", $requestUsername);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_bind_result($stmt, $nama_pengunjung, $hashed_password);
    mysqli_stmt_fetch($stmt);

    // Memeriksa apakah ada hasil
    if ($nama_pengunjung) {
        // Verifikasi password
        if (password_verify($requestPassword, $hashed_password)) {
            session_start();
            $_SESSION['username'] = $nama_pengunjung;
            header('Location: admin.php');
            exit();
        } else {
            echo "
            <script>
                alert('Email atau password Anda salah, silakan coba lagi');
                window.location = 'login.php';
            </script>
            ";
        }
    } else {
        echo "
        <script>
            alert('Email atau password Anda salah, silakan coba lagi');
            window.location = 'login.php';
        </script>
        ";
    }

    // Menutup statement
    mysqli_stmt_close($stmt);
}

// Menutup koneksi
mysqli_close($koneksi);

?>
