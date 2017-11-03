<?php 

	$host = 'localhost';
	$username = 'root';
	$password = '123';
	$database = 'crudmagelang';

	$mysqli = mysqli_connect($host, 
							$username, 
							$password, 
							$database) or die('Not connected to sql');


 ?>