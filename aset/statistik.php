<?php
 include "header.php";
 include "config/koneksi.php";
 include "datediff.php";
?>

<?php
// Turn off all error reporting
error_reporting(0);
?>
<script type="text/javascript">
function validasi_input(form){
 if (form.filter.value =="All"){
    alert("Anda belum memilih barang!");
    return (false);
 }
  if (form.bulan.value ==""){
    alert("Anda belum memilih bulan!");
    return (false);
 }
  if (form.bulan.value ==""){
    alert("Anda belum memilih tahun!");
    return (false);
 }
return (true);
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
        <div class="icons"><i class="icon-signal"></i> Grafik Jumlah Inventaris dan Aset Berdasarkan Kategori</div>
       </header>
								<div id="collapse4" class="body">
									<ul class="breadcrumb">
										<li><a href="menu.php">Home</a> <span class="divider"><i class="icon-chevron-right"></i></span></li>
										<li class="active">Statistik</li>
									</ul>
									<div class="accordion-group">
									<table>
									<tr>
									<form action="statistik.php" method="post" onsubmit="return validasi_input(this)">
									<td>
										<select name="filter" style="width:150px;">
												<option value="All" selected>--Nama Barang--</option>
													<option value="Hardware">Hardware</option>
													<option value="PC">-  PC</option>
													<option value="Laptop">-  Laptop</option>
													<option value="PK">Peralatan Kantor</option>
													<option value="Meja">-  Meja</option>
													<option value="Kursi">-  Kursi</option>
													<option value="PLHD">Peralatan Lain HD</option>
													<option value="PKL">Peralatan Kantor Lainnya</option>
													<option value="total">Total</option>
										</select>

										<select name="status" style="width:150px;">
												<option value="" selected>--Pilih Status--</option>
													<option value="Baik">Baik</option>
													<option value="Cukup Baik">Cukup Baik</option>
													<option value="Rusak">Rusak</option>
													<option value="Hilang">Hilang</option>
													
										</select>
											

										<select name="bulan" style="width:150px;">
												<option value="" selected>--Pilih bulan--</option>
													<option value="-01-">Januari</option>
													<option value="-02-">Februari</option>
													<option value="-03-">Maret</option>
													<option value="-04-">April</option>
													<option value="-05-">Mei</option>
													<option value="-06-">Juni</option>
													<option value="-07-">Juli</option>
													<option value="-08-">Agustus</option>
													<option value="-09-">September</option>
													<option value="-10-">Oktober</option>
													<option value="-11-">November</option>
													<option value="-12-">Desember</option>
													
										</select>
										<b>Rekap dari</b>

										<select name="tahun" style="width:150px;">
												<option value="" selected>--Pilih tahun--</option>
													<?php
														include 'config/koneksi.php';
														$q = mysql_query("SELECT distinct year(tanggal_status) as tahun FROM `barang` WHERE tanggal_status >= '2006-01-01' order by tahun asc "); //choose the city from indonesia only

														while ($row1 = mysql_fetch_array($q)){
														  echo "<option value=$row1[tahun]>$row1[tahun]</option>";
														}
														?>
										</select>
										<b>Sampai
										<select name="tahunkedua" style="width:150px;">
												<option value="" selected>--Pilih tahun--</option>
													<?php
														include 'config/koneksi.php';
														$q = mysql_query("SELECT distinct year(tanggal_status) as tahun FROM `barang` WHERE tanggal_status >= '2006-01-01' order by tahun asc "); //choose the city from indonesia only

														while ($row1 = mysql_fetch_array($q)){
														  echo "<option value=$row1[tahun]>$row1[tahun]</option>";
														}
														?>
										</select>




									<button class="btn btn-success"><i class="icon icon-search"></i></button>
									</td>
									</form>
									</tr>
									</table>
									
								
									<div class="alert alert-block alert-danger">
									
									<?php
										include "grafik_anyar.php"; 
										include "coba.php";
									?>
								
									</div>
									
									</div>
			
								</div>
       </form>
      </div>
     </div>
    </div>
   </div>
  </div>             
 </div>                   
</div>                
</div>
<div id="push"></div>
<?php include('footer.php');?>