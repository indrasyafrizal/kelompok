<?php
$host="localhost";
$user="root";
$password="";
$db="perpustakaan";

$connection = mysqli_connect($host,$user,$password,$db);
if($connection) {
    echo "";
} else {
    echo "Koneksi Gagal! : ". mysqli_connect_error();
}
?>