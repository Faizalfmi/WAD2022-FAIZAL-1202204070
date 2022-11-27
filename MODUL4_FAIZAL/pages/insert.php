<?php 


    include('connector.php');
    $nama_mobil = $_POST['cname'];
    $nama_pemilik = $_POST['oname'];
    $merk = $_POST['merk'];
    $tanggal = $_POST['tanggal'];
    $deskripsi = $_POST['desc'];
    
    $status = $statusMsg = ''; 
if(isset($_POST["submit"])){ 
    
    $status = 'error'; 
    if(!empty($_FILES["image"]["name"])) { 
        // Get file info 
        $fileName = basename($_FILES["image"]["name"]); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
         
        // Allow certain file formats 
        $allowTypes = array('jpg','png','jpeg','gif'); 
        if(in_array($fileType, $allowTypes)){ 
            $image = $_FILES['image']['tmp_name']; 
            $imgContent = addslashes(file_get_contents($image)); 
         
            // Insert image content into database 
            
        }else{ 
            $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.'; 
        } 
    }else{ 
        $statusMsg = 'Please select an image file to upload.'; 
    } 
} 
 
// Display status message 
echo $statusMsg; 

    if(isset($_POST['radio'])){
    $pembayaran = $_POST['radio'];
    }

    $query = mysqli_query($conn, "INSERT INTO showroom_faizal_table(
        nama_mobil, pemilik_mobil, merk_mobil, tanggal_beli, deskripsi, foto_mobil, status_pembayaran) 
        VALUE ('$nama_mobil', '$nama_pemilik', '$merk', '$tanggal', '$deskripsi', '$fileName', '$pembayaran')");

    if($query){
        echo "<script>alert('Data Telah Ditambahkan')</script>";
        echo "<meta>http-equiv='refresh' content='1 url='ListCar-Faizal.php";
        header('location:ListCar-Faizal.php');
    }else {
        echo "<script>alert('Gagal Ditambahkan')</script>";
        echo "<meta>http-equiv='refresh' content='1 url='ListCar-Faizal.php";
        header('location:ListCar-Faizal.php');
    }

    ?>