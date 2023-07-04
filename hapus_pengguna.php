<?php

include('koneksi.php');

//get id
$id = $_GET['id'];

$query = "DELETE FROM pengguna WHERE nim = '$id'";

if($connection->query($query)) {
    header("location: awalpengguna.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>