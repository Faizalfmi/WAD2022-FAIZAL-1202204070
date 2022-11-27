<?php 
if (!isset($_SESSION)){
    session_start();
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Register</title>
        <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
            <link rel="stylesheet" href="Login-Faizal.css">
    </head>
    <?php 
        if (isset($_SESSION['registrasi'])) : ?>
        <div class="alert alert-success alert-dismissable fade show fade in" role="alert">
            <?php echo $_SESSION['registrasi'];?>
            <button type="button" class="btn-close p-3" data-bs-dismiss="alert" aria-label="Close" style="width: 30px; height:30px; right:2%; top:2%; position:absolute; border:none; background-color:grey;">X</button>
        </div>
        <?php unset($_SESSION['registrasi']);
        endif;?>

    <?php 

        if (isset($_SESSION['message-error'])) : ?>
        <div class="alert alert-warning m-0 p-2 alert-dismissible" role="alert">
            <?php echo $_SESSION['message-error'];?>
            <button type="button" class="btn-close p-3" data-bs-dismiss="alert" aria-label="Close" style="width: 30px; height:30px; right:2%; top:2%; position:absolute; border:none; background-color:white;">X</button>
        </div>
        <?php unset($_SESSION['message-error']);
        endif;?>

    <body>
        <div class="row">
            <div class="column">
                <img src="https://wallpapercave.com/wp/wp9596637.jpg" alt="" width="100%" style="top: 0%; object-fit: cover;">
            </div>
            <div class="column">
                
                <form action="Login.php" method="POST">
                <h1>Login</h1>
                <br>
                <br>
                    <label for="femail">Email</label><br>
                    <input type="email" name="email" id="femail" value="" required><br>
                    
                    <label for="fsandi">Password</label><br>
                    <input type="password" name="sandi" id="fsandi" value="" required><br>
                    <br>
                    <input type="checkbox" id="cb" name="cb" value="remember">
                        <label for="cb"> Remember Me</label><br>
                    <br>
                    
                    <input type="submit" id="fsbmt" name="submit" value="Login" >
                    <br>
                    <br>
                    <p>Anda belum punya akun? <a href="Register-Faizal.php">Daftar</a></p>
                </form>
            </div>
        </div>
    </body>
</html>