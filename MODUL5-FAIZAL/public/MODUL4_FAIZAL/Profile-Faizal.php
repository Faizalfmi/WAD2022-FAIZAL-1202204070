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

<?php
    include('connector.php');
        
    $tampilPeg    =mysqli_query($conn, "SELECT * FROM user_faizal WHERE email='$_SESSION[email]'");
    $peg    =mysqli_fetch_array($tampilPeg);

    $color = '#3563E9';
    if(isset($_COOKIE['Free_cookies'])) {
        $color = $_COOKIE['Free_cookies'];
    }

    $background = '#ffffff';
    $font = '#000000';
    if(isset($_COOKIE['background'])) {
        $background = $_COOKIE['background'];
    }

    if(isset($_COOKIE['font'])) {
        $font = $_COOKIE['font'];
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
                body{
                    background-color: <?php echo $background?>;
                    color: <?php echo $font?>;
                }
                form{
                    margin-left: 25%;
                    margin-right: 25%;
                    overflow: hidden;
                }

                .navbar {

                    background-color: <?php echo $color?>;

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



                    color: <?php echo $color?>;
                }

                .navbar li{
                    left: 15%;
                    top: 10px;
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



                    color: <?php echo $color?>;
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

                

                input[type="text"],input[type="email"],input[type="password"], select{
                    grid-column: 2 / 3;
                    padding: 6px 10px;
                    margin: 7px 0;
                    display: inline-block;
                    box-sizing: border-box;

                    width: 100%;
                    border: 1px solid #757575;
                    border-radius: 8px;
                    background-color: <?php echo $background?>;
                }

                .label {
                    top: 10px;
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

                .column {
                    float: left;
                    width: 40%;
                    padding: 10px;
                    margin-left: 5%;
                    margin-right: 5%;
                }
  
                /* Clear floats after the columns */
                .row:after {
                    content: "";
                    display: table;
                    clear: both;
                }
            </style>
    </head>
    <?php
    if (isset($_SESSION['message'])) : ?>
<div class="alert alert-success alert-dismissable fade show fade in" role="alert" style="position: fixed; z-index:9999;">
    <?php echo $_SESSION['message'];?>
    <button type="button" class="btn-close p-3" data-bs-dismiss="alert" aria-label="Close" style="width: 30px; height:30px; right:2%; top:2%; position:absolute; border:none; background-color:grey;">X</button>
</div>
<?php unset($_SESSION['message']);
endif;?>
    <body>
        

        
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
                      <button onclick="myFunction()" class="dropbtn" style="width: fit-content; height:fit-content;"><?php echo $peg['nama']?></button>
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
    <form action="update_profile.php" method="POST">
        <div class="row">
            <div class="column">
                <br>
                <label for="femail">Email</label><br>
                <br>
                <label for="fname">Nama</label><br>
                <br>
                <label for="fhp">Nomor Handphone</label><br>
                <br>
                <label for="fsandi">Kata Sandi</label><br>
                <br>
                <label for="fsandi">Konfirmasi Kata Sandi</label><br>
                <br>
                <label for="nav">Warna Navbar</label><br>
                <br>
                <label for="mode">Mode Tampilan</label>
            </div>
            <div class="column">
                <input type="email" name="email" id="femail" value="<?php echo $peg['email']?>" readonly style="border:none;">
                <input type="text" name="name" id="fname" value="<?php echo $peg['nama']?>">
                <input type="text" name="hp" id="fhp" value="<?php echo $peg['no_hp']?>" >
                <input type="password" name="sandi" id="fsandi" value="" placeholder="Masukkan kata sandi">
                <input type="password" name="confirm" id="fconfirm" value="" placeholder="Konfirmasi kata sandi">
                <select name="nav" id="nav">
                    <option value="biru">Biru</option>
                    <option value="merah">Merah</option>
                </select>
                <select name="mode" id="mode">
                    <option value="terang">Terang</option>
                    <option value="gelap">Gelap</option>
                </select>
            </div>
        </div>
                        
                        

                        
                        <input type="submit" name="<?php echo $peg['id']?>" value="Update">
</form>
    </body>
</html>