<?php 
include('connector.php');


$query = mysqli_query($conn, "SELECT * FROM showroom_faizal_table");
$id = 0;
while($selects = mysqli_fetch_assoc($query)){

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    
        if (isset($_POST[$selects['id_mobil']])) {
            $id  = $selects['id_mobil'];
            
            
            };
        }
    }
    if(isset($_POST[$id])){

            
                
                    
                
        
         

        $nama_mobil = $_POST['cname'];
        $nama_pemilik = $_POST['oname'];
        $merk = $_POST['merk'];
        $tanggal = $_POST['tanggal'];
        $deskripsi = $_POST['desc'];
        $fileName = basename($_FILES["foto"]["name"]); 

    
            
    
        if(isset($_POST['radio'])){
            $pembayaran = $_POST['radio'];
            }
    
        mysqli_query($conn, "UPDATE showroom_faizal_table set nama_mobil='$nama_mobil', pemilik_mobil='$nama_pemilik', merk_mobil='$merk', tanggal_beli='$tanggal', deskripsi='$deskripsi', status_pembayaran='$pembayaran' WHERE id_mobil = $id");
        if (!isset($_SESSION)) {
            session_start();
        }
        $_SESSION['message'] = 'Data berhasil diubah!';
        header('location:ListCar-Faizal.php');
        exit();

    }
    
?>