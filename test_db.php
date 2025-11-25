<?php
$koneksi = mysqli_connect('localhost', 'root', '', 'stok_barang');
if ($koneksi) {
    echo "✅ Koneksi database berhasil!";
} else {
    echo "❌ Gagal koneksi: " . mysqli_connect_error();
}
?>
