<?php
  require_once('Worksheet.php');
  require_once('Workbook.php');
  // koneksi ke mysql
  include "../config/koneksi.php";

  // function untuk membuat header file excel
  function HeaderingExcel($filename) {
      header("Content-type: application/vnd.ms-excel");
      header("Content-Disposition: attachment; filename=$filename" );
      header("Expires: 0");
      header("Cache-Control: must-revalidate, post-check=0,pre-check=0");
      header("Pragma: public");
      }
  $tampil = mysql_query("SELECT * FROM barang b LEFT JOIN kategori k ON  b.id_kategori = k.id_kategori 
      WHERE k.id_kategori='$id'");
  $data = mysql_fetch_array($tampil);
  $nama_kat=$data['nama_kategori'];
    // membuat header file excel
  HeaderingExcel('Laporan Data Aset '.$nama_kat.'.xls');

  // membuat workbook baru
  $workbook = new Workbook("");
  // membuat worksheet ke-1 (data identitas sekolah)
  $worksheet1 =& $workbook->add_worksheet('Hardware');
  $worksheet2 =& $workbook->add_worksheet('Software');
  $worksheet3 =& $workbook->add_worksheet('Peralatan Kantor');
  $worksheet4 =& $workbook->add_worksheet('Bangunan');
  $worksheet5 =& $workbook->add_worksheet('Kendaraan');
  // setting format header tabel data
  $judul =& $workbook->add_format();
  $judul->set_align('vcenter');
  $judul->set_align('merge');
  $judul->set_size('14');
  
  $no =& $workbook->add_format();
  $no->set_align(center);
 
  $border =& $workbook->add_format();
  $border->set_top(1);
  $border->set_bottom(1);
  $border->set_left(1);
  $border->set_right(1);
  
  $judultabelmerge1 =& $workbook->add_format();
  $judultabelmerge1->set_bold(); 
  $judultabelmerge1->set_merge();
  $judultabelmerge1->set_size('16');
  //$judultabelmerge1->set_pattern();
  //$judultabelmerge1->set_fg_color('grey');
  //$judultabelmerge1->set_color('white');
  
  $judultabel =& $workbook->add_format();
  $judultabel->set_merge();
  $judultabel->set_align('left');
  $judultabel->set_bold(); 
  
  $judulborder =& $workbook->add_format();
  $judulborder->set_bold();
  $judulborder->set_top(1);
  $judulborder->set_bottom(1);
  $judulborder->set_left(1);
  $judulborder->set_right(1);
  $judulborder->set_pattern();
  $judulborder->set_fg_color('grey');
  
  $judulborder->set_color('white');
  $judulborder->set_align(center);
  
  $bold =& $workbook->add_format();
  $bold->set_bold();
  $bold->set_align('left');
  
  
  $kuning =& $workbook->add_format();
  $kuning->set_pattern();
  $kuning->set_fg_color('grey');
  $kuning->set_left(1);
  $kuning->set_top(1);
  $kuning->set_right(1);
  $kuning->set_bottom(1);
  
  $th =& $workbook->add_format();
  $th->set_align('vcenter');
  
  $worksheet1->set_column(0, 0, 5);
  for($lebarkolom=3; $lebarkolom<=19; $lebarkolom++){
	$worksheet1->set_column(0, $lebarkolom, 15);
  }
  for($lebarbaris=1; $lebarbaris<=42; $lebarbaris++){
  $worksheet1->set_row($lebarbaris, 16);
  }
  
  $borderkiriatasbawah =& $workbook->add_format();
  $borderkiriatasbawah->set_left(1);
  $borderkiriatasbawah->set_top(1);
  $borderkiriatasbawah->set_bottom(1);
  
  $borderatasbawah =& $workbook->add_format();
  $borderatasbawah->set_top(1);
  $borderatasbawah->set_bottom(1);

  $worksheet1->write_string(0, 0, "Laporan Data Aset Hardware", $judultabelmerge1);
  for($kolom=0; $kolom<=9; $kolom++){
        $worksheet1->write_blank($a, $kolom, $judultabelmerge1);
      }
  $baris=3;

		$worksheet1->write_string($baris, 0, "No", $judulborder);
		$worksheet1->write_string($baris, 1, "Id Aset", $judulborder);
		$worksheet1->write_string($baris, 2, "Nama Aset", $judulborder);
		$worksheet1->write_string($baris, 3, "Detail Aset", $judulborder);
		$worksheet1->write_string($baris, 4, "Tanggal Pengadaan", $judulborder);
		$worksheet1->write_string($baris, 5, "Harga Perolehan", $judulborder);
		$worksheet1->write_string($baris, 6, "Status", $judulborder);
		$worksheet1->write_string($baris, 7, "Tanggal Status", $judulborder);
		$worksheet1->write_string($baris, 8, "PIC", $judulborder);
 	
		$nomer = 1;
		$baris= 4;
		/* MEMBUAT VARIABEL PERHITUNGAN JUMLAH */
		$jml_perolehan = 0;
		/* menampilkan database */
		$tampil = mysql_query("SELECT * FROM barang b LEFT JOIN kategori k ON  b.id_kategori = k.id_kategori where b.id_kategori='1'");
		while ($data = mysql_fetch_array($tampil)) {
        $worksheet1->write_number($baris, 0, $nomer, $border);
		$worksheet1->write_string($baris, 1, $data['id_aset'], $border);
		$worksheet1->write_string($baris, 2, $data['nama_barang'], $border);
		$worksheet1->write_string($baris, 3, $data['detil_barang'], $border);
		$worksheet1->write_string($baris, 4, $data['tanggal_pengadaan'], $border);
		$worksheet1->write_number($baris, 5, $data['harga_perolehan'], $border);
		$worksheet1->write_string($baris, 6, $data['status'], $border);
		$worksheet1->write_string($baris, 7, $data['tanggal_status'], $border);
		$worksheet1->write_string($baris, 8, $data['p_i_c'], $border);
  $baris++;
  $nomer++;
  }
  
  
  $worksheet2->write_string(0, 0, "Laporan Data Aset Software", $judultabelmerge1);
  for($kolom=0; $kolom<=9; $kolom++){
        $worksheet2->write_blank($a, $kolom, $judultabelmerge1);
      }
  $baris=3;

		$worksheet2->write_string($baris, 0, "No", $judulborder);
		$worksheet2->write_string($baris, 1, "Id Aset", $judulborder);
		$worksheet2->write_string($baris, 2, "Nama Aset", $judulborder);
		$worksheet2->write_string($baris, 3, "Detail Aset", $judulborder);
		$worksheet2->write_string($baris, 4, "Tanggal Pengadaan", $judulborder);
		$worksheet2->write_string($baris, 5, "Harga Perolehan", $judulborder);
		$worksheet2->write_string($baris, 6, "Status", $judulborder);
		$worksheet2->write_string($baris, 7, "Tanggal Status", $judulborder);
		$worksheet2->write_string($baris, 8, "PIC", $judulborder);
 	
		$nomer = 1;
		$baris= 4;
		/* MEMBUAT VARIABEL PERHITUNGAN JUMLAH */
		$jml_perolehan = 0;
		/* menampilkan database */
		$tampil = mysql_query("SELECT * FROM barang b LEFT JOIN kategori k ON  b.id_kategori = k.id_kategori where b.id_kategori='2'");
		while ($data = mysql_fetch_array($tampil)) {
        $worksheet2->write_number($baris, 0, $nomer, $border);
		$worksheet2->write_string($baris, 1, $data['id_aset'], $border);
		$worksheet2->write_string($baris, 2, $data['nama_barang'], $border);
		$worksheet2->write_string($baris, 3, $data['detil_barang'], $border);
		$worksheet2->write_string($baris, 4, $data['tanggal_pengadaan'], $border);
		$worksheet2->write_number($baris, 5, $data['harga_perolehan'], $border);
		$worksheet2->write_string($baris, 6, $data['status'], $border);
		$worksheet2->write_string($baris, 7, $data['tanggal_status'], $border);
		$worksheet2->write_string($baris, 8, $data['p_i_c'], $border);
  $baris++;
  $nomer++;
  }
  $worksheet3->write_string(0, 0, "Laporan Data Aset Software", $judultabelmerge1);
  for($kolom=0; $kolom<=9; $kolom++){
        $worksheet3->write_blank($a, $kolom, $judultabelmerge1);
      }
  $baris=3;

		$worksheet3->write_string($baris, 0, "No", $judulborder);
		$worksheet3->write_string($baris, 1, "Id Aset", $judulborder);
		$worksheet3->write_string($baris, 2, "Nama Aset", $judulborder);
		$worksheet3->write_string($baris, 3, "Detail Aset", $judulborder);
		$worksheet3->write_string($baris, 4, "Tanggal Pengadaan", $judulborder);
		$worksheet3->write_string($baris, 5, "Harga Perolehan", $judulborder);
		$worksheet3->write_string($baris, 6, "Status", $judulborder);
		$worksheet3->write_string($baris, 7, "Tanggal Status", $judulborder);
		$worksheet3->write_string($baris, 8, "PIC", $judulborder);
 	
		$nomer = 1;
		$baris= 4;
		/* MEMBUAT VARIABEL PERHITUNGAN JUMLAH */
		$jml_perolehan = 0;
		/* menampilkan database */
		$tampil = mysql_query("SELECT * FROM barang b LEFT JOIN kategori k ON  b.id_kategori = k.id_kategori where b.id_kategori='3'");
		while ($data = mysql_fetch_array($tampil)) {
        $worksheet3->write_number($baris, 0, $nomer, $border);
		$worksheet3->write_string($baris, 1, $data['id_aset'], $border);
		$worksheet3->write_string($baris, 2, $data['nama_barang'], $border);
		$worksheet3->write_string($baris, 3, $data['detil_barang'], $border);
		$worksheet3->write_string($baris, 4, $data['tanggal_pengadaan'], $border);
		$worksheet3->write_number($baris, 5, $data['harga_perolehan'], $border);
		$worksheet3->write_string($baris, 6, $data['status'], $border);
		$worksheet3->write_string($baris, 7, $data['tanggal_status'], $border);
		$worksheet3->write_string($baris, 8, $data['p_i_c'], $border);
  $baris++;
  $nomer++;
  }
  
  $worksheet4->write_string(0, 0, "Laporan Data Aset Software", $judultabelmerge1);
  for($kolom=0; $kolom<=9; $kolom++){
        $worksheet4->write_blank($a, $kolom, $judultabelmerge1);
      }
  $baris=3;

		$worksheet4->write_string($baris, 0, "No", $judulborder);
		$worksheet4->write_string($baris, 1, "Id Aset", $judulborder);
		$worksheet4->write_string($baris, 2, "Nama Aset", $judulborder);
		$worksheet4->write_string($baris, 3, "Detail Aset", $judulborder);
		$worksheet4->write_string($baris, 4, "Tanggal Pengadaan", $judulborder);
		$worksheet4->write_string($baris, 5, "Harga Perolehan", $judulborder);
		$worksheet4->write_string($baris, 6, "Status", $judulborder);
		$worksheet4->write_string($baris, 7, "Tanggal Status", $judulborder);
		$worksheet4->write_string($baris, 8, "PIC", $judulborder);
 	
		$nomer = 1;
		$baris= 4;
		/* MEMBUAT VARIABEL PERHITUNGAN JUMLAH */
		$jml_perolehan = 0;
		/* menampilkan database */
		$tampil = mysql_query("SELECT * FROM barang b LEFT JOIN kategori k ON  b.id_kategori = k.id_kategori where b.id_kategori='4'");
		while ($data = mysql_fetch_array($tampil)) {
        $worksheet4->write_number($baris, 0, $nomer, $border);
		$worksheet4->write_string($baris, 1, $data['id_aset'], $border);
		$worksheet4->write_string($baris, 2, $data['nama_barang'], $border);
		$worksheet4->write_string($baris, 3, $data['detil_barang'], $border);
		$worksheet4->write_string($baris, 4, $data['tanggal_pengadaan'], $border);
		$worksheet4->write_number($baris, 5, $data['harga_perolehan'], $border);
		$worksheet4->write_string($baris, 6, $data['status'], $border);
		$worksheet4->write_string($baris, 7, $data['tanggal_status'], $border);
		$worksheet4->write_string($baris, 8, $data['p_i_c'], $border);
  $baris++;
  $nomer++;
  }
  
  $worksheet5->write_string(0, 0, "Laporan Data Aset Software", $judultabelmerge1);
  for($kolom=0; $kolom<=9; $kolom++){
        $worksheet5->write_blank($a, $kolom, $judultabelmerge1);
      }
  $baris=3;

		$worksheet5->write_string($baris, 0, "No", $judulborder);
		$worksheet5->write_string($baris, 1, "Id Aset", $judulborder);
		$worksheet5->write_string($baris, 2, "Nama Aset", $judulborder);
		$worksheet5->write_string($baris, 3, "Detail Aset", $judulborder);
		$worksheet5->write_string($baris, 4, "Tanggal Pengadaan", $judulborder);
		$worksheet5->write_string($baris, 5, "Harga Perolehan", $judulborder);
		$worksheet5->write_string($baris, 6, "Status", $judulborder);
		$worksheet5->write_string($baris, 7, "Tanggal Status", $judulborder);
		$worksheet5->write_string($baris, 8, "PIC", $judulborder);
 	
		$nomer = 1;
		$baris= 4;
		/* MEMBUAT VARIABEL PERHITUNGAN JUMLAH */
		$jml_perolehan = 0;
		/* menampilkan database */
		$tampil = mysql_query("SELECT * FROM barang b LEFT JOIN kategori k ON  b.id_kategori = k.id_kategori where b.id_kategori='5'");
		while ($data = mysql_fetch_array($tampil)) {
        $worksheet5->write_number($baris, 0, $nomer, $border);
		$worksheet5->write_string($baris, 1, $data['id_aset'], $border);
		$worksheet5->write_string($baris, 2, $data['nama_barang'], $border);
		$worksheet5->write_string($baris, 3, $data['detil_barang'], $border);
		$worksheet5->write_string($baris, 4, $data['tanggal_pengadaan'], $border);
		$worksheet5->write_number($baris, 5, $data['harga_perolehan'], $border);
		$worksheet5->write_string($baris, 6, $data['status'], $border);
		$worksheet5->write_string($baris, 7, $data['tanggal_status'], $border);
		$worksheet5->write_string($baris, 8, $data['p_i_c'], $border);
  $baris++;
  $nomer++;
  }
  $workbook->close();
?>