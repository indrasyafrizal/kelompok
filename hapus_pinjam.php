<?php

include('koneksi.php');

//get id
$id = $_GET['id'];

$query = "DELETE FROM peminjaman WHERE nim = '$id'";

if($connection->query($query)) {
    header("location: awalpinjam.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>