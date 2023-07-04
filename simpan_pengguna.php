<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$nim       = $_POST['nim'];
$nama      = $_POST['nama'];
$kelas    = $_POST['kelas'];
$jurusan       = $_POST['jurusan'];

//query insert data ke dalam database
$query = "INSERT INTO pengguna (nim, nama, kelas, jurusan) VALUES ('$nim', '$nama', '$kelas', '$jurusan')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: awalpengguna.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>