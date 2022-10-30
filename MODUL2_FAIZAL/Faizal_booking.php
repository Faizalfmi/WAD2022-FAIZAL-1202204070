<!DOCTYPE html>
<html>
    <head>
        <title>Booking</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="Faizal_booking.css">
    </head>
    <style>.navbar.center .navbar-inner {
    text-align: center;
  }
  .navbar.center .navbar-inner .nav {
    float: none;
    display:inline-block;
    vertical-align: middle;
  }</style>
    <body>
    <nav class="navbar navbar-inverse center" role="navigation">
    <div class="navbar-inner">
        <ul class="nav navbar-nav">
            <li><a href="Faizal_home.php">Home</a></li>
            <li><a href="Faizal_booking.php">Booking</a></li>
        </ul>
    </div>
</nav>
    

    <div class="row">
        <div class="column">
            <?php 
            $gambar = "https://www.toyota.astra.co.id/sites/default/files/2021-11/4-avanza-silver-mica-metallic.png";
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                // Something posted
              
                if (isset($_POST['book3'])) {
                    $gambar  = "https://www.toyota.astra.co.id/sites/default/files/2022-08/3-super-white.png";
                } else if (isset($_POST['book2'])) {
                    $gambar  = "https://daihatsu-promo.com/wp-content/uploads/2021/11/1.5-ads.png";
                } else {
                  $gambar  = "https://www.toyota.astra.co.id/sites/default/files/2021-11/4-avanza-silver-mica-metallic.png";
                }
              }
                
            
            ?>
            <img src=<?php echo $gambar;?> alt="" style="width: 100%;" alt="">
            
        </div>

        <div class="column">
            <form action="Faizal_my booking.php" method="GET">
                <label for="fnama">Name</label><br>
                <input type="text" name="nama" id="fnama" value="Faizal_1202204070" readonly><br>
                <label for="fbook">Book Date</label><br>
                <input type="date" name="book" id="fbook" value=""><br>
                <label for="fstart">Start Time</label><br>
                <input type="time" name="start" id="fstart" value=""><br>
                <label for="fhari">Duration (Days)</label><br>
                <input type="number" name="hari" id="fhari" value=""><br>
                <label for="fjenis">Car Type</label><br>
                <select name="jenis" id="fjenis">
                    <optgroup label="Car Type">
                        <option value="Toyota Avanza">Toyota Avanza</option>
                        <option value="Daihatsu Xenia">Daihatsu Xenia</option>
                        <option value="Toyota Yaris">Toyota Yaris</option>
                    </optgroup>
                </select>
                <label for="fhp">Phone Number</label><br>
                <input type="text" name="hp" id="fhp" value=""><br>
                <br>

                <!-- checkbox -->
                <p>Add Service(s)</p>
                <input type="checkbox" id="cb1" name="cb1" value="Health Protocol">
                <label for="cb1"> Health Protocol /Rp25.000</label><br>
                <input type="checkbox" id="cb2" name="cb2" value="Driver">
                <label for="cb2"> Driver /Rp200.000</label><br>
                <input type="checkbox" id="cb3" name="cb3" value="Fuel Filled">
                <label for="cb3"> Fuel Filled /Rp250.000</label><br>

                <input type="submit" id="fsbmt" name="submit" value="Book" >
            </form>
        </div>
    </div>

    <?php 
    $pilihan = isset($_GET['jenis']) ? $_GET['jenis'] : '';
    if($pilihan=="Toyota Avanza"){
        $gambar  = "https://www.toyota.astra.co.id/sites/default/files/2021-11/4-avanza-silver-mica-metallic.png";
    }elseif($pilihan=="Daihatsu Xenia"){
        $gambar  = "https://daihatsu-promo.com/wp-content/uploads/2021/11/1.5-ads.png";
    }elseif($pilihan=="Toyota Yaris"){
        $gambar  = "https://www.toyota.astra.co.id/sites/default/files/2022-08/3-super-white.png";
    }
    ?>


    <footer>Created By FAIZAL_1202204070</footer>
</body>
</html>