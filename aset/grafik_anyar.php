<?php
include "config/koneksi.php";
include "fungsi_nama.php";
$status=$_POST['status'];
$bulan=$_POST['bulan'];
$tahun=$_POST['tahun'];
$tahunkedua=$_POST['tahunkedua'];
$filter=$_POST['filter'];
$kondisi="";


if ($status=="")
{
  $kondisi =="";
}
else
{
  $kondisi="dengan kondisi"; 
}

?>

<html>
  <head>
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="http://code.highcharts.com/highcharts.js"></script>
<script src="http://code.highcharts.com/modules/exporting.js"></script>
<script type="text/javascript">
var nama = '<?php echo $filter ?>';
var status = '<?php echo $status ?>';
var bulan = '<?php echo $bulan ?>';
var tahun = '<?php echo $tahun ?>';
var tahunkedua = '<?php echo $tahunkedua ?>';
var kondisi = '<?php echo $kondisi?>';

if(bulan =="-01-"){
  bulan = "Januari";
}
if(bulan =="-02-"){
  bulan = "Februari";
}
if(bulan =="-03-"){
  bulan = "Maret";
}
if(bulan =="-04-"){
  bulan = "April";
}
if(bulan =="-05-"){
  bulan = "Mei";
}
if(bulan =="-06-"){
  bulan = "Juni";
}
if(bulan =="-07-"){
  bulan = "Juli";
}
if(bulan =="-08-"){
  bulan = "Agustus";
}
if(bulan =="-09-"){
  bulan = "September";
}
if(bulan =="-10-"){
  bulan = "Oktober";
}
if(bulan =="-11-"){
  bulan = "November";
}
if(bulan =="-12-"){
  bulan = "Desember";
}

if (tahunkedua == ""){
  textku='Grafik Jumlah Aset'+' '+nama+' '+kondisi+' '+status+' '+bulan+' '+tahun

} else {
  textku='Grafik Jumlah Aset'+' '+nama+' '+kondisi+' '+status+' dari '+bulan+' '+tahun+' sampai '+bulan+' '+tahunkedua
}

  var chart1; // globally available
