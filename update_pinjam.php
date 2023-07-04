<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$nim       = $_POST['nim'];
$nama      = $_POST['nama'];
$nama_buku    = $_POST['nama_buku'];
$tgl_pinjam       = $_POST['tgl_pinjam'];


//query update data ke dalam database berdasarkan ID
$query = "UPDATE peminjaman SET nim = '$nim', nama = '$nama', nama_buku = '$nama_buku', tgl_pinjam = '$tgl_pinjam' WHERE nim = '$nim'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($connection->query($query)) {
    //redirect ke halaman index.php 
    header("location: awalpinjam.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>