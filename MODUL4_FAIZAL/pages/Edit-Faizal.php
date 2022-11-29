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
        <title>Car Showroom</title>
        <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
            <link rel="stylesheet" href="Detail-Faizal.css">

            <style>
                

                

            </style>
    </head>

    <body>
        <nav class="navbar navbar-inverse" role="navigation">
            <div class="navbar-inner">
                <ul class="nav navbar-nav">
                  <li><a href="Home-Faizal.php">Home</a></li>
                  <li><a style="color: white;" href="ListCar-Faizal.php">MyCar</a></li>
                  <li id="kanan"><a href="add-Faizal.php"><button>Add Car</button></a></li>
                  <li id="kanan2">
                    <div class="dropdown">
                      <button onclick="myFunction()" class="dropbtn"><?php echo $peg['nama']?><span id="icon">expand_more</span></button>
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
                  </li>
                </ul>
            </div>
                </ul>
            </div>
        </nav>
            

            <div class="row">
                <div class="column">
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
                    <img src="images/<?php echo $selects['foto_mobil']?>" alt="" style="width: 100%;" alt="">
                    
                </div>

                <div class="column">
                    <form action="edit.php" method="POST">
                        <label for="fcname">Nama Mobil</label><br>
                        <input type="text" name="cname" id="fcname" value="<?php echo $selects['nama_mobil']?>"><br>
                        <label for="foname">Nama Pemilik</label><br>
                        <input type="text" name="oname" id="foname" value="<?php echo $selects['pemilik_mobil']?>"><br>
                        <label for="fmerk">Merk</label><br>
                        <input type="text" name="merk" id="fmerk" value="<?php echo $selects['merk_mobil']?>"><br>
                        <label for="ftanggal">Tanggal Beli</label><br>
                        <input type="text" name="tanggal" id="ftanggal" value="<?php echo $selects['tanggal_beli']?>"><br>
                        <label for="fdesc">Deskripsi</label><br>
                        <textarea name="desc" id="fdesc" class="userInput" style="height: 147px;"><?php echo $selects['deskripsi']?></textarea><br>
                        <br>
                        <label for="ffoto">Foto</label><br>
                        <input type="file" name="foto" id="ffoto" ><br>
                        
                        <!-- radio -->
                        <b id="pembayaran">Status Pembayaran</b><br>
                        <br>
                        <input type="radio" name="radio" id="flunas" value="Lunas" <?php if($selects['status_pembayaran']=='Lunas') echo 'checked'?>/>
                        <label for="flunas" id="flunas" >Lunas</label>

                        <input type="radio" name="radio" id="fbelum" value="Belum Lunas" <?php if($selects['status_pembayaran']=='Belum Lunas') echo 'checked'?>/>
                        <label for="fbelum" id="fbelum" >Belum Lunas</label>
                        <br>
                        <br>

                        <input type="submit" id="fsbmt" name="<?=$id?>" value="Simpan" >
                        <br>
                        <br>
                    </form>
                </div>
            </div>


        </body>
        </html>