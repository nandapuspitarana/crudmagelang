<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Tambah users</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<a href="add.php">Tambah Data</a> <br/>
	<form action="add.php" method="POST">
		<label for="nama">Nama</label>
		<input type="text" name="nama"> <br/>

		<label for="email">Email</label>
		<input type="text" name="email"> <br/>

		<label for="password">Password</label>
		<input type="password" name="password"> <br/>

		<label for="alamat">Alamat</label>
		<input type="text" name="alamat"> <br/>

		<input type="submit" name="submit" value="Simpan">
	</form>
	<a href="index.php">home</a> <br/>
</body>
</html>

<?php 
	include_once("config.php");
	include_once("helper.php");

	if(isset($_POST['submit'])) {
		$nama = filterData($_POST['nama']);
		$email = filterData($_POST['email']);
		$password = filterData(md5($_POST['password']));
		$alamat = filterData($_POST['alamat']);

		mysqli_query($mysqli, "INSERT INTO users(email, password, nama, alamat) VALUES('$email','$password','$nama','$alamat')");

		header("Location:index.php");
	}
 ?>