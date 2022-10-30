<!DOCTYPE html>
<html>
    <head>
        <title>My Booking</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="Faizal_my booking.css">
    </head>
    <style>
        .table tbody{
            background-color: rgb(226, 229, 231);
        }
        footer{
            height: 50px;
            background-color: #f0e9f3;
            text-align: center;
            margin-bottom: 0%;
        }
        td{
            text-align: left;
        }


        .navbar.center .navbar-inner {
  text-align: center;
}
.navbar.center .navbar-inner .nav {
  float: none;
  display:inline-block;
  vertical-align: middle;
}
    </style>

    <body>
    <nav class="navbar navbar-inverse center" role="navigation">
    <div class="navbar-inner">
        <ul class="nav navbar-nav">
            <li><a href="Faizal_home.php">Home</a></li>
            <li><a href="Faizal_booking.php">Booking</a></li>
        </ul>
    </div>
</nav>

    <?php
        $nama = isset($_GET['nama']) ? $_GET['nama'] : '';
        $book = isset($_GET['book']) ? $_GET['book'] : '';
        $start = isset($_GET['start']) ? $_GET['start'] : '';
        $hari = isset($_GET['hari']) ? $_GET['hari'] : '';
        $jenis = isset($_GET['jenis']) ? $_GET['jenis'] : '';
        $hp = isset($_GET['hp']) ? $_GET['hp'] : '';
        $cb1 = isset($_GET['cb1']) ? $_GET['cb1'] : '';
        $cb2 = isset($_GET['cb2']) ? $_GET['cb2'] : '';
        $cb3 = isset($_GET['cb3']) ? $_GET['cb3'] : '';


        
        $checkout = date('Y-m-d', strtotime($book . "+$hari days"));

        $bayar = 0;

        if($jenis=='Toyota Avanza'){
            $bayar+=150000;
            $bayar*=$hari;
        }elseif($jenis=="Daihatsu Xenia"){
            $bayar+=150000;
            $bayar*=$hari;
        }elseif($jenis=="Toyota Yaris"){
            $bayar+=200000;
            $bayar*=$hari;
        };

        if($cb1!=null){
            $bayar+=25000;
        };

        if($cb2!=null){
            $bayar+=200000;
        };

        if($cb3!=null){
            $bayar+=250000;
        };
    ?>

    <div class="container">
        <h2 style="text-align: center;">Thank You <?php echo $nama;?> for Reserving</h2>
        <p style="text-align: center;">Please double check your reservation details</p>
        <table class="table">
            <thead>
                <tr>
                    <th>Booking Number</th>
                    <th>Name</th>
                    <th>Check In</th>
                    <th>Check Out</th>
                    <th>Car Type</th>
                    <th>Phone Number</th>
                    <th>Service(s)</th>
                    <th>Total Price</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    
                    <td style="font-weight: bold;"><?php echo rand(1200000000, 1290000000);?></td>
                    <td style="text-align: left;"><?php echo $nama;?></td>
                    <td style="text-align: left;"><?php echo $book, " ", $start;?></td>
                    <td style="text-align: left;"><?php echo $checkout, " ", $start;?></td>
                    <td style="text-align: left;"><?php echo $jenis;?></td>
                    <td style="text-align: left;"><?php echo $hp;?></td>
                    <td style="text-align: left;"><ul>
                        <?php if($cb1!=null){?>
                        <li><?php echo $cb1;?></li><?php }?>
                        <?php if($cb2!=null){?>
                        <li><?php echo $cb2;?></li><?php }?>
                        <?php if($cb3!=null){?>
                        <li><?php echo $cb3;?></li><?php }?>
                        <?php if($cb1 == null and $cb2 == null and $cb3 == null){ echo"No service";};?>
                    </ul></td>
                    <td style="text-align: left;"><?php echo $bayar;?></td>
                </tr>
            </tbody>
        </table>
    </div>

<br>
<br>
<br>
<br>
<br>
<br>

    <footer>Created By FAIZAL_1202204070</footer>
    </body>
</html>