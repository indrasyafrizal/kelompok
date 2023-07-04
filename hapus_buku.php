<?php

include('koneksi.php');

//get id
$id = $_GET['id'];

$query = "DELETE FROM buku WHERE id_buku = '$id'";

if($connection->query($query)) {
    header("location: awalbuku.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>