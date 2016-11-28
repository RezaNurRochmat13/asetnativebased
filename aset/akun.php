<?php
include('header.php');
include "config/koneksi.php";
include "datediff.php";

function format_angka($angka) {
    $frmt = number_format($angka, 2, ',', '.');
    return $frmt;
}

$id = isset($_GET['id']) ? $_GET['id'] : '';
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
                                <h5 style="weight:bold">Setting Akun</h5>
                            </header>
                            <div id="collapse4" class="body">
									<ul class="breadcrumb">
										<li><a href="menu.php">Home</a> <span class="divider"><i class="icon-chevron-right"></i></span></li>
										<li class="active">List Akun</li>
									</ul>
									<div class="modal-body" style="max-width:100%">
										<div class="accordion-group">
                                        <a href="tambah_akun.php"><button class="btn btn-success"><i class="icon icon-plus"></i> Tambah</button></a><br>
										<table id="dataTable" class="table table-bordered table-condensed table-hover table-striped">
                                            <thead>
                                                <tr>
                                                    <th>No.</th>
                                                    <th>Username</th>
													<th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $nomer = 1;
                                                /* MEMBUAT VARIABEL PERHITUNGAN JUMLAH */
                                                $jml_perolehan = 0;
                                                /* menampilkan database */
                                                $tampil = mysql_query("SELECT * FROM user");
                                               
                                                while ($data = mysql_fetch_array($tampil)) {
                                                    ?>
                                                    <tr>
                                                        <td width="3%" align="center"><?php echo $nomer; ?></td>
                                                        <td width="42%"><?php echo $data['username']; ?></td>
                                                        <td width="5%" align="center">
															<a href="update_akun.php?id_akun=<?php echo $data['id']; ?>" title='Edit Data'><img src="images/data-edit.png"></a>
                                                            <a href="aksiForm.php?act=hapus_akun&id_akun=<?php echo $data['id']; ?>" target="_self" alt="Delete Data" onClick="return 	confirm('Anda yakin akan menghapus data?')"><img src="images/data-delete.png"></a>
														</td>
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