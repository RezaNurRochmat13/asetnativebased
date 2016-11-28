<?php
      include('header.php');
      include "config/koneksi.php";
	  
	  function format_angka($angka){
	  $frmt=number_format($angka,2,',','.');
      return $frmt;
      }
      ?>
            <div id="content">
                <!-- .outer -->
                <div class="container-fluid outer">
                    <div class="row-fluid">
                        <!-- .inner -->
                        <div class="span12 inner">
                            <div class="row-fluid">
                                <div class="span12">
                                    <div class="box">
                                        <header>
                                            <div class="icons"><i class="icon-edit icon-large"></i></div>
                                            <h5>Detail Aset</h5>
                                        </header>
                                        <div id="collapseOne" class="accordion-body collapse in body">
											<ul class="breadcrumb">
												<li><a href="menu.php">Home</a> <span class="divider"><i class="icon-chevron-right"></i></span></li>
												<?php
												if($_GET['kat']=='null'){
												?>
												<li><a href="tampil_aset.php">List Data</a> <span class="divider"><i class="icon-chevron-right"></i></span></li>
												<?php
												}else{
												?>
												<li><a href="tampil_kategori.php?id=<?php echo $_GET['id']?>">List Data</a> <span class="divider"><i class="icon-chevron-right"></i></span></li>
												<?php
												}
												?>
												<li class="active">Detail</li>
											</ul>
											<?php 
											$idbarang=$_GET['id'];
											$idbarang = $_GET['id'];
											$tampil = mysql_query("SELECT * FROM barang WHERE id_barang ='$idbarang'") or die("gagal melakukan query") ;
											$data = mysql_fetch_array($tampil);
											?>
												<div class="accordion-group">
												<table class="tableluar" name=dataaset cellpadding="5">
												<tr>
												<td width="20%">Nama Aset </td>
												<td> : </td>
												<td> <?php echo $data['nama_barang'];?> </td>
												</tr>
												
												<tr>
												<td>Detail Aset </td>
												<td> : </td>
												<td> <?php echo $data['detil_barang'];?> </td>
												</tr>
												
												<tr>
												<td>Nomor Aset </td>
												<td> : </td>
												<td> <?php echo $data['id_aset'];?> </td>
												</tr>
												
												<tr>
												<td>Kategori </td>
												<td> : </td>
												<td><?php
													switch($data['id_kategori']){
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
													}?> 
												</td>
												</tr>
												
												<tr>
												<td>Tanggal perolehan </td>
												<td> : </td>
												<td> <?php echo $data['tanggal_pengadaan'];?> </td>
												</tr>
												
												<tr>
												<td>Harga Perolehan </td>
												<td> : </td>
												<td> <?php echo "Rp ".format_angka($data['harga_perolehan']);?> </td>
												</tr>
												
												
												<tr>
												<td>Status </td>
												<td> : </td>
												<td> <?php echo $data['status'];?> </td>
												</tr>
												
												<tr>
												<td>Tanggal Status </td>
												<td> : </td>
												<td> <?php echo $data['tanggal_status'];?> </td>
												</tr>
												
												<tr>
												<td>PIC </td>
												<td> : </td>
												<td> <?php echo $data['p_i_c'];?> </td>
												</tr>
												</table>
												<br>
												<center>
												<a href="update.php?id_kat=<?php echo $data['id_kategori'];?>&&id=<?php echo $data['id_barang']; ?>" title='Edit Data'><button class="btn btn-success"><i class="icon icon-edit"></i> Ubah</button></a>
                                                <a href="aksiForm.php?act=hapus&id=<?php echo $data['id_barang']; ?>" target="_self" alt="Delete Data" onClick="return 	confirm('Anda yakin akan menghapus data?')"><button class="btn btn-danger"><i class="icon icon-trash"></i> Delete</button></a>
												</center>
                                                </div> 
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