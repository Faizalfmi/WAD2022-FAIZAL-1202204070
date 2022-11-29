        <?php 


            include('connector.php');
            $email = $_POST['email'];
            $nama = $_POST['nama'];
            $hp = $_POST['hp'];
            $sandi = $_POST['sandi'];
            $confirm = $_POST['confirm'];
            
            
            $sql = "INSERT INTO user_faizal(nama, email, password, no_hp) 
                VALUES ('$nama', '$email', '$sandi', '$hp')";
            $sql_cek = "SELECT email FROM user_faizal where email = '$email'";
            $cek = $conn->query($sql_cek);

            if(mysqli_query($conn, $sql)){
                session_start();
                $_SESSION['register'] = '';
                header('location:Login-Faizal.php');
            }else {
                header('location:Register-Faizal.php');
            }

            if ($cek->num_rows > 0){
                session_start();

                while ($row = $cek -> fetch_assoc()) {
                    $email = $_POST['email'];
                    $email_cek = $row['email'];
                    $nama = $row['nama'];
                    $uid = $row['id'];
                }

                if ($email == $email_cek){
                    $_SESSION['register'] = 'gagal';
                    header('location:Register-Faizal.php');
                }

                if ($sandi != $confirm){
                    $_SESSION['register'] = 'gagal';
                    header('location:Register-Faizal.php');
                }
            }
        $conn->close();
            ?>