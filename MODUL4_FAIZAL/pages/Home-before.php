
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
                
            </style>
    </head>

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
                <li><a style="color: white;" href="">Home</a></li>
                <li><a href="ListCar-Faizal.php">MyCar</a></li>
                <li id="kanan" ><a href="Login-Faizal.php" style="color: white; float:right; right:20px;">Login</a></li>
                </ul>
            </div>
        </nav>

    <div class="row">
        <div class="column">
            <h1>Selamat Datang Di Show Room Faizal</h1>
            <p>At lacus vitae nulla sagittis scelerisque nisl. Pellentesque duis cursus vestibulum, facilisi ac, sed faucibus.</p>
            <br>
            <form action="ListCar-Faizal.php"><button>MyCar</button></form>
            
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