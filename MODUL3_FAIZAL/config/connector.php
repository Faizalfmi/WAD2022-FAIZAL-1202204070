<?php
    $host="localhost:8080";
    $user="root";
    $password="";
    $db="modul3_faizal";
    
    $conn = mysqli_connect($host,$user,$password,$db);
    if (!$conn){
          die("Koneksi gagal:".mysqli_connect_error());
    }
?>