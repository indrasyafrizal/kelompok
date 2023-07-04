<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$id_buku     = $_POST['id_buku'];
$judul_buku        = $_POST['judul_buku'];
$penerbit = $_POST['penerbit'];
$tahun       = $_POST['tahun'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE buku SET id_buku = '$id_buku', judul_buku = '$judul_buku', penerbit = '$penerbit', tahun = '$tahun' WHERE id_buku = '$id_buku'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($connection->query($query)) {
    //redirect ke halaman index.php 
    header("location: awalbuku.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>