<?php
	session_start();
	//menghapus semua sesi
	session_destroy();
	header('location:index.php');
 	?>