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
mysqli_query($conn, "DELETE FROM showroom_faizal_table WHERE id_mobil=$id");

if (!isset($_SESSION)) {
    session_start();
}
$_SESSION['message'] = 'Berhasil dihapus!';
header('location:ListCar-Faizal.php');
exit();



?>