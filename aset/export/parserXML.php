<?php
include "config/koneksi.php";

//Query Parsing//Query Parsing
$query = "SELECT id_barang,nama_barang FROM barang WHERE id_kategori=$id_kat and nama_barang LIKE '%$_POST[barang]%'";
$result = mysql_query($query);

$databarang = array ();
while ($data = mysql_fetch_array($result)){
	$databarang [] = array('id' => $data ['id'],
	'id_barang' => $data['id_barang'],
	'nama_barang' => $data['nama_barang'],
	'id_kategori' => $data['id_kategori'],
	'nama_kategori' => $data['nama_kategori']);
}

//Parsing to XML
$document = new DOMDocument ();
$document->formatOutput = true;
$root = $document->createElement("informasi");
$document->appendChild($root);
foreach($databarang as $barang){
	$block=$document->createElement("barang");
	
	$id=$document->createElement("id_barang");
	$id->appendChild($document->createTextNode($barang['id_barang']));
	$block->appendChild($id);

	$namaBarang = $document->createElement("nama_barang");
	$namaBarang->appendChild($document->createTextNode ($barang['nama_barang']));
	$block->appendChild($namaBarang);

	$idKategori = $document->createElement("id_kategori");
	$idKategori->appendChild($document->createTextNode ($barang['id_kategori']));
	$block->appendChild($idKategori);
	
	$namaKategori = $document->createElement("nama_kategori");
	$namaKategori->appendChild($document->createTextNode ($barang['nama_kategori']));
	$block->appendChild($namaKategori);
	
	
	$root->appendChild($block);
}
	
//Save to XML Format
$generateXML = $document->save("barang.xml");
if($generateXML){
	echo "OK generate XML<br />";
}else{
	echo "ERROR generate XML<br />";
}

?>
