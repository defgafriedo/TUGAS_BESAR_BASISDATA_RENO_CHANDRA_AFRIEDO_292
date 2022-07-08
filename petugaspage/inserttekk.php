<?php
include '../koneksi.php';
$nama = $_POST['nama'];
$alamat=$_POST['alamat'];
$no=$_POST['no'];
$kontrak = date('Y-m-d', strtotime($_POST['kontrak']));
$result = mysqli_query($mysqli, "INSERT INTO teknisi(nama_teknisi,kontrak_berakhir,no_telp,alamat_teknisi) values('$nama','$kontrak','$no','$alamat')");
echo "<script>alert('berhasil');</script>";
echo "<script>window.location.href='petugas.php'</script>";
	
?>

