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
									<form action="statistik.php" method="post">
									<td>
										<select name="pencarian" style="width:150px;">
												<option value="" selected>--Pilih Status--</option>
													<option value="Baik">Baik</option>
													<option value="Cukup Baik">Cukup Baik</option>
													<option value="Rusak">Rusak</option>
													<option value="Hilang">Hilang</option>
								
										</select>
									<button class="btn btn-success"><i class="icon icon-search"></i></button>
									</td>
									</form>
									</tr>
									</table>
									
									
									
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