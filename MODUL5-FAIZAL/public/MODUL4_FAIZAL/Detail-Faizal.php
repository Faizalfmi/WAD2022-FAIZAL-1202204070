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
            <link rel="stylesheet" href="Detail-Faizal.css">

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

form {
grid-template-columns: 200px 1fr;
grid-gap: 16px;

margin-right: 50px;
}

img {
object-fit: cover;
border-radius: 8px;
width: 120px;
}
input[type="text"],select,textarea {
grid-column: 2 / 3;
padding: 10px 18px;
margin: 7px 0;
display: inline-block;
box-sizing: border-box;
right: 15%;
width: 100%;
border: 1px solid #757575;
border-radius: 8px;
background-color: <?php echo $background?>;
}

input[type="submit"]{
width: 139px;
height: 50px;
background: #3563E9;
border-radius: 8px;
border: none;
cursor: pointer;

font-family: 'Raleway';
font-style: normal;
font-weight: 500;
font-size: 18px;
line-height: 21px;
text-align: center;
letter-spacing: 0.46px;

color: #FFFFFF;
}

#fbelum,#flunas{
font-family: 'Inter';
font-style: normal;
font-weight: 400;
font-size: 16px;
line-height: 19px;
letter-spacing: 1.2px;
text-transform: capitalize;

color: #757575;
}
.navbar li{
left: 15%;
top: 10px;
}






                
            h1{
                margin-left: 5%;
                font-family: 'Raleway';
                font-style: normal;
                font-weight: 700;
                font-size: 32px;
                line-height: 38px;
                /* identical to box height */

                letter-spacing: 1.2px;
                text-transform: capitalize;
            }
                
            p{
                margin-left: 5%;
                font-family: 'Raleway';
                font-style: normal;
                font-weight: 400;
                font-size: 16px;
                line-height: 19px;
                /* identical to box height */

                letter-spacing: 1.2px;
                text-transform: capitalize;

                
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
                    $query = mysqli_query($conn, "SELECT * FROM showroom_faizal_table WHERE id_mobil = $id");
      

                    $selects = mysqli_fetch_assoc($query)
                    ?>

            <h1><?php echo $selects['nama_mobil']?></h1>
            <p>Detail mobil <?php echo $selects['nama_mobil']?></p>
            <br>
            <div class="row">
                <div class="column">
                    
                    <img src="images/<?php echo $selects['foto_mobil']?>" alt="" style="width: 100%;" alt="">
                    
                </div>

                <div class="column">
                    <form action="Edit-Faizal.php" method="POST">
                        <label for="fcname">Nama Mobil</label><br>
                        <input type="text" name="cname" id="fcname" value="<?php echo $selects['nama_mobil']?>" readonly><br>
                        <label for="foname">Nama Pemilik</label><br>
                        <input type="text" name="oname" id="foname" value="<?php echo $selects['pemilik_mobil']?>" readonly><br>
                        <label for="fmerk">Merk</label><br>
                        <input type="text" name="merk" id="fmerk" value="<?php echo $selects['merk_mobil']?>" readonly><br>
                        <label for="ftanggal">Tanggal Beli</label><br>
                        <input type="text" name="tanggal" id="ftanggal" value="<?php echo $selects['tanggal_beli']?>" readonly><br>
                        <label for="fdesc">Deskripsi</label><br>
                        <textarea name="desc" id="fdesc" class="userInput" style="height: 147px;" readonly><?php echo $selects['deskripsi']?></textarea><br>
                        <br>
                        <label for="ffoto">Foto</label><br>
                        <input type="file" name="foto" id="ffoto" value="<?php echo $selects['foto_mobil']?>" readonly><br>
                        
                        <!-- radio -->
                        <b id="pembayaran">Status Pembayaran</b><br>
                        <br>
                        <input type="radio" name="radio" id="flunas" value="Lunas" <?php if($selects['status_pembayaran']=='Lunas') echo 'checked'?>/>
                        <label for="flunas" id="flunas" >Lunas</label>

                        <input type="radio" name="radio" id="fbelum" value="Belum Lunas" <?php if($selects['status_pembayaran']=='Belum Lunas') echo 'checked'?>/>
                        <label for="fbelum" id="fbelum" >Belum Lunas</label>
                        <br>
                        <br>

                        <input type="submit" id="fsbmt" name="<?=$id?>" value="Edit" >
                        <br>
                        <br>
                    </form>
                </div>
            </div>


        </body>
        </html>