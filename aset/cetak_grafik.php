<?php
include "config/koneksi.php";

include "statistik.php";
include "config/FCExporter_SVG2ALL.php";
include("config/class/FusionCharts_Gen.php");
$filename = 'report_'.date('d-m-Y');
header("Content-Type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=".$filename.".xls");
header("Pragma: no-cache");
header("Expires: 0");


$status=$_POST['status'];
$bulan=$_POST['bulan'];
$tahun=$_POST['tahun'];
$filter=$_POST['filter'];
?>
<html>
  <head>
    <script language='javascript' src='assets/js/FusionCharts.js'></script>
     <script language='javascript' src='assets/js/FusionChartsExportComponent.js'></script>
  </head>
  <body>

  <?php
  # Include FusionCharts PHP Class
  # Create object for Column 3D chart
  $FC = new FusionCharts("column2D","600","300","0","1");
  # Setting Relative Path of chart swf file.
  $FC->setSwfPath("Charts/");

  # Store chart attributes in a variable
  
 //$strParam="caption=Grafik Jumlah Inventaris dan Aset Berdasarkan Kategori ";
  if ($filter == "All" or $filter == "") {
    $strParam="caption=Grafik Jumlah Aset keseluruhan ; exportEnabled=1;exportHandler=ExportChart/index.php ; exportAtClient=0 ; exportAction=download ; exportTargetWindow=_blank ; exportFileName=MyFileName ";
  }
  else 
  {
    if ($bulan == "-01-") {
      $bulan = "January";
    }
     $strParam="caption=Grafik Jumlah Aset $filter dari status barang $status sampai pada bulan $bulan tahun $tahun ; exportEnabled=1;exportHandler=FCExporter_SVG2ALL.php ; exportAtClient=0 ; exportAction=download ; exportTargetWindow=_blank ; exportFileName=MyFileName ";
  }
  # Set chart attributes
  $FC->setChartParams($strParam);
 
  $kategori = mysql_query("SELECT id_kategori, nama_kategori FROM kategori");
  //$tracking = mysql_query("SELECT Nama_Karyawan FROM master_karyawan WHERE Kode_Nama_Cabang='SRJ' AND Category_Tracking='sales'");
while ($r_kat = mysql_fetch_array($kategori)){
  
  $id_kat = $r_kat['id_kategori'];
  $kat = $r_kat['nama_kategori'];

  $counter1 = 0;


        
       //$total = mysql_num_rows(mysql_query("SELECT IdKat,TglTerjual FROM penjualan_buku WHERE IdKat='$kat' AND LEFT(TglTerjual,4)='2031' AND  MID(TglTerjual,6,2)='02'"));
       //$total = mysql_query("SELECT id_kategori, nama_barang FROM barang WHERE id_kategori='$id_kat' and status like '%$_POST[status]%' and tanggal_pengadaan like '%$_POST[bulan]%' ");
  
  if ($filter == "All")
  {
    $total = mysql_query("SELECT id_kategori, nama_barang FROM barang WHERE id_kategori='$id_kat' and status like '%$_POST[status]%' and tanggal_status BETWEEN '2006-01-01' and  '$_POST[tahun]$_POST[bulan]31' ");
  }
  elseif ($filter == "Hardware") {
    $total = mysql_query("SELECT id_kategori, nama_barang FROM barang WHERE id_kategori='$id_kat' and status like '%$_POST[status]%' and tanggal_status BETWEEN '2006-01-01' and  '$_POST[tahun]$_POST[bulan]31' and id_kategori = 1 ");    
  }
  elseif ($filter == "PK") {
    $total = mysql_query("SELECT id_kategori, nama_barang FROM barang WHERE id_kategori='$id_kat' and status like '%$_POST[status]%' and tanggal_status BETWEEN '2006-01-01' and  '$_POST[tahun]$_POST[bulan]31' and id_kategori = 3 ");    
  }
  elseif ($filter == "PLHD") {
    $total = mysql_query("SELECT id_kategori, nama_barang FROM barang WHERE id_kategori='$id_kat' and status like '%$_POST[status]%' and tanggal_status BETWEEN '2006-01-01' and  '$_POST[tahun]$_POST[bulan]31' and id_kategori = 1 and nama_barang  not like '%PC%' and nama_barang not like '%Laptop%'");    
  }
  elseif ($filter == "PKL") {
    $total = mysql_query("SELECT id_kategori, nama_barang FROM barang WHERE id_kategori='$id_kat' and status like '%$_POST[status]%' and tanggal_status BETWEEN '2006-01-01' and  '$_POST[tahun]$_POST[bulan]31' and id_kategori = 3 and nama_barang not like '%Meja%' and nama_barang not like '%Kursi%'");    
  }
  elseif ($filter == "Laptop") {
    $total = mysql_query("SELECT id_kategori, nama_barang FROM barang WHERE id_kategori='$id_kat' and status like '%$_POST[status]%' and tanggal_status BETWEEN '2006-01-01' and  '$_POST[tahun]$_POST[bulan]31' and id_kategori = 1 and nama_barang like '%Laptop%'");
  }
  elseif ($filter == "PC") {
    $total = mysql_query("SELECT id_kategori, nama_barang FROM barang WHERE id_kategori='$id_kat' and status like '%$_POST[status]%' and tanggal_status BETWEEN '2006-01-01' and  '$_POST[tahun]$_POST[bulan]31' and id_kategori = 1 and nama_barang like '%PC%'");
  }
  elseif ($filter == "Meja"){
    $total = mysql_query("SELECT id_kategori, nama_barang FROM barang WHERE id_kategori='$id_kat' and status like '%$_POST[status]%' and tanggal_status BETWEEN '2006-01-01' and  '$_POST[tahun]$_POST[bulan]31' and id_kategori = 3 and nama_barang like '%Meja%'");    
  }
  elseif ($filter == "Kursi"){
    $total = mysql_query("SELECT id_kategori, nama_barang FROM barang WHERE id_kategori='$id_kat' and status like '%$_POST[status]%' and tanggal_status BETWEEN '2006-01-01' and  '$_POST[tahun]$_POST[bulan]31' and id_kategori = 3 and nama_barang like '%Kursi%'");    
  }
  elseif ($filter == "total" and $status != "total" and $bulan != "total" and $tahun != "total"){
  $total = mysql_query("SELECT id_kategori, nama_barang FROM barang WHERE id_kategori='$id_kat' and status like '%$_POST[status]%' and tanggal_status BETWEEN '2006-01-01' and  '$_POST[tahun]$_POST[bulan]31' "); 
  }
  else
  {
    $total = mysql_query("SELECT id_kategori, nama_barang FROM barang WHERE id_kategori='$id_kat' and status like '%$_POST[status]%' and tanggal_status like '%$_POST[bulan]%' ");
  }
    
       $counter1++;
        

  //$persentase = ($total!=0 || $review !=0)?($review / $total) *100:0;
  $total = mysql_num_rows($total);
  

  # add chart values and category names
  $FC->addChartData("$total","name=<a href='jmlaset.php?id=$id_kat'>$kat</a>");
 
}
    # Render Chart
    $FC->renderChart();

  ?>

  </body>
</html>
<?php
exit()
?>