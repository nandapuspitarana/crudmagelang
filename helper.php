<?php 
	
	// untuk filtering data agar tag php, js, html tidak terinput.
	function filterData($value){
		return htmlspecialchars(strip_tags($value));
	}
	
 
 ?>