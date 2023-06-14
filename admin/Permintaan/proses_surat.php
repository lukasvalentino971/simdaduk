<?php
$id = $_GET['id'];

$sql = "UPDATE permintaan_surat SET status='Bisa diambil' WHERE id=$id";

$query = mysqli_query($koneksi, $sql);

if ($query) {
    echo "<script>
        window.location = 'index.php?page=pesan-permintaan';
        </script>";
}
