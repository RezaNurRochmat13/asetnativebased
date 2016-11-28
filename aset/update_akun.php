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
			<div class="icons"><i class="icon-book icon-large"></i></div>
			<h5 style="weight:bold">Edit Akun</h5>
		</header>
        <div id="collapseOne" class="accordion-body collapse in body">
		<ul class="breadcrumb">
			<li><a href="menu.php">Home</a> <span class="divider"><i class="icon-chevron-right"></i></span></li>
			<li><a href="akun.php">List Akun</a> <span class="divider"><i class="icon-chevron-right"></i></span></li>
			<li class="active">Edit Akun</li>
		</ul>
         <?php $id_akun = $_GET['id_akun'];
	 $tampil = mysql_query("SELECT * FROM user WHERE id ='$id_akun'") or die("gagal melakukan query") ;
         $data = mysql_fetch_array($tampil);?>
	<div class="accordion-group">
		<form name="form" enctype="multipart/form-data" class="form-horizontal" id="block-validate" action="aksiForm.php?act=edit_akun&id_akun=<?php echo $id_akun?>" method="POST">
												<table class="tableluar">
												<tr>
												<td>
											   <div class="control-group">
                                                    <label class="control-label">Username</label>
													
                                                    <div class="controls">
                                                        <input type="text" id="username" name="username" value="<?php echo $data['username']?>" style="width:250px" disabled />
                                                    </div>
                                                </div>
												<br>
												<div class="control-group">
                                                    <label class="control-label">Password Baru</label>
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