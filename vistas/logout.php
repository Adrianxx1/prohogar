<?php
	session_destroy();
	
	if(headers_sent()){
		echo "<script> window.location.href='inventario.php?vista=login'; </script>";
	}else{
		header("Location: inventario.php?vista=login");
	}