$(document).ready(function() {
      chart1 = new Highcharts.Chart({
         chart: {
            renderTo: 'container',
            type: 'column',
            spacingBottom: 50,
            spacingTop: 50,
            spacingLeft: 50,
            spacingRight: 50,
            plotBorderWidth: 4,
        width: null,
        height: null
         },   
         title: {
            text: textku
         },
          xAxis: [{
            
          
            categories: ['Kategori Aset']
            
            

            
        }],
     plotOptions: {
bar: {
dataLabels: {
enabled: true 
}
}
},
credits: {
enabled: false
},
tooltip: {
valueSuffix: ' '
},
         yAxis: {

             stackLabels: {
                style: {
                    color: 'black'
                },
                enabled: true,
                verticalAlign: 'bottom',
                y:-50



            }
         },
          plotOptions: {
            column: {
                dataLabels: {
                    enabled: true,
                    verticalAlign: 'bottom' 
                }
            }
        },
              series:             
            [
            <?php 
          include "config/koneksi.php";
          $sql   = "SELECT distinct id_kategori,nama_kategori FROM kategori";
          
          
            $query = mysql_query( $sql )  or die(mysql_error());
            while( $ret = mysql_fetch_array( $query ) ){
              
              $merek=$ret['id_kategori'];
               $merekku=$ret['nama_kategori']; 
              
          
          $tanggalpertama= mysql_query("SELECT tanggal_status from barang where tanggal_status != '0000-00-00' order by tanggal_status ASC LIMIT 1");

             if ($tahunkedua == ""){

              if ($filter == "All")
              {
                 $sql_jumlah   = "SELECT count(id_barang) as jum FROM barang WHERE id_kategori='$merek' and status like '%$_POST[status]%'";
               }
                elseif ($filter == "total") {
                $sql_jumlah   = "SELECT count(id_barang) as jum FROM barang WHERE id_kategori='$merek' and status like '%$_POST[status]%' and tanggal_status BETWEEN '$tanggalpertama' and  '$_POST[tahun]$_POST[bulan]31' ";
               }
               elseif ($filter == "Hardware") {
                 $sql_jumlah   = "SELECT count(id_barang) as jum FROM barang WHERE id_kategori = '$merek' and (nama_barang like '%PC%' or  nama_barang like '%Laptop%') and status like '%$_POST[status]%' and tanggal_status BETWEEN '$tanggalpertama' and  '$_POST[tahun]$_POST[bulan]31'";
               }
               elseif ($filter == "PC") {
                 $sql_jumlah   = "SELECT count(id_barang) as jum FROM barang WHERE id_kategori = '$merek' and nama_barang like '%PC%' and status like '%$_POST[status]%' and tanggal_status BETWEEN '$tanggalpertama' and  '$_POST[tahun]$_POST[bulan]31'";
               }
               elseif ($filter == "Laptop") {
                 $sql_jumlah   = "SELECT count(id_barang) as jum FROM barang WHERE id_kategori = '$merek' and nama_barang like '%Laptop%' and status like '%$_POST[status]%' and tanggal_status BETWEEN '$tanggalpertama' and  '$_POST[tahun]$_POST[bulan]31'";
               }
               elseif ($filter == "PK") {
                 $sql_jumlah   = "SELECT count(id_barang) as jum FROM barang WHERE id_kategori = '$merek' and (nama_barang like '%Meja%' OR nama_barang like '%Kursi%') and status like '%$_POST[status]%' and tanggal_status BETWEEN '$tanggalpertama' and  '$_POST[tahun]$_POST[bulan]31'";
               }
               elseif ($filter == "Meja") {
                 $sql_jumlah   = "SELECT count(id_barang) as jum FROM barang WHERE id_kategori = '$merek' and nama_barang like '%Meja%' and status like '%$_POST[status]%' and tanggal_status BETWEEN '$tanggalpertama' and  '$_POST[tahun]$_POST[bulan]31'";
               }
               elseif ($filter == "Kursi") {
                 $sql_jumlah   = "SELECT count(id_barang) as jum FROM barang WHERE id_kategori = '$merek' and nama_barang like '%Kursi%' and status like '%$_POST[status]%' and tanggal_status BETWEEN '$tanggalpertama' and  '$_POST[tahun]$_POST[bulan]31'";
               }
               elseif ($filter == "PLHD") {
                 $sql_jumlah   = "SELECT count(id_barang) as jum FROM barang WHERE id_kategori = '$merek' and (nama_barang not like '%PC%' OR nama_barang like '%Laptop%') and status like '%$_POST[status]%' and id_kategori like '1' and tanggal_status BETWEEN '$tanggalpertama' and  '$_POST[tahun]$_POST[bulan]31'";
               }
               elseif ($filter == "PKL") {
                 $sql_jumlah   = "SELECT count(id_barang) as jum FROM barang WHERE id_kategori = '$merek' and (nama_barang not like '%Kursi%' OR nama_barang like '%Meja%') and status like '%$_POST[status]%' and id_kategori like '3' and tanggal_status BETWEEN '$tanggalpertama' and  '$_POST[tahun]$_POST[bulan]31'";
               }
               else
               {
                $sql_jumlah   = "SELECT count(id_barang) as jum FROM barang WHERE id_kategori='$merek' and status like '%$_POST[status]%' ";
              }


             } else{

              if ($filter == "All")
              {
                 $sql_jumlah   = "SELECT count(id_barang) as jum FROM barang WHERE id_kategori='$merek' and status like '%$_POST[status]%'";
               }
                elseif ($filter == "total") {
                $sql_jumlah   = "SELECT count(id_barang) as jum FROM barang WHERE id_kategori='$merek' and status like '%$_POST[status]%' and tanggal_status BETWEEN '$_POST[tahun]$_POST[bulan]31' and  '$_POST[tahunkedua]$_POST[bulan]31'";
               }
               elseif ($filter == "Hardware") {
                 $sql_jumlah   = "SELECT count(id_barang) as jum FROM barang WHERE id_kategori = '$merek' and (nama_barang like '%PC%' or  nama_barang like '%Laptop%') and status like '%$_POST[status]%' and tanggal_status BETWEEN '$_POST[tahun]$_POST[bulan]31' and  '$_POST[tahunkedua]$_POST[bulan]31'";
               }
               elseif ($filter == "PC") {
                 $sql_jumlah   = "SELECT count(id_barang) as jum FROM barang WHERE id_kategori = '$merek' and nama_barang like '%PC%' and status like '%$_POST[status]%' and tanggal_status BETWEEN '$_POST[tahun]$_POST[bulan]31' and  '$_POST[tahunkedua]$_POST[bulan]31'";
               }
               elseif ($filter == "Laptop") {
                 $sql_jumlah   = "SELECT count(id_barang) as jum FROM barang WHERE id_kategori = '$merek' and nama_barang like '%Laptop%' and status like '%$_POST[status]%' and tanggal_status BETWEEN '$_POST[tahun]$_POST[bulan]31' and  '$_POST[tahunkedua]$_POST[bulan]31'";
               }
               elseif ($filter == "PK") {
                 $sql_jumlah   = "SELECT count(id_barang) as jum FROM barang WHERE id_kategori = '$merek' and (nama_barang like '%Meja%' OR nama_barang like '%Kursi%') and status like '%$_POST[status]%' and tanggal_status BETWEEN '$_POST[tahun]$_POST[bulan]31' and  '$_POST[tahunkedua]$_POST[bulan]31'";
               }
               elseif ($filter == "Meja") {
                 $sql_jumlah   = "SELECT count(id_barang) as jum FROM barang WHERE id_kategori = '$merek' and nama_barang like '%Meja%' and status like '%$_POST[status]%' and tanggal_status BETWEEN '$_POST[tahun]$_POST[bulan]31' and  '$_POST[tahunkedua]$_POST[bulan]31'";
               }
               elseif ($filter == "Kursi") {
                 $sql_jumlah   = "SELECT count(id_barang) as jum FROM barang WHERE id_kategori = '$merek' and nama_barang like '%Kursi%' and status like '%$_POST[status]%' and tanggal_status BETWEEN '$_POST[tahun]$_POST[bulan]31' and  '$_POST[tahunkedua]$_POST[bulan]31'";
               }
               elseif ($filter == "PLHD") {
                 $sql_jumlah   = "SELECT count(id_barang) as jum FROM barang WHERE id_kategori = '$merek' and (nama_barang not like '%PC%' OR nama_barang like '%Laptop%') and status like '%$_POST[status]%' and id_kategori like '1' and tanggal_status BETWEEN '$_POST[tahun]$_POST[bulan]31' and  '$_POST[tahunkedua]$_POST[bulan]31'";
               }
               elseif ($filter == "PKL") {
                 $sql_jumlah   = "SELECT count(id_barang) as jum FROM barang WHERE id_kategori = '$merek' and (nama_barang not like '%Kursi%' OR nama_barang like '%Meja%') and status like '%$_POST[status]%' and id_kategori like '3' and tanggal_status BETWEEN '$_POST[tahun]$_POST[bulan]31' and  '$_POST[tahunkedua]$_POST[bulan]31'";
               }

             }


               


                 $query_jumlah = mysql_query( $sql_jumlah ) or die(mysql_error());
                 while( $data = mysql_fetch_array( $query_jumlah ) ){
                    $jumlah = $data['jum'];                 
                  } 

                  ?>
                  {

                      name: '<?php echo $merekku; ?>',
                      data: [<?php echo $jumlah; ?>]
                  },

                  <?php } ?>

                
            ]
      });
   });  
</script>
  </head>
  <body>
    <div id='container'></div>    
  </body>
</html>