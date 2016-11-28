<?php
include "config/koneksi.php";
include "datediff.php";
$act=$_GET['act'];

if ($act=='hapus'){
  mysql_query("DELETE FROM barang WHERE id_barang ='$_GET[id]'");
  header('location:tampil_aset.php');
}
if ($act=='hapus_akun'){
  mysql_query("DELETE FROM user WHERE id ='$_GET[id_akun]'");
  header('location:akun.php');
}

elseif ($act=='input'){
    switch($_POST['idkategori']){
    case 1 : $depan="H";
     break;
    case 2 : $depan="S";
     break;
    case 3 : $depan="PK";
     break;
    case 4 : $depan="B";
     break;
    case 5 : $depan="K";
     break;}
    $harga = $_POST['harga_perolehan'];
	$status = $_POST['status'];
    $pisah_tanggal=explode("-",$_POST['tanggal']);
    $thn_pengadaan=$pisah_tanggal[0];
    $idaset=$depan.$thn_pengadaan.$_POST['id_aset'];
	$cekdata="select id_aset from barang where id_aset='$idaset'"; 
	$ada=mysql_query($cekdata) or die(mysql_error()); 
	if(mysql_num_rows($ada)>0) {
		echo '<script>';
        echo "alert('Error: Data aset sudah terdaftar');";
        echo "window.location='tambahdata.php'";
        echo '</script>';
	}
    elseif($_POST['id_aset']==""){
        echo '<script>';
        echo "alert('Error: Nomor aset belum diisi');";
        echo "window.location='tambahdata.php'";
        echo '</script>';
    }elseif ($_POST['namabarang']=="") {
        echo '<script>';
        echo "alert('Error: Nama aset belum diisi');";
        echo "window.location='tambahdata.php'";
        echo '</script>';
    }else{
    $query1="INSERT INTO barang	(id_barang,
				 id_aset,
				 id_kategori,
				 nama_barang,
				 detil_barang,
				 tanggal_pengadaan,
				 harga_perolehan,
				 status,
				 tanggal_status,
				 p_i_c)
             VALUES('$_POST[id_aset]',
				 '$idaset',
				 '$_POST[idkategori]',
                                 '$_POST[namabarang]',
                                 '$_POST[detilbarang]',
                                 '$_POST[tanggal]',
                                 '$_POST[harga_perolehan]',
								 '$_POST[status]',
								 '$_POST[tanggal_status]',
				 '$_POST[pic1]')";
    mysql_query($query1) or die ("Gagal menyimpan data barang");	
	echo "<script>alert('Data Berhasil Disimpan'); window.location = 'tampil_aset.php'</script>";
	}
}

elseif ($act=='edit'){
    $harga     = $_POST['harga_perolehan'];
    $pisah_tanggal=explode("-",$_POST['tanggal']);
    $thn_pengadaan=$pisah_tanggal[0];
    switch($_POST['idkategori']){
    case 1 : $depan="H";
     break;
    case 2 : $depan="S";
     break;
    case 3 : $depan="PK";
     break;
    case 4 : $depan="B";
     break;
    case 5 : $depan="K";
     break;
}
    $idaset=$depan.$thn_pengadaan.$_POST['idaset'];
    $query1 = "UPDATE barang SET
               id_aset	= '$idaset',
               id_kategori = '$_POST[idkategori]',
               nama_barang = '$_POST[namabarang]',
               detil_barang = '$_POST[detilbarang]',
               tanggal_pengadaan = '$_POST[tanggal]',
               harga_perolehan 	= '$_POST[harga_perolehan]',
			   status = '$_POST[status]',
			   tanggal_status = '$_POST[tanggal_status]',
               p_i_c = '$_POST[pic1]'
            WHERE id_barang = '$_POST[idbarang]'";
    mysql_query($query1)  or die ("Gagal mengupdate data1");
	echo "<script>alert('Data Berhasil Diubah'); window.location = 'tampil_aset.php'</script>";
  }
  
  elseif ($act=='input_akun'){
    $username = $_POST['username'];
	$password = $_POST['password'];
	$cekdata="select username from user where username='$username'"; 
	$ada=mysql_query($cekdata) or die(mysql_error()); 
	if(mysql_num_rows($ada)>0) {
		echo '<script>';
        echo "alert('Error: Username sudah terdaftar');";
        echo "window.location='tambah_akun.php'";
        echo '</script>';
	}
    elseif($_POST['username']==""){
        echo '<script>';
        echo "alert('Error: Username belum diisi');";
        echo "window.location='tambah_akun.php'";
        echo '</script>';
	}
	elseif($_POST['password']==""){
        echo '<script>';
        echo "alert('Error: Password belum diisi');";
        echo "window.location='tambah_akun.php'";
        echo '</script>';
	}
	elseif($_POST['password']!=$_POST['konfirm']){
        echo '<script>';
        echo "alert('Error: Konfirmasi Password tidak sesuai');";
        echo "window.location='tambah_akun.php'";
        echo '</script>';
	}
	else{
    $query1="INSERT INTO user(username, password)
             VALUES('$username', '$password')";
    mysql_query($query1) or die ("Gagal menyimpan data barang");	
	echo "<script>alert('Data Berhasil Disimpan'); window.location = 'akun.php'</script>";
	}
  }
  
  elseif ($act=='edit_akun'){
	$id_akun=$_GET['id_akun'];
	$password=$_POST['password'];
	if($_POST['password']!=$_POST['konfirm']){
        echo '<script>';
        echo "alert('Error: Konfirmasi Password tidak sesuai');";
        echo "window.location='update_akun.php?id_akun=$_GET[id_akun]'";
        echo '</script>';
	}
	else{
    $query1 = "UPDATE user SET password = '$password' WHERE id = '$id_akun'";
    mysql_query($query1)  or die ("Gagal mengupdate password");
	echo "<script>alert('Password Berhasil Diubah'); window.location = 'akun.php'</script>";
	}
  }
?>