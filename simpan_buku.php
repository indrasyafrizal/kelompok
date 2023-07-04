<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$id_buku       = $_POST['id_buku'];
$judul_buku      = $_POST['judul_buku'];
$penerbit    = $_POST['penerbit'];
$tahun       = $_POST['tahun'];

//query insert data ke dalam database
$query = "INSERT INTO buku (id_buku, judul_buku, penerbit, tahun) VALUES ('$id_buku', '$judul_buku', '$penerbit', '$tahun')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: awalbuku.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>