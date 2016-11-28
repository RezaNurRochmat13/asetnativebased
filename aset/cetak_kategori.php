<?php
include('header.php');
include "config/koneksi.php";
include "datediff.php";
error_reporting(E_ALL ^ (E_NOTICE));
function format_angka($angka) {
    $frmt = number_format($angka, 2, ',', '.');
    return $frmt;
}

?>  
<script language="JavaScript">
var gAutoPrint = true; // Tells whether to automatically call the print function

function printSpecial()
{
if (document.getElementById != null)
{
var html = '<HTML>\n<HEAD>\n';

if (document.getElementsByTagName != null)
{
var headTags = document.getElementsByTagName("head");
if (headTags.length > 0)
html += headTags[0].innerHTML;
}

html += '\n</HE>\n<BODY>\n';

var printReadyElem = document.getElementById("printReady");

if (printReadyElem != null)
{
html += printReadyElem.innerHTML;
}
else
{
alert("Could not find the printReady function");
return;
}

html += '\n</BO>\n</HT>';

var printWin = window.open("","printSpecial");
printWin.document.open();
printWin.document.write(html);
printWin.document.close();
if (gAutoPrint)
printWin.print();
}
else
{
alert("The print ready feature is only available if you are using an browser. Please update your browswer.");
}
}
</script>
<div id="content">                
    <div class="container-fluid outer">
        <div class="row-fluid">                        
            <div class="span12 inner">                           
                <div class="row-fluid">
                    <div class="span12">
                        <div class="box">
                            <header>
                                <div class="icons"><i class="icon-book icon-large"></i></div>
                                <h5 style="weight:bold">Laporan Data Inventaris dan Aset Kategori <?php
                                    switch ($_GET['id']) {
                                        case 1 : echo ("Hardware");
                                            break;
                                        case 2 : echo ("Software");
                                            break;
                                        case 3 : echo ("Peralatan Kantor");
                                            break;
                                        case 4 : echo ("Bangunan");
                                            break;
                                        case 5 : echo ("Kendaraan");
                                            break;
                                    }
                                    ?></h5>
<?php $sid = $_GET['id']; ?>
                            </header>
                            <div id="collapse4" class="body">
								<ul class="breadcrumb">
									<li><a href="menu.php">Home</a> <span class="divider"><i class="icon-chevron-right"></i></span></li>
									<li class="active">List Data</li>
								</ul>
										<div class="accordion-group">
                                        <table class="tableluar" border="0" width="940px">
                                         <tr>
                                            <form action="cetak_kategori.php?id=<?php echo $_GET['id'];?>" method="post">
                                            <td width="20%">Status</td>
                                            <td>
                                                <select name="cari_status" style="width:150px;margin-top:10px">
                                                
                                                        <option value="" selected>--Pilih Status--</option>
                                                        <option value="Baik">Baik</option>
                                                        <option value="Cukup Baik">Cukup Baik</option>
                                                        <option value="Rusak">Rusak</option>
                                                        <option value="Hilang">Hilang</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="20%">PIC</td>
                                            <td>
                                                <input type="text" name="pic" id="pic">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>&nbsp;</td>
                                            <td>
                                            <button class="btn"><i class="icon icon-search icon-mini"></i> Cari</button>
                                            </td>
                                            </form>
                                        </tr>
                                        </table>
                                        </div>
                                        <br/>
										<div class="accordion-group" >
                                        <a href="print.php?print=cetak_kategori_priview&&id=<?php echo $_GET['id'];?>&&status=<?php echo $_POST['cari_status'];?>&&pic=<?php echo $_POST['pic'];?>" target="_blank"><button class="btn"><img src="images/cetak.png"> Cetak</button></a>
                                        <a href="export/export.php?id=<?php echo $_GET['id'];?>"><button class="btn"><img src="images/button-excel.gif"> Export</button></a><br>
                                    <div class="modal-body" style="max-width:100%">
										<table class="table table-bordered table-condensed table-hover table-striped" style="width:1200px">
                                            <thead>
                                                <tr>
                                                    <th >No.</th>
                                                    <th >ID Aset</th>
                                                    <th >Kategori</th>
                                                    <th >Nama Aset</th>
                                                    <th >Detail</th>
                                                    <th >Tanggal Pengadaan</th>
                                                    <th >Harga Perolehan</th>
                                                    <th >Status</th>
                                                    <th >PIC</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $nomer = 1;
                                                /* MEMBUAT VARIABEL PERHITUNGAN JUMLAH */
                                                $jml_perolehan = 0;
                                                /* menampilkan database */
                                                $tampil = mysql_query("SELECT * FROM barang b LEFT JOIN kategori k ON  b.id_kategori = k.id_kategori 
												   WHERE k.id_kategori='$_GET[id]' and status like '%$_POST[cari_status]%' and p_i_C like '%$_POST[pic]%' ");
                                               
                                                while ($data = mysql_fetch_array($tampil)) {
                                                    ?>
                                                    <tr>
                                                        <td width="3%" align="center"><?php echo $nomer; ?></td>
                                                        <td width="6%" align="center"><?php echo $data['id_aset']; ?></td>
                                                        <td width="10%" align="left"><?php echo $data['nama_kategori']; ?></td>
                                                        <td width="18%"><a href="detil_barang.php?id=<?php echo $data['id_barang']; ?>"><?php echo $data['nama_barang']; ?></a></td>
                                                        <td width="25%"><?php echo $data['detil_barang']; ?></td>
														<td width="8%"align="center"><?php echo $data['tanggal_pengadaan']; ?></td>
                                                        <td width="8%"><?php echo format_angka($data['harga_perolehan']); ?></td>
														<td width="8%"><?php echo $data['status']; ?></td>
													    <td width="18%"><?php echo $data['p_i_c']; ?></td>
                                                   </tr>
    <?php
    $nomer++;
}
?>
                                            </tbody>
                                        </table>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
              
            </div>              
        </div>                   
    </div>               
</div>
<div id="push"></div>
<?php include('footer.php'); ?>