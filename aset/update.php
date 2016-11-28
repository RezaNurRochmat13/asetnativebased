<?php
 include('header.php');
 include "config/koneksi.php";
?>
<div id="content">
 <div class="container-fluid outer">
  <div class="row-fluid">
   <div class="span12 inner">
    <div class="row-fluid">
     <div class="span12">
      <div class="box">
       <header>
       <div class="icons"><i class="icon-edit icon-large"></i></div>
       <h5>Edit Data</h5>
       </header>
        <div id="collapseOne" class="accordion-body collapse in body">
		<ul class="breadcrumb">
			<li><a href="menu.php">Home</a> <span class="divider"><i class="icon-chevron-right"></i></span></li>
			<?php
			$id_kat=$_GET['id_kat'];
			if($id_kat=="1"){
			?>
			<li><a href="tampil_kategori.php?id=1">List Data</a> <span class="divider"><i class="icon-chevron-right"></i></span></li>
			<?php
			}
			elseif($id_kat=="2"){
			?>
			<li><a href="tampil_kategori.php?id=2">List Data</a> <span class="divider"><i class="icon-chevron-right"></i></span></li>
			<?php
			}
			elseif($id_kat=="3"){
			?>
			<li><a href="tampil_kategori.php?id=3">List Data</a> <span class="divider"><i class="icon-chevron-right"></i></span></li>
			<?php
			}
			elseif($id_kat=="4"){
			?>
			<li><a href="tampil_kategori.php?id=4">List Data</a> <span class="divider"><i class="icon-chevron-right"></i></span></li>
			<?php
			}
			elseif($id_kat=="5"){
			?>
			<li><a href="tampil_kategori.php?id=5">List Data</a> <span class="divider"><i class="icon-chevron-right"></i></span></li>
			<?php
			}
			else{
			?>
			<li><a href="tampil_aset.php">List Data</a> <span class="divider"><i class="icon-chevron-right"></i></span></li>
			<?php
			}
			?>
			
			<li class="active">Edit</li>
		</ul>
	 <?php $idbarang=$_GET['id']; ?>
         <form name="form" enctype="multipart/form-data" class="form-horizontal" id="block-validate" action="aksiForm.php?act=edit&idbarang" method="POST">
         <?php $idbarang = $_GET['id'];
	 $tampil = mysql_query("SELECT * FROM barang WHERE id_barang ='$idbarang'") or die("gagal melakukan query") ;
         $data = mysql_fetch_array($tampil);?>
	<div class="accordion-group">
	<table class="tableluar">
	<tr>
	<td>
	 <div class="control-group">
         <label class="control-label">Nama Aset</label>
	 <input type="hidden" name="idbarang" value="<?php echo $idbarang;?>">
          <div class="controls">
          <input type="text" id="namabarang" name="namabarang" style="width:250px" value="<?php echo $data['nama_barang'];?>"/>
          </div></div><br>
	 <div class="control-group">
          <label class="control-label">Detail Aset</label>
          <div class="controls">
          <textarea id="detilbarang" name="detilbarang" cols="65" rows="6"><?php echo $data['detil_barang'];?> </textarea> 
          </div></div><br>
	 <div class="control-group">
          <label class="control-label">Nomer Aset</label>
	 <div class="controls">
	 <?php
	 $kata=$data['id_aset'];
	 $hitung=strlen($kata);
	 if($hitung==8){
            $namafile= substr($kata,5,3);
	 }
         elseif($hitung==9){
            $namafile= substr($kata,6,3);
	 }
	//Fungsi diatas untuk menampilkan urutan id aset
	?>
        <input type="text" id="idaset" name="idaset" value="<?php echo $namafile;?>" style="width:80px"/>
        </div></div><br>
	<div class="control-group">
         <label class="control-label">Kategori</label>
         <div class="controls">
  	 <select name="idkategori" selected="<?php echo $data['id_kategori'];?>" style="width:150px">
	 <?php $kategori=array("","Hardawre","Software","Peralatan Kantor", "Bangunan", "Kendaraan");
	 for($i=1;$i<=5;$i++){
	 if($data['id_kategori']==$i){
	 echo "<option value=".$i." selected>".$kategori[$i]."</option>";
	 }
	 else{
	 echo "<option value=".$i.">".$kategori[$i]."</option>";
	 }}
	?>
	</select>
        </div></div><br>
         <div class="control-group">
         <label class="control-label">Tanggal Perolehan</label>
         <div class="controls">
	<input type="Text" id="tanggal" name="tanggal" maxlength="25" size="15" value=<?php echo $data['tanggal_pengadaan'];?>> <a href="javascript:NewCssCal('tanggal','yyyymmdd')">
	<img src="datepicker/images/cal.gif" width="16" height="16" alt="pick a date"></a>
	</div></div><br>
	<div class="control-group">
        <label class="control-label">Harga Perolehan</label>
         <div class="controls">
         <input type="number" id="hargabarang" name="harga_perolehan" style="width:250px" value="<?php echo $data['harga_perolehan'];?>"/>
         <div style="color:red;font-style:italic">*Masukkan angka(tanpa rupiah)</div>
 	</div></div><br>
	<div class="control-group">
         <label class="control-label">Status</label>
          <div class="controls">
          <select name="status" style="width:150px">
													<?php 
													if($data['status']==""){
													echo "<option value= '' selected></option>
														  <option value= Baik>Baik</option>
														  <option value= Cukup Baik>Cukup Baik</option>
														  <option value= Rusak>Rusak</option>
													      <option value= Hilang>Hilang</option>";
													}
													elseif($data['status']=="Baik"){
													echo "<option value= Baik selected>Baik</option>
														  <option value= Cukup Baik>Cukup Baik</option>
														  <option value= Rusak>Rusak</option>
													      <option value= Hilang>Hilang</option>";
													}
													elseif($data['status']=="Cukup Baik"){
													echo "<option value= Baik>Baik</option>
														  <option value= Cukup Baik selected>Cukup Baik</option>
														  <option value= Rusak>Rusak</option>
													      <option value= Hilang>Hilang</option>";
													}
													elseif($data['status']=="Rusak"){
													echo "<option value= Baik>Baik</option>
														  <option value= Cukup Baik>Cukup Baik</option>
														  <option value= Rusak selected>Rusak</option>
													      <option value= Hilang>Hilang</option>";
													}
													elseif($data['status']=="Hilang"){
													echo "<option value= Baik>Baik</option>
														  <option value= Cukup Baik>Cukup Baik</option>
														  <option value= Rusak>Rusak</option>
													      <option value= Hilang selected>Hilang</option>";
													}
													?>
													</select>
													</div>
												</div>
												<br>
												<div class="control-group">
         <label class="control-label">Tanggal Status</label>
         <div class="controls">
	<input type="Text" id="tanggal_status" name="tanggal_status" maxlength="25" size="15" value=<?php echo $data['tanggal_status'];?>> <a href="javascript:NewCssCal('tanggal_status','yyyymmdd')">
	<img src="datepicker/images/cal.gif" width="16" height="16" alt="pick a date"></a>
	</div></div><br>
												<div class="control-group">
                                                    <label class="control-label">PIC</label>
													
                                                    <div class="controls">
                                                        <input type="text" id="pic1" name="pic1" style="width:250px" value="<?php echo $data['p_i_c'];?>"/>
                                                    </div>
                                                </div>
												</td>
												</tr>
												</table>
												<br>
												<center>
												<input type="submit" value="Simpan" class="btn btn-info">
												<input type=button value=Batal class="btn btn-danger" onclick=self.history.back()>
                                                </center>
												</div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.inner -->
                    </div>
                    <!-- /.row-fluid -->
                </div>
                <!-- /.outer -->
            </div>
            <!-- /#content -->
            <!-- #push do not remove -->
            <div id="push"></div>
<?php include('footer.php');?>