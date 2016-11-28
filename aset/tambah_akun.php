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
										<ul class="breadcrumb">
											<li><a href="menu.php">Home</a> <span class="divider"><i class="icon-chevron-right"></i></span></li>
											<li><a href="akun.php">List Akun</a> <span class="divider"><i class="icon-chevron-right"></i></span></li>
											<li class="active">Tambah Akun</li>
										</ul>
                                            <form name="form" enctype="multipart/form-data" class="form-horizontal" id="block-validate" action="aksiForm.php?act=input_akun" method="POST">
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
                                                    <label class="control-label">Username</label>
													
                                                    <div class="controls">
                                                        <input type="text" id="username" name="username" style="width:250px"/>
                                                    </div>
                                                </div>
												<br>
												<div class="control-group">
                                                    <label class="control-label">Password</label>
                                                    <div class="controls">
                                                        <input type="password" id="password" name="password" style="width:250px"/>
                                                    </div>
                                                </div>
												<br/>
												<div class="control-group">
                                                    <label class="control-label">Konfirmasi Password</label>
                                                    <div class="controls">
                                                        <input type="password" id="konfirm" name="konfirm" style="width:250px"/>
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