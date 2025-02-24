<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = htmlspecialchars($_POST['nama']);
    $rw = htmlspecialchars($_POST['rw']);
    $alamat = htmlspecialchars($_POST['alamat']);
    $email = htmlspecialchars($_POST['email']);

    // Cek apakah RW adalah 08
    if ($rw != 8) {
        echo "<script>alert('Maaf, pendaftaran hanya untuk warga RW 08.'); window.location.href='pendaftaran.php';</script>";
        exit();
    }

    // Menampilkan data pendaftaran
    echo "<h2>Pendaftaran Berhasil</h2>";
    echo "<p>Nama: $nama</p>";
    echo "<p>RW: $rw</p>";
    echo "<p>Alamat: $alamat</p>";
    echo "<p>Email: $email</p>";
    echo "<br><a href='index.php'>Kembali ke Beranda</a>";
} else {
    echo "<script>alert('Akses tidak diizinkan!'); window.location.href='pendaftaran.php';</script>";
}
?>
