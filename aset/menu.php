<?php
 include "header.php";
 include "config/koneksi.php";
 include "datediff.php";
?>  
<div id="content">
 <div class="container-fluid outer">
  <div class="row-fluid">
   <div class="span12 inner">
    <div class="row-fluid">
     <div class="span12">
      <div class="box">
       <header>
       <div class="icons"><i class="icon icon-large icon-home"></i></div>
       <h5>Beranda</h5>
       </header>
       <div id="collapse4" class="body">
        <table width="100%" align="centered"class= "table-condensed-bordered">
        <tr>
		<ul class="breadcrumb">
			<li><a href="tampil_aset.php?page=1">Data Seluruh Inventaris dan Aset</a> </li>
		</ul>
        <td align="center"><div class="menu accordion-group-menu"><a href="tampil_kategori.php?id=1&&page=1"><img src="images/hardware.png" width="75px" height="75px"><br><br>Hardware</a></div></td>
		<td align="center"><div class="menu accordion-group-menu"><a href="tampil_kategori.php?id=2&&page=1"><img src="images/software.png" width="75px" height="75px"><br><br>Software</div></td>
		<td align="center"><div class="menu accordion-group-menu"><a href="tampil_kategori.php?id=3&&page=1"><img src="images/alat-kantor.png" width="75px" height="75px"><br><br>Peralatan Kantor</div></td>
		<td align="center"><div class="menu accordion-group-menu"><a href="tampil_kategori.php?id=4&&page=1"><img src="images/office.png" width="75px" height="75px"><br><br>Bangunan</div></a></td>
		<td align="center"><div class="menu accordion-group-menu"><a href="tampil_kategori.php?id=5&&page=1"><img src="images/kendaraan.png" width="75px" height="75px"><br><br>Kendaraan</div></td>
		</tr>
		</table>
		<br/>
		<ul class="breadcrumb">
			<li><a href="cetak_kategori_all.php">Laporan Seluruh Iventaris dan Aset</a> </li>
		</ul>
		<table width="100%" align="centered" class= "table-condensed-bordered">
		<tr>
        <td align="center"><div class="menu accordion-group-menu"><a href="cetak_kategori.php?id=1"><img src="images/data-laporan.png" width="75px" height="75px"><br><br>Laporan Hardware</a></div></td>
		<td align="center"><div class="menu accordion-group-menu"><a href="cetak_kategori.php?id=2"><img src="images/data-laporan.png" width="75px" height="75px"><br><br>Laporan Software</div></td>
		<td align="center"><div class="menu accordion-group-menu"><a href="cetak_kategori.php?id=3"><img src="images/data-laporan.png" width="75px" height="75px"><br><br>Laporan Peralatan Kantor</div></td>
		<td align="center"><div class="menu accordion-group-menu"><a href="cetak_kategori.php?id=4"><img src="images/data-laporan.png" width="75px" height="75px"><br><br>Laporan Bangunan</div></a></td>
		<td align="center"><div class="menu accordion-group-menu"><a href="cetak_kategori.php?id=5"><img src="images/data-laporan.png" width="75px" height="75px"><br><br>Laporan Kendaraan</div></td>
		</tr>
        </table>
		<br>
		<ul class="breadcrumb">
			<li><a href="#">Statistik</a> </li>
		</ul>
		<table width="100%" align="centered" class= "table-condensed-bordered">
		<tr>
        <td align="center"><div class="menu accordion-group-menu"><a href="statistik.php"><img src="images/statistik.png" width="75px" height="75px"><br><br>Berdasarkan Kategori</a></div></td>
		<td align="center"><div class="menu accordion-group-menu"><a href="statistik_stat.php"><img src="images/statistik.png" width="75px" height="75px"><br><br>Berdasarkan Status</div></td>
		<td align="center"><div class="menu">&nbsp;</div></td>
		<td align="center"><div class="menu">&nbsp;</div></td>
		<td align="center"><div class="menu">&nbsp;</div></td>
		
		</tr>
        </table>
       </div>
       </form>
      </div>
     </div>
    </div>
   </div>
   <hr>
  </div>             
 </div>                   
</div>                
</div>
<div id="push"></div>
<?php include('footer.php');?>