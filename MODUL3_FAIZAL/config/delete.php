<?php 
include('C:\xampp\htdocs\MODUL3_FAIZAL\config\connector.php');

$id = $_GET['id_mobil'];
mysqli_query($conn, "DELETE FROM showroom_faizal_table WHERE id=$id");

?>