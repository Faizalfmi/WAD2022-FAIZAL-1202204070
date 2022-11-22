<?php 
include('C:\xampp\htdocs\MODUL3_FAIZAL\config\connector.php');


$id = $_POST['id_mobil'];
$nama_mobil = $_POST['cname'];
$nama_pemilik = $_POST['oname'];
$merk = $_POST['merk'];
$nama_mobil = $_POST['tanggal'];
$deskripsi = $_POST['desc'];
$foto = $_POST['foto'];
mysqli_query($conn, "UPDATE FROM showroom_faizal_table WHERE id=$id");

?>