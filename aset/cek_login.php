<?php
session_start();
include "config/koneksi.php";
if(isset($_POST['login'])){
	$username = $_POST['username'];
	$password = $_POST['pass'];
if(empty($username)){
	echo "<script type='text/javascript'>
			onload =function(){
			alert('Username belum diisi');
			}
			</script>";
}
elseif(empty($password)){
	echo "<script type='text/javascript'>
			onload =function(){
			alert('Password belum diisi');
			}
			</script>";
} 
else{
	$query = "SELECT * FROM user WHERE username = '$username'";
	$hasil = mysql_query($query);
	$data = mysql_fetch_array($hasil);
 
	if ($password == $data['password']){
		header("location:menu.php");
		$_SESSION['username'] = $data['username'];
	}
	else{
	echo "<script type='text/javascript'>
		onload =function(){
		alert('Username atau password salah. Ulangi kembali');
		}
		</script>";
	}
}
}
?>