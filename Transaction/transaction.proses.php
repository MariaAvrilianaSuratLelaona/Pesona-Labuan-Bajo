<?php
include '../koneksi.php';

if (isset($_POST['simpan'])) {
    $nama = $_POST['detail-nama'];
    // $gender = $_POST['detail-gender'];
    $alamat = $_POST['detail-alamat'];
    // $email = $_POST['detail-email'];
    $nomor = $_POST['detail-nomor'];
    $destinasi = $_POST['detail-destinasi'];
    $harga = $_POST['detail-harga'];
    // $tanggal = date('Y-m-d');
    // var_dump($_POST);
    // die();

    $sql = "INSERT INTO tb_pemesanan VALUES(null, '$nama','$alamat', '$nomor', '$destinasi','$harga' )";

    if (empty($nama) || empty($nomor) || empty($harga)||  empty($destinasi) ||  empty($alamat)) {
        echo "
            <script>
                alert('Pastikan Anda Mengisi Semua Data');
                window.location = '../index.php';
            </script>
        ";
    } elseif (mysqli_query($koneksi, $sql)) {
        echo "  
            <script>
                alert('Transaction Berhasil');
                window.location = '../index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Terjadi Kesalahan');
                window.location = '../index.php';
            </script>
        ";
    }
} else {
    header('location: ../index.php');
}
