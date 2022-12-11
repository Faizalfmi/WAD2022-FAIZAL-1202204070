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
        <title>Car Showroom</title>
        <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
            <link rel="stylesheet" href="Home-Faizal.css">

            <style>
              body{
                    background-color: <?php echo $background?>;
                    color: <?php echo $font?>;
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

                .column {
                float: left;
                width: 40%;

                margin-left: 5%;
                margin-right: 5%;
                margin-top: 100px;

                }

                /* Clear floats after the columns */
                .row:after {
                content: "";
                display: table;
                clear: both;
                }

                h1 {
                font-family: 'raleway';
                font-style: normal;
                font-weight: 700;
                font-size: 56px;
                line-height: 66px;
                letter-spacing: 1.2px;
                text-transform: capitalize;
                }

                p{
                font-family: 'Raleway';
                font-style: normal;
                font-weight: 400;
                font-size: 20px;
                line-height: 23px;
                letter-spacing: 0.2px;
                color: #757575;
                }
                form button {
                display: flex;
                flex-direction: row;
                align-items: center;
                padding: 15px 40px;
                gap: 10px;

                width: 137px;
                height: 51px;

                /* light/primary/origin */

                background: #3563E9;
                border-radius: 5px;
                border: none;
                color: white;
                text-align: center;

                /* Inside auto layout */

                flex: none;
                order: 1;
                flex-grow: 0;
                }

                #logo {
                position: absolute;
                width: 105.43px;
                height: 30px;
                top: 530px;


                background: url(logo-ead);
                }

                #nama {
                position: absolute;

                height: 14px;
                left: 240px;
                top: 540px;

                font-family: 'Raleway';
                font-style: normal;
                font-weight: 500;
                font-size: 12px;
                line-height: 14px;
                /* identical to box height */

                text-align: center;
                letter-spacing: 0.46px;

                color: #757575;
                }
                .navbar li{
                  top: 10px;
                left: 15%;
                }
                #kanan{
                  right: 12%;
                position: absolute;
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

                right: 3%;
                top: 20px;
                display: inline-block;
                width: 70px;
                height: 25px;
                }

                .dropdown-content {
                display: none;
                position: absolute;
                background-color: #f1f1f1;
                min-width: 90px;
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
    <?php 
    include('connector.php');
        $nav = '';
        $query = "SELECT 'nama_mobil' FROM showroom_faizal_table";
        $result = $conn->query($query);

        if ($result->num_rows > 0) {
        // output data of each row
            $nav = 'ListCar-Faizal.php';
        } else {
            $nav = "add-Faizal.php";
        }
        $conn->close();
        ?>
    <nav class="navbar navbar-inverse" role="navigation">
            <div class="navbar-inner">
                <ul class="nav navbar-nav">
                <li><a style="color: white;" href="Home-Faizal.php">Home</a></li>
                <li><a href="<?php echo $nav?>">MyCar</a></li>
                <li id="kanan"><a href="add-Faizal.php"><button>Add Car</button></a></li>
                
                </ul>
            </div>
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

    <div class="row">
        <div class="column">
            <h1>Selamat Datang Di Show Room Faizal</h1>
            <p>At lacus vitae nulla sagittis scelerisque nisl. Pellentesque duis cursus vestibulum, facilisi ac, sed faucibus.</p>
            <br>
            <form action="<?php echo $nav?>" id="mycar"><button>MyCar</button></form>
            
            <br>
            <img src="logo-ead.png" alt="" id="logo">
            <p id="nama">Faizal - 1202204070</p>
        </div>

        <div class="column">
            <img src="https://libertywalk.co.jp/wp-content/uploads/slider87/260A8193.jpeg" style="width: 100%;" alt="">
        </div>
    </div>
    </body>
</html>