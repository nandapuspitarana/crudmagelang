<?php 
	include_once("config.php");

	$id = $_GET['id'];

	$query = mysqli_query($mysqli, "SELECT * FROM users WHERE id=$id");

	$results = mysqli_fetch_assoc($query);

 ?>

 	<form action="proses-update.php" method="POST">
		<input type="hidden" value="<?php echo $results['id'] ?>" name="id">

 		<label for="nama">Nama</label>
		<input type="text" value="<?php echo $results['nama'] ?>" name="nama"> <br/>

		<label for="email">Email</label>
		<input type="text" value="<?php echo $results['email'] ?>" name="email"> <br/>

		<label for="password">Password</label>
		<input type="password" value="<?php echo $results['password'] ?>" name="password"> <br/>

		<label for="alamat">Alamat</label>
		<input type="text" value="<?php echo $results['alamat'] ?>" name="alamat"> <br/>

		<input type="submit" name="submit" value="Simpan">
 	</form>
