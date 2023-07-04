<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$nim       = $_POST['nim'];
$nama      = $_POST['nama'];
$nama_buku    = $_POST['nama_buku'];
$tgl_pinjam       = $_POST['tgl_pinjam'];

//query insert data ke dalam database
$query = "INSERT INTO peminjaman (nim, nama, nama_buku, tgl_pinjam) VALUES ('$nim', '$nama', '$nama_buku', '$tgl_pinjam')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: awalpinjam.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>