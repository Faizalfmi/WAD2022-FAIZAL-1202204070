<?php 


    include('C:\xampp\htdocs\MODUL3_FAIZAL\config\connector.php');
    $nama_mobil = $_POST['cname'];
    $nama_pemilik = $_POST['oname'];
    $merk = $_POST['merk'];
    $tanggal = $_POST['tanggal'];
    $deskripsi = $_POST['desc'];
    $foto = $_POST['foto'];
    $pembayaran = $_POST['radio'];

    $query = mysqli_query($conn, "INSERT INTO showroom_faizal_table(
        nama_mobil, pemilik_mobil, merk_mobil, tanggal_beli, deskripsi, foto_mobil, status_pembayaran) 
        VALUES ('$nama_mobil', '$nama_pemilik', '$merk', '$tanggal', '$deskripsi', '$foto', '$pembayaran')");

    if($query){
        echo "<script>alert('Data Telah Ditambahkan')</script>";
        echo "<meta>http-equiv='refresh' content='1 url=index.php'";
    }else {
        echo "<script>alert('Gagal Ditambahkan')</script>";
        echo "<meta>http-equiv='refresh' content='1 url=index.php'";
    }
    ?>