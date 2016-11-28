<?php

// menggunakan class phpExcelReader
include "config/koneksi.php";
include "config/excel_reader2.php";

// membaca file excel yang diupload
$data = new Spreadsheet_Excel_Reader($_FILES['userfile']['tmp_name']);

// membaca jumlah baris dari data excel
$baris = $data->rowcount($sheet_index = 0);

// nilai awal counter untuk jumlah data yang sukses dan yang gagal diimport
$sukses = 0;
$gagal = 0;

// import data excel mulai baris ke-2 (karena baris pertama adalah nama kolom)
for ($i = 2; $i <= $baris; $i++) {
    // membaca data Nomor Asset (kolom ke-1)
    $id_asset = $data->val($i, 1);
    // membaca data ID katagori (kolom ke-2)
    $id_kategori = $data->val($i, 2);
    // membaca data nama barang (kolom ke-3)
    $nama_barang = $data->val($i, 3);
    // membaca data detail barang (kolom ke-4)
    $detail = $data->val($i, 4);
    // membaca data tanggal (kolom ke-5)
    $tanggal = $data->val($i, 5);
    // membaca data harga (kolom ke-6)
    $harga = $data->val($i, 6);
    // membaca data pic (kolom ke-7)
    $status = $data->val($i, 7);
    // membaca data pic (kolom ke-8)
    $tanggal_status = $data->val($i, 8);
    // membaca data pic (kolom ke-9)
    $pic = $data->val($i, 9);


    // setelah data dibaca, sisipkan ke dalam tabel mhs
    $query = "INSERT INTO barang (id_aset,id_kategori,nama_barang,detil_barang,tanggal_pengadaan,harga_perolehan,status, tanggal_status, p_i_c) VALUES ('$id_asset', '$id_kategori', '$nama_barang','$detail','$tanggal','$harga','$status','$tanggal_status', '$pic')";
    $hasil = mysql_query($query);
    //echo "<pre>";    
    //echo $query;
    // jika proses insert data sukses, maka counter $sukses bertambah
    // jika gagal, maka counter $gagal yang bertambah
    if ($hasil)
        $sukses++;
    else
        $gagal++;
}
echo "Sukses";
echo "<meta http-equiv='refresh' content='0; url=$_SERVER[HTTP_REFERER]'>";
exit();
?>