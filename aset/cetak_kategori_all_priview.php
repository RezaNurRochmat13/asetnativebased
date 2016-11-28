<?php
include "config/koneksi.php";
function format_angka($angka) {
$frmt = number_format($angka, 2, ',', '.');
return $frmt;
}
?>  
<style>
.font{
font-family: ”Trebuchet MS”, Helvetica, sans-serif;
}
table,td,th{
border: 1px solid #000;
border-collapse: collapse;
font-family: ”Trebuchet MS”, Helvetica, sans-serif;
}
</style>

								<center>
								<br/>
								<div class="font">
								<h4>LAPORAN DATA ASET</h4>
								</center>
								<br/>
								<table width="800" cellpadding="5" align="center">
								 
                                            <thead>
                                                <tr bgcolor="FFD25D">
                                                    <th align="center">No</th>
                                                    <th align="center">ID Aset</th>
                                                    <th align="center">Nama Aset</th>
													<th align="center">Detail Aset</th>
													<th align="center">Kategori</th>
                                                    <th align="center">Tanggal Pengadaan</th>
                                                    <th align="center">Harga Perolehan</th>
													<th align="center">Status</th>
													<th align="center">Tanggal Status</th>
                                                    <th align="center">PIC</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $nomer = 1;
                                                /* MEMBUAT VARIABEL PERHITUNGAN JUMLAH */
                                                $jml_perolehan = 0;
                                                /* menampilkan database */
												
												$tampil = mysql_query("SELECT * FROM barang b LEFT JOIN kategori k ON  b.id_kategori = k.id_kategori");
                 
                                                while ($data = mysql_fetch_array($tampil)) {
                                                    ?>
                                                    <tr>
                                                        <td align="center"><?php echo $nomer; ?></td>
                                                        <td align="center"><?php echo $data['id_aset']; ?></td>
                                                        <td><?php echo $data['nama_barang']; ?></td>
														<td><?php echo $data['detil_barang']; ?></td>
														<td align="center"><?php echo $data['nama_kategori']; ?></td>
                                                        <td align="center"><?php echo $data['tanggal_pengadaan']; ?></td>
                                                        <td align="center"><?php echo format_angka($data['harga_perolehan']); ?></td>
                                                        <td align="center"><?php echo $data['status']; ?></td>
														<td align="center"><?php echo $data['tanggal_status']; ?></td>
														<td><?php echo $data['p_i_c']; ?></td>
                                                    </tr>
    <?php
    $nomer++;
}
?>
                                            </tbody>
                                        </table>
										</div>
										<br/>
										<br/>		
                        </div>
                    </div>
                </div>
            </div>              
        </div>                   
    </div>               
</div>
<div id="push"></div>