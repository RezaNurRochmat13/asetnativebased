<?php
//memulai session
	session_start();
	//koneksi
	$server='localhost';
	$user_db='root';
	$sandi_db='';
	$database='inventarisz';
	$konek=mysql_connect($server,$user_db,$sandi_db);
	if(!$konek) die(mysql_error());
	mysql_select_db($database) or die(mysql_error());
	//waktu sekarang GMT+7
	$waktu=time()+25200;
	//waktu timeout (detik)
	$expired=1800;
	$username=$_POST['username'];
	$password=$_POST['password'];
	//cek kecocokan username dan sandi
	$query=mysql_query("select username,password from user where username='$username' and password='$password'") or die(mysql_error());
	//jika cocok,user akan di arahkan ke admin.php
	if(mysql_num_rows($query) != 0)
	{//membuat sesi user
	$_SESSION['username']=$username;
	$_SESSION['password']=$password;
	//membuat sesi timeout
	$_SESSION['timeout']=$waktu+$expired;
	header('location:menu.php');
	}
	//jika tidak,user akan di kembalikan ke form login.php
	else{
	header('location:index.php');}
	mysql_close($konek);
	?>