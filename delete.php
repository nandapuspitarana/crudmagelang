<?php 
	include_once("config.php");
	//untuk mendapatkan id
	$id= $_GET['id'];

	//delete berdasarkan id
	mysqli_query($mysqli, "DELETE FROM users WHERE id=$id");


	//tindakan selanjutkan pergi ke index.php
	header("Location:index.php");

 ?>