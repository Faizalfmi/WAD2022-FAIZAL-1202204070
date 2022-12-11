<?php 
include('connector.php');


$query = mysqli_query($conn, "SELECT * FROM user_faizal");
$id = 0;
while($selects = mysqli_fetch_assoc($query)){

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    
        if (isset($_POST[$selects['id']])) {
            $id  = $selects['id'];
            
            
            };
        }
    }
    if(isset($_POST[$id])){      

        $email = $_POST['email'];
        $nama = $_POST['name'];
        $hp = $_POST['hp'];
        $sandi = $_POST['sandi'];
        $confirm = $_POST['confirm'];

    
    
        mysqli_query($conn, "UPDATE user_faizal set nama='$nama', email='$email', password='$sandi', no_hp='$hp' where id='$id'");
        

    }

    $nav_color = '#3563E9';
    if(isset($_POST['nav'])){
        if($_POST["nav"]=='biru') {
            $hour = time() + 3600 * 24 * 30;
            $nav_color = '#3563E9';
            setcookie("Free_cookies", $nav_color, $hour);
            
    
        }elseif($_POST["nav"]=='merah') {
            $hour = time() + 3600 * 24 * 30;
            $nav_color = '#a93425';
            setcookie("Free_cookies", $nav_color, $hour);
            
        }
    }

    session_start();
    $_SESSION['message'] = 'Data berhasil diupdate!';

    $background = '#ffffff';
    $font = '#000000';
    if(isset($_POST['mode'])){
        if($_POST["mode"]=='terang') {
            $hour = time() + 3600 * 24 * 30;
            $background = '#ffffff';
            $font = '#000000';
            setcookie("background", $background, $hour);
            setcookie("font", $font, $hour);
            header('location:Profile-Faizal.php');
    
        }elseif($_POST["mode"]=='gelap') {
            $hour = time() + 3600 * 24 * 30;
            $background = '#1F2933';
            $font = '#F0F4F8';
            setcookie("background", $background, $hour);
            setcookie("font", $font, $hour);
            header('location:Profile-Faizal.php');
        }
    }
    
    
    
?>