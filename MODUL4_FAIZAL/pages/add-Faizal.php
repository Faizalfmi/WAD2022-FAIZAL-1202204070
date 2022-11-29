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
            <link rel=”stylesheet” href=”https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css”>
            <link rel="stylesheet" href="add-Faizal.css">

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

    <div class="container">
        <h1>Tambah Mobil</h1>
        <br>
        <p>Tambah Mobil Baru Anda Ke List Show Room</p>
        <br>

        <form action="insert.php" method="POST" enctype="multipart/form-data">
            <label for="fcname">Nama Mobil</label><br>
            <input type="text" name="cname" id="fcname" value="" placeholder="BMW I4"><br>
            <label for="foname">Nama Pemilifk</label><br>
            <input type="text" name="oname" id="foname" value="" placeholder="Faizal - 1202204070"><br>
            <label for="fmerk">Merk</label><br>
            <input type="text" name="merk" id="fmerk" value="" placeholder="BMW"><br>
            <label for="ftanggal">Tanggal Beli</label><br>
            <input type="date" name="tanggal" id="ftanggal" value="" placeholder="11/12/2022"><br>
            <label for="fdesc">Deskripsi</label><br>
            <textarea name="desc" id="fdesc" class="userInput" style="height: 147px;" placeholder="The first all-electric Gran Coupé, the BMW i4 delivers outstanding dynamics with a high level of comfort and the ideal qualities to make it your daily driver. The five-door model comes equipped with fifth-generation BMW eDrive technology for sporty performance figures – reaching up to 340 hp. With a long range of up to 591 kilometres* and five spacious full-sized seats, it is the perfect companion for any journey."></textarea><br>
            <br>
            <label for="ffoto">Foto</label><br>
            <div class="form-group">
                <input class="form-control" type="file" name="image" value="" id="ffoto"/><br>
            
            <!-- radio -->
            <b id="pembayaran">Status Pembayaran</b><br>
            <br>
            <input type="radio" name="radio" id="flunas" value="Lunas"/>
            <label for="flunas" id="flunas">Lunas</label>

            <input type="radio" name="radio" id="fbelum" value="Belum Lunas"/>
            <label for="Fbelum" id="fbelum">Belum Lunas</label>
            <br>
            <br>

            <input type="submit" id="fsbmt" name="submit" value="Selesai" >
            <br>
            <br>
        </form>
    </div>


    

    </body>
</html>