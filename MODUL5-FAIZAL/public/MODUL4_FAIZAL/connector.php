<?php
    $host="localhost";
    $user="root";
    $password="";
    $db="wad_modul4_faizal";
    
    $conn = mysqli_connect($host,$user,$password,$db,3325);
    if (!$conn){
          die("Koneksi gagal:".mysqli_connect_error());
    }
?>