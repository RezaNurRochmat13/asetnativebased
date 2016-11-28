<?php
      include "config/koneksi.php";
	  include "datediff.php";
	  $filename = 'export-'.date('YmdHis');
header("Cache-Control: no-cache, no-store, must-revalidate");
header("Content-Type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=".$filename.".xls");

?>
<div>
PT.BKD Indonesia
</div>
<div>
Daftar Aset Tetap Dan Penyusutannya
</div>
<div>
Data Berdasarkan Tanggal <?php echo $_POST['pilihtanggal'];?>
</div>

<table id="dataTable">
                        <thead>
                            <tr>
                                <th rowspan=2>No.</th>
                                <th rowspan=2>ID Aset</th>
                                <th rowspan=2>Kategori</th>
                                <th rowspan=2>Nama Aset</th>
                                <th rowspan=2>Tanggal Pengadaan</th>
                                <th rowspan=2>Harga Perolehan</th>
                                <th rowspan=2>Umur Ekonomis</th>
								<th rowspan=2>Penyusutan per bulan</th>
								<th colspan=12 align=center>Penyusutan</th>
								<th rowspan=2>Total Penyusutan Tahun ini</th>
								<th rowspan=2>Total Akumulasi Penyusutan</th>
								<th rowspan=2>Nilai Buku</th>
                            </tr>
							<tr>
								<th>Januari</th>
								<th>Februari</th>
								<th>Maret</th>
								<th>April</th>
								<th>Mei</th>
								<th>Juni</th>
								<th>Juli</th>
								<th>Agustus</th>
								<th>September</th>
								<th>Oktober</th>
								<th>November</th>
								<th>Desember</th>
							</tr>	
                        </thead>
                        <tbody>
                        <?php
                        $nomer =1;
/*MEMBUAT VARIABEL PERHITUNGAN JUMLAH*/						
									$jml_perolehan=0;
									$jml_januari=0;
									$jml_februari=0;
									$jml_maret=0;
									$jml_april=0;
									$jml_mei=0;
									$jml_juni=0;
									$jml_juli=0;
									$jml_agustus=0;
									$jml_september=0;
									$jml_oktober=0;
									$jml_nopember=0;
									$jml_desember=0;
									$jml_thn_ini=0;
									$jml_total=0;
									$jml_nilaibuku=0;
									
/*menampilkan database*/	$tampil = mysql_query("SELECT * FROM barang b JOIN kategori k ON ( b.id_kategori = k.id_kategori ) JOIN penyusutan p ON ( b.id_barang = p.id_barang ) ");
							while($data = mysql_fetch_array($tampil)){ ?>
                                <tr><?php
/*membuat fungsi perhitungan*/								
									$maxUmurPenyusutan=$data['umur_ekonomis'];
									$harga=$data['harga_perolehan'];
									$penurunan=$data['penyusutan_per_bulan'];
									$tgl_pengadaan = $data['tanggal_pengadaan'];
									$tgl_skrg = $_POST['pilihtanggal'];
									$pisah=explode("-",$tgl_skrg);
									$thn_pilih=$pisah[0];
									$bln_pilih=$pisah[1];
									$awal_tahun = date("Y/01/01");
									$umur = (datediff('m',$tgl_pengadaan, $tgl_skrg))+1;
									if($umur>=0){
									$totalpenyusutan = $penurunan*$umur;
									}
									else{
									$totalpenyusutan = 0;
									}
									$penyusutan_thn_ini = 0;
									$nilaibuku = $harga-$totalpenyusutan;
									$pisah_tanggal=explode("-",$tgl_pengadaan);
									$thn_pengadaan=$pisah_tanggal[0];
									$bln_pengadaan=$pisah_tanggal[1];
									if(function_exists('date_default_timezone_set')) date_default_timezone_set('Asia/Jakarta');
									$tgl_max = date_create($tgl_pengadaan);
									date_add($tgl_max, date_interval_create_from_date_string("$maxUmurPenyusutan months"));
								
									$maxUmurTgl = date($tgl_pengadaan+$maxUmurPenyusutan); 
									?>
                                    <td><?php echo $nomer;?></td>
                                    <td><?php echo $data['id_aset'];?></td>
                                    <td><?php echo $data['nama_kategori'];?></td>
                                    <td><?php echo $data['nama_barang'];?></td>
                                    <td><?php echo $data['tanggal_pengadaan'];?></td>
                                    <td><?php echo number_format($data['harga_perolehan']);?></td>
									<td><?php echo $data['umur_ekonomis'];?></td>
									
									<td><?php echo number_format($data['penyusutan_per_bulan']);?></td>
									<?php 
									$jumlah=array(0,0,0,0,0,0,0,0,0,0,0,0,0);
/*menampilkan 12 bulan*/			for($i=1; $i<=12; $i++){
										$thn_max=date_format($tgl_max, 'Y');
										$bln_max=date_format($tgl_max, 'm');
									
									
/*menampilkan hitung penyusutan*/		if($thn_pilih==$thn_pengadaan){
											if($i>=$bln_pengadaan&&$i<=$bln_pilih){
												?>
												<td><?php echo number_format($data['penyusutan_per_bulan']);?></td>
												<?php
												$penyusutan_thn_ini =$penyusutan_thn_ini+$data['penyusutan_per_bulan'];
												$jumlah[$i]=$jumlah[$i]+$data['penyusutan_per_bulan'];
											}
											else{
												?>
												<td><?php echo ("");?></td>
												<?php
											}		
										}
										elseif($thn_pilih<$thn_pengadaan){
											?>
											<td><?php echo ("");?></td>
											<?php
										}
										elseif($thn_pilih<$thn_max){
											if($i<=$bln_pilih){
												?>
												<td><?php echo number_format($data['penyusutan_per_bulan']);?></td>
												<?php
												$penyusutan_thn_ini =$penyusutan_thn_ini+$data['penyusutan_per_bulan'];
												$jumlah[$i]=$jumlah[$i]+$data['penyusutan_per_bulan'];
											}
											else{
												?>
												<td><?php echo ("");?></td>
												<?php
											}
										}
										elseif($thn_pilih=$thn_max){
											if($i<=$bln_pilih&&$i<=$bln_max){
												?>
												<td><?php echo number_format($data['penyusutan_per_bulan']);?></td>
												<?php
												$penyusutan_thn_ini =$penyusutan_thn_ini+$data['penyusutan_per_bulan'];
												$jumlah[$i]=$jumlah[$i]+$data['penyusutan_per_bulan'];
											}
											else{
												?>
												<td><?php echo ("");?></td>
												<?php
											}
										}

									}
									
									?>
									
									<td><?php echo number_format($penyusutan_thn_ini);?></td>
									<td><?php 
										if($thn_pilih>=$thn_pengadaan){
											if($umur<$maxUmurPenyusutan){
												echo number_format($totalpenyusutan);
											    $jml_total=$jml_total+$totalpenyusutan;	
											}
											else{
												echo number_format($harga);
												$jml_total=$jml_total+$totalpenyusutan;
											}		
										}
										else{
										    echo ("");
										}
									?></td>
									<td><?php 
										if($thn_pilih>=$thn_pengadaan){
											if($nilaibuku>0){
												echo number_format($nilaibuku);
												$jml_nilaibuku=$jml_nilaibuku+$nilaibuku;
											}
											else{
												echo ("-");
											}
										}
										else{
											echo ("-");
										}
									;?></td>
									
                                </tr>
                        <?php 
                        
									$jml_perolehan=$jml_perolehan+$data['harga_perolehan'];
									$jml_januari=$jml_januari+$jumlah[1];
									$jml_februari=$jml_februari+$jumlah[2];
									$jml_maret=$jml_maret+$jumlah[3];
									$jml_april=$jml_april+$jumlah[4];
									$jml_mei=$jml_mei+$jumlah[5];
									$jml_juni=$jml_juni+$jumlah[6];
									$jml_juli=$jml_juli+$jumlah[7];
									$jml_agustus=$jml_agustus+$jumlah[8];
									$jml_september=$jml_september+$jumlah[9];
									$jml_oktober=$jml_oktober+$jumlah[10];
									$jml_nopember=$jml_nopember+$jumlah[11];
									$jml_desember=$jml_desember+$jumlah[12];
									$jml_thn_ini=$jml_thn_ini+$penyusutan_thn_ini;
									
						$nomer++;
                        }?>
								<th><?php echo $nomer;?></th>
                                <th><?php echo ("") ;?></th>
                                <th><?php echo ("") ;?></th>
                                <th>Jumlah</th>
                                <th><?php echo ("") ;?></th>
                                <th><?php echo number_format($jml_perolehan);?></th>
                                <th><?php echo ("") ;?></th>
								<th><?php echo ("") ;?></th>
								<th><?php echo number_format($jml_januari);?></th>
								<th><?php echo number_format($jml_februari);?></th>
								<th><?php echo number_format($jml_maret);?></th>
								<th><?php echo number_format($jml_april);?></th>
								<th><?php echo number_format($jml_mei);?></th>
								<th><?php echo number_format($jml_juni);?></th>
								<th><?php echo number_format($jml_juli);?></th>
								<th><?php echo number_format($jml_agustus);?></th>
								<th><?php echo number_format($jml_september);?></th>
								<th><?php echo number_format($jml_oktober);?></th>
								<th><?php echo number_format($jml_nopember);?></th>
								<th><?php echo number_format($jml_desember);?></th>
								<th><?php echo number_format($jml_thn_ini);?></th>
								<th><?php echo number_format($jml_total);?></th>
								<th><?php echo number_format($jml_nilaibuku);?></th>
								<th><?php echo ("") ;?></th>
                        </tbody>
                    </table>
<?php
exit()
?>