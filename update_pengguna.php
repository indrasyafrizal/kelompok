<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$nim       = $_POST['nim'];
$nama      = $_POST['nama'];
$kelas   = $_POST['kelas'];
$jurusan      = $_POST['jurusan'];


//query update data ke dalam database berdasarkan ID
$query = "UPDATE pengguna SET nim = '$nim', nama = '$nama', kelas = '$kelas', jurusan = '$jurusan' WHERE nim = '$nim'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($connection->query($query)) {
    //redirect ke halaman index.php 
    header("location: awalpengguna.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>