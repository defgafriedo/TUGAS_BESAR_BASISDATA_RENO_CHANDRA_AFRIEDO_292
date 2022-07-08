<?php
// include database connection file
include_once("../koneksi.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
	$id = $_POST['id'];
	$alamat = $_POST['alamat'];
	// update user data
		$result = mysqli_query($mysqli, "UPDATE teknisi SET alamat_teknisi='$alamat'  WHERE id_teknisi=$id");
	
	// Redirect to homepage to display updated user in list
	echo "<script>window.location.href='petugas.php'</script>";
}
?>
<?php
// Display selected user data based on id
// Getting id from url
if(isset($_POST['id'])){
	$id = $_POST['id'];
}
else{
	$id = $_GET['id'];
}


 
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM teknisi where id_teknisi='$id'");
 
while($user_data = mysqli_fetch_array($result))
{
	$nama = $user_data['nama_teknisi'];
	$alamat = $user_data['alamat_teknisi'];
}
?>
<html>
<head>	
	<title>Edit User Data</title>
</head>
 
<body>
	
	<br/><br/>
	
	<form name="update_user" method="post" action="constedit.php">
		<table border="0" align="center">
			
			<tr> 
				<td>nama</td>
				<td><input type="text" value="<?php echo $nama;?>" disabled name="nama"></td>
			</tr>
            <tr> 
				<td>alamat</td>
				<td><input type="text"  value="<?php echo $alamat;?>" name="alamat"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $id;?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
			<tr>
				<td>
				<a href="index.php">Home</a>
				</td>
			</tr>
		</table>
	</form>
</body>
</html>