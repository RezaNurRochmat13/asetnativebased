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
        <div class="icons"><i class="icon-signal"></i> Grafik Jumlah Inventaris dan Aset Berdasarkan Status Aset</div>
       </header>
	   <div id="collapse4" class="body">
	   <ul class="breadcrumb">
		<li><a href="menu.php">Home</a> <span class="divider"><i class="icon-chevron-right"></i></span></li>
		<li class="active">Statistik</li>
	   </ul>
		<div class="accordion-group">
      
          <div class="alert alert-block alert-danger">

	   <?php include "grafikstat.php"; ?>	
   
 </div>
	   </div>
	   </div>
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