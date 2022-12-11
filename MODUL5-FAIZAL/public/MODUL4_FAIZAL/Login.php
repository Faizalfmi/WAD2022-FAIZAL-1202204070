<?php 
if (!isset($_SESSION)) {
    session_start();
}

require 'connector.php';
$email = $_POST['email'];
$password = $_POST['sandi'];

$data = "SELECT * FROM user_faizal WHERE email='$email' && password='$password'";
$query = mysqli_query($conn, $data);

if($_POST["cb"]=='remember' || $_POST["cb"]=='on')
                    {
                    $hour = time() + 3600 * 24 * 30;
                    setcookie('username', $email, $hour, strtotime('+7 days'));
                         setcookie('password', $password, $hour, strtotime('+7 days'));
                    }

if (mysqli_num_rows($query) > 0) {
    $result = mysqli_fetch_assoc($query);

    
        $_SESSION['email'] = $result['email'];
        $_SESSION['message'] = 'Anda berhasil login!';
        header('location:Home-Faizal.php');
        exit();
    } else {
        $_SESSION['message-error'] = 'Password anda salah, silahkan coba lagi';
        header('location:Login-Faizal.php');
        exit();
    }

$_SESSION['message-error'] = 'Gagal Login';
header('location:Login-Faizal.php');
exit();
?>