<?php

include './koneksi.php';

$nama = $_POST['nama'];
$no_hp = $_POST['no_hp'];
$alamat = $_POST['alamat'];
$jenis_buket = $_POST['jenis_buket'];
$harga = $_POST['harga'];
$tgl_diambil = $_POST['tgl_diambil'];
$waktu_diambil = $_POST['waktu_diambil'];


$query = "INSERT INTO pemesanan (nama, no_hp, alamat, jenis_buket, harga, tgl_diambil, waktu_diambil) VALUES ('$nama', '$no_hp', '$alamat', '$jenis_buket', '$harga', '$tgl_diambil', '$waktu_diambil')";

mysqli_query($koneksi, $query);

header("Location: ./index.php");

exit

?>
