<?php
include '../koneksi.php';
$id = $_GET['id'];
$result = mysqli_query($mysqli, "DELETE FROM teknisi WHERE id_teknisi=$id");

echo "<script>window.location.href='petugas.php'</script>";
?>