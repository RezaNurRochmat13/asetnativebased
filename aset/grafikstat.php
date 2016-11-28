<?php

//koneksi database
include "config/koneksi.php";

include "config/koneksi.php";
include("config/class/FusionCharts_Gen.php");

?>
<html>
  <head>
    <title>First Chart Using FusionCharts PHP Class</title>
    <script language='javascript' src='assets/js/FusionCharts.js'></script>
  </head>
  <body>

  <?php
  # Include FusionCharts PHP Class
  # Create object for Column 3D chart
  $FC = new FusionCharts("Bar2D","900","450");

  # Setting Relative Path of chart swf file.
  $FC->setSwfPath("Charts/");

  # Store chart attributes in a variable
  $strParam="caption=Grafik Jumlah Inventaris Berdasarkan Status Aset";

  # Set chart attributes
  $FC->setChartParams($strParam);
  
  $kategori = mysql_query("SELECT nama_status FROM status");
  //$tracking = mysql_query("SELECT Nama_Karyawan FROM master_karyawan WHERE Kode_Nama_Cabang='SRJ' AND Category_Tracking='sales'");
while ($r_kat = mysql_fetch_array($kategori)){
	
	$id_kat = $r_kat['nama_status'];
	$kat = $r_kat['nama_status'];

	$counter1 = 0;


	    	
			 //$total = mysql_num_rows(mysql_query("SELECT IdKat,TglTerjual FROM penjualan_buku WHERE IdKat='$kat' AND LEFT(TglTerjual,4)='2012' AND  MID(TglTerjual,6,2)='02'"));
			 $total = mysql_query("SELECT status, nama_barang FROM barang WHERE status='$id_kat'");
			 
			 $counter1++;
    		

	//$persentase = ($total!=0 || $review !=0)?($review / $total) *100:0;
	$total = mysql_num_rows($total);
	

  # add chart values and category names
  $FC->addChartData("$total","name=$kat");
 
}
    # Render Chart
    $FC->renderChart();
  ?>

  </body>
</html>
