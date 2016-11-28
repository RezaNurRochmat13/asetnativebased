<?php
      include('header.php');
      include "config/koneksi.php";
      ?>
            <div id="content">
                <!-- .outer -->
                <div class="container-fluid outer">
                    <div class="row-fluid">
                        <!-- .inner -->
                        <div class="span12 inner">
                            <div class="row-fluid">
                                    <div class="box">
                                        <header>
                                            <div class="icons"><i class="icon-plus icon-large"></i></div>
                                            <h5>Tambah Data</h5>
                                        </header>
                                        <div id="collapseOne" class="accordion-body collapse in body">
                                            <form name="form" enctype="multipart/form-data" class="form-horizontal" id="block-validate" action="aksiForm.php?act=input" method="POST">
												<?php
														function getLastTrans()
														{
															$querycount="SELECT MAX(id_barang) AS LastID FROM barang";
															$result=mysql_query($querycount) or die(mysql_error());
															$row=mysql_fetch_array($result, MYSQL_ASSOC);
															return $row['LastID'];
														}
														$LastID=getLastTrans();
														function FormatNoTrans($num){
															$num=$num+1;
															switch (strlen($num)){
																case 1 : $NoTrans = "00".$num; break;
																case 2 : $NoTrans = "0".$num; break;
																default: $NoTrans = $num;   
															}      
															return $NoTrans;
														}
														$LastID=FormatNoTrans(getLastTrans());
												?>
												<div class="accordion-group">
												<table class="tableluar">
												<tr>
												<td>
											   <div class="control-group">
                                                    <label class="control-label">Nama Aset</label>
													
                                                    <div class="controls">
                                                        <input type="text" id="namabarang" name="namabarang" style="width:250px"/>
                                                    </div>
                                                </div>
												<br>
												<div class="control-group">
                                                    <label class="control-label">Detail Aset</label>
                                                    <div class="controls">
                                                        <textarea name='detilbarang' style="width:250px"></textarea>
                                                    </div>
                                                </div>
												<br>
												<div class="control-group">
                                                    <label class="control-label">Nomer Aset</label>
													<div class="controls">
                                                        <input type="text" id="id_aset" name="id_aset" value=<?php echo $LastID; ?> style="width:80px">
                                                    </div>
                                                </div>
												<br>
												<div class="control-group">
                                                    <label class="control-label">Kategori</label>

                                                    <div class="controls">
													<select name="idkategori" style="width:150px">
													<option value="1">Hardware</option>
													<option value="2">Software</option>
													<option value="3">Peralatan Kantor</option>
													<option value="4">Bangunan</option>
													<option value="5">Kendaraan</option>
													</select>
                                                    </div>
                                                </div>
												<br>
                                                <div class="control-group">
                                                    <label class="control-label">Tanggal Perolehan</label>

                                                    <div class="controls">
													<input type="Text" id="tanggal" name="tanggal" maxlength="25" size="15"> <a href="javascript:NewCssCal('tanggal','yyyymmdd')">
													<img src="datepicker/images/cal.gif" width="16" height="16" alt="pick a date"></a>
													</div>
                                                </div>
												<br>
												<div class="control-group">
                                                    <label class="control-label">Harga Perolehan</label>

                                                    <div class="controls">
                                                        <input type="number" id="hargabarang" name="harga_perolehan" style="width:250px"/>
                                                    <div style="color:red;font-style:italic">*Masukkan angka(tanpa rupiah)</div>
													</div>
                                                </div>
												<br>
                                                <div class="control-group">
                                                    <label class="control-label">Status</label>
												<div class="controls">
                                                    <select name="status" style="width:150px">
													<option value="">-Pilih Status-</option>
													<option value="Baik">Baik</option>
													<option value="Cukup Baik">Cukup Baik</option>
													<option value="Rusak">Rusak</option>
                                                    <option value="Hilang">Hilang</option>
													</select>
                                                </div>
                                                </div>
												<br>
                                                <div class="control-group">
                                                    <label class="control-label">Tanggal Status</label>

                                                    <div class="controls">
													<input type="Text" id="tanggal_status" name="tanggal_status" maxlength="25" size="15"> <a href="javascript:NewCssCal('tanggal_status','yyyymmdd')">
													<img src="datepicker/images/cal.gif" width="16" height="16" alt="pick a date"></a>
													</div>
                                                </div>
												<br>
												<div class="control-group">
                                                    <label class="control-label">PIC</label>
													
                                                    <div class="controls" >
                                                        <input type="text" id="pic1" name="pic1" style="width:250px"/>
                                                    </div>
                                                </div>
												<br>
												</td>
												</tr>
												</table>
												<br>
												<center>
												<input type="submit" value="Tambah" class="btn btn-info">
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