
<!DOCTYPE html>
<html>
    <head>
        <title>Car Showroom</title>
        <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
            <link rel="stylesheet" href="Home-before-Faizal.css">

            <style>
                .navbar {

background-color: #3563E9;
float: none;
display:inline-block;

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


border-radius: 5px;
border: none;

font-family: 'Inter';
font-style: normal;
font-weight: 500;
font-size: 16px;
line-height: 19px;
text-align: center;
letter-spacing: 0.46px;




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
left: 15%;
}

#kanan{
right: 0%;
position: absolute;
}
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
                
                <li id="kanan" ><a href="Login-Faizal.php" style="color: white; float:right; right:20px;">Login</a></li>
                </ul>
            </div>
        </nav>

    <div class="row">
        <div class="column">
            <h1>Selamat Datang Di Show Room Faizal</h1>
            <p>At lacus vitae nulla sagittis scelerisque nisl. Pellentesque duis cursus vestibulum, facilisi ac, sed faucibus.</p>
            <br>
            
            
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