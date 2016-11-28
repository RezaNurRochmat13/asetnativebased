<?php
include 'config/koneksi.php';
$status=$_POST['status'];
$bulan=$_POST['bulan'];
$tahun=$_POST['tahun'];
$filter=$_POST['filter'];

$tahunbulan = $tahun.$bulan;

$tahunbulansekarang = date("m");
$tahunbulansekarangakhir = "-"+$tahunbulansekarang+"-";

if ($status == '')
{

}
else
{
	$q = mysql_query("SELECT count('id_barang') as total from barang where tanggal_pengadaan like '%$tahunbulan%' and status like '%$status%' order by tanggal_pengadaan"); //choose the city from indonesia only

	while ($row1 = mysql_fetch_array($q)){
	echo "<h5>Total Penambahan Aset=$row1[total]</h5>";
	}
}

//$today = date("Y-m");  
//echo $today;	
echo $bulan;


?>