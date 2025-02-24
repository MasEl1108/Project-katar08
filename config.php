<?php
// RW yang diperbolehkan untuk mendaftar
$rw_diperbolehkan = "08"; 

// Fungsi untuk mengecek apakah pendaftar berasal dari RW 08
function cekRW($rw) {
    global $rw_diperbolehkan;
    return trim($rw) === $rw_diperbolehkan;
}
?>
