<?php 
if (!isset($_SESSION)){
    session_start();
}
if(!isset($_SESSION['email'])){
    die("<b>Oops!</b> Access Failed.
        <p>Sistem Logout. Anda harus melakukan Login kembali.</p>
        <button type='button' onclick=location.href='./Home-before.php'>Back</button>");
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Profile</title>
        <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
            <link rel="stylesheet" href="Profile-Faizal.css">

            <style>
                form{
                    margin-left: 15%;
                    margin-right: 15%;
                    overflow: hidden;
                }

                .navbar {

                    background-color: #3563E9;

                    height: 79px;
                    left: 0px;
                    top: 0px;
                    width: 100%;
                    top: 0;
                    left: 0;
                    overflow-y: hidden;
                    float: none;
                    display:inline-block;
                }

                .nav .navbar-nav {
                    box-shadow: inset 0px -1px 1px rgba(0, 0, 0, 0.1);
                }

                .navbar a{
                    color: #E0E0E0;

                }

                .navbar button{
                    width: 90px;
                    height: 25px;

                    float: right;

                    background: #FFFFFF;
                    border-radius: 5px;
                    border: none;

                    font-family: 'Inter';
                    font-style: normal;
                    font-weight: 500;
                    font-size: 16px;
                    line-height: 19px;
                    text-align: center;
                    letter-spacing: 0.46px;



                    color: #3563E9;
                }

                .navbar li{
                    left: 15%;
                }

                .dropbtn {
                    width: 90px;
                    height: 25px;

                    float: right;

                    background: #FFFFFF;
                    border-radius: 5px;
                    border: none;

                    font-family: 'Inter';
                    font-style: normal;
                    font-weight: 500;
                    font-size: 16px;
                    line-height: 19px;
                    text-align: center;
                    letter-spacing: 0.46px;



                    color: #3563E9;
                }
                
                .dropbtn:hover, .dropbtn:focus {
                    background-color: #2980B9;
                }
                
                .dropdown {
                    position: absolute;
                    float: right;
                    right: 3%;
                    top: 20px;
                    
                    width: 70px;
                    height: 25px;
                }
                
                .dropdown-content {
                    display: none;
                    position: absolute;
                    background-color: #f1f1f1;
                    min-width: 160px;
                    overflow: auto;
                    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                    z-index: 1;
                }
                
                .dropdown-content a {
                    color: black;
                    padding: 12px 16px;
                    text-decoration: none;
                    display: block;
                }
                
                .dropdown a:hover {background-color: #ddd;}
                
                .show {display: block;}

                

                input[type="text"],input[type="email"],input[type="password"]select,textarea {
                    position: absolute;
                    width: 950px;
                    height: 40px;
                    left: 370px;
                    top: 277px;

                    background: #FFFFFF;
                    border: 1px solid #000000;
                    border-radius: 10px;
                    float: right;
  clear: both;
                }

                input[type="submit"]{
                    width: 110px;
                    height: 35px;
                    background: #3563E9;
                    border-radius: 8px;
                    border: none;
                    cursor: pointer;
                    display: block;

                    font-family: 'Raleway';
                    font-style: normal;
                    font-weight: 500;
                    font-size: 18px;
                    line-height: 21px;
                    text-align: center;
                    letter-spacing: 0.46px;

                    color: #FFFFFF;
                    align-content: center;
                    align-items: center;
                    margin: 0 auto;
                }

                h1 {
                    font-family: 'Raleway';
                    font-style: normal;
                    font-weight: 700;
                    font-size: 32px;
                    line-height: 38px;
                    /* identical to box height */

                    letter-spacing: 1.2px;
                    text-transform: capitalize;
                    text-align: center;
                }

                #kanan{
                    right: 12%;
position: absolute;
top: 10px;
                }
            </style>
    </head>

    <body>
        <?php
        include('connector.php');
        
        
          $tampilPeg    =mysqli_query($conn, "SELECT * FROM user_faizal WHERE email='$_SESSION[email]'");
          $peg    =mysqli_fetch_array($tampilPeg);
        ?>
        <nav class="navbar navbar-inverse" role="navigation">
            <div class="navbar-inner">
                <ul class="nav navbar-nav">
                  <li><a href="Home-Faizal.php">Home</a></li>
                  <li><a style="color: white;" href="ListCar-Faizal.php">MyCar</a></li>
                  <li id="kanan"><a href="add-Faizal.php"><button>Add Car</button></a></li>
                  
                </ul>
            </div>
        </nav>
        <div class="dropdown">
                      <button onclick="myFunction()" class="dropbtn"><?php echo $peg['nama']?> <span id="icon">expand_more</span></button>
                      <div id="myDropdown" class="dropdown-content">
                        <a href="Profile-Faizal.php">Profile</a>
                        <a href="logout.php">Logout</a>
                        
                      </div>
                    </div>

                    <script>
                      /* When the user clicks on the button, 
                      toggle between hiding and showing the dropdown content */
                      function myFunction() {
                        document.getElementById("myDropdown").classList.toggle("show");
                      }

                      // Close the dropdown if the user clicks outside of it
                      window.onclick = function(event) {
                        if (!event.target.matches('.dropbtn')) {
                          var dropdowns = document.getElementsByClassName("dropdown-content");
                          var i;
                          for (i = 0; i < dropdowns.length; i++) {
                            var openDropdown = dropdowns[i];
                            if (openDropdown.classList.contains('show')) {
                              openDropdown.classList.remove('show');
                            }
                          }
                        }
                      }
                    </script>
        
<h1>Profile</h1>
    <form action="update-profile--.php" method="POST">
                        <label for="femail">Email</label>
                        <input type="email" name="email" id="femail" value="<?php echo $peg['email']?>" readonly style="border:none;"><br>
                        <label for="fname">Nama</label>
                        <input type="text" name="name" id="fname" value="<?php echo $peg['nama']?>"><br>
                        <label for="fhp">Nomor Handphone</label>
                        <input type="text" name="hp" id="fhp" value="<?php echo $peg['no_hp']?>" ><br>
                        <label for="fsandi">Kata Sandi</label>
                        <input type="password" name="sandi" id="fsandi" value="" placeholder="Masukkan kata sandi"><br>
                        <label for="fsandi">Konfirmasi Kata Sandi</label>
                        <input type="password" name="sandi" id="fsandi" value="" placeholder="Konfirmasi kata sandi"><br>
                        <input type="submit" name="update" value="Update">
</form>
    </body>
</html>