<?php 
include "koneksi.php";

$nama = $_POST['Fnama'];
$idKategori = $_POST['idKategori'];


mysqli_query($koneksi, "INSERT INTO skincare_deden1 VALUE('$nama', '$idKategori')");
header("location:index.php");
?>