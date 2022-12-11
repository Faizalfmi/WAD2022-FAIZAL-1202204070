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
            <link rel="stylesheet" href="ListCar-Faizal.css">

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

              .col {
              float: left;
              width: 40%;
              padding: 20px 110px;
              margin: auto;
              }

              /* Remove extra left and right margins, due to padding */
              .row {
              margin: auto;
              display: block;
              align-content: center;
              align-items: center;
              margin-left: 5%;

              }

              /* Clear floats after the columns */
              .row:after {
              content: "";
              display: table;
              clear: both;
              }

              /* Responsive columns */
              @media screen and (max-width: 600px) {
              .col {
                width: 100%;
                display: block;
                margin-bottom: 20px;
              }
              }
              .card {

              padding: 16px;
              text-align: left;
              background-color: <?php echo $background?>;
              /* width: 400px;
              height: 400px; */
              box-shadow: 6px 14px 40px rgba(210, 210, 210, 0.6);
              border-radius: 16px;
              float: left;
              position: auto;
              }

              .card img {
              object-fit: cover;
              width: 368px;
              height: 225px;
              left: 16px;
              top: 16px;

              border-radius: 8px;
              }

              .card h5 {
              font-family: 'Raleway';
              font-style: normal;
              font-weight: 600;
              font-size: 24px;
              line-height: 32px;
              }

              .card input[type='submit']{

              flex-direction: row;
              align-items: center;
              float: left;
              margin-left: 10%;
              width: 120px;
              height: 36px;


              border-radius: 100px;
              border: none;

              justify-content: center;

              cursor: pointer;
              }

              .card a{
              font-family: 'Inter';
              font-style: normal;
              font-weight: 500;
              font-size: 14px;
              line-height: 20px;
              /* identical to box height, or 143% */

              letter-spacing: 0.15px;

              color: #FFFFFF;
              }

              h1 {
              margin-left: 15%;
              font-family: 'Raleway';
              font-style: normal;
              font-weight: 700;
              font-size: 32px;
              line-height: 38px;
              /* identical to box height */

              letter-spacing: 1.2px;
              text-transform: capitalize;

              
              }

              #pawal{
              margin-left: 15%;
              font-family: 'Raleway';
              font-style: normal;
              font-weight: 400;
              font-size: 16px;
              line-height: 19px;
              /* identical to box height */

              letter-spacing: 1.2px;
              text-transform: capitalize;

              
              }

              .navbar li{
              left: 15%;
              top: 10px;
              }


              #kanan{
              right: 12%;
              position: absolute;
              top: 10px;
              }

              #row{
              margin-left: 15%;
              margin-bottom: 5%;
              font-family: 'Raleway';
              font-style: normal;
              font-weight: 700;
              font-size: 16px;
              line-height: 19px;
              /* identical to box height */

              letter-spacing: 1.2px;
              text-transform: capitalize;

              color: #757575;
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
<div class="alert alert-success alert-dismissable fade show fade in" role="alert" style="position: fixed; right:3%; bottom:3%;">
    <?php echo $_SESSION['message'];?>
    <button type="button" class="btn-close p-3" data-bs-dismiss="alert" aria-label="Close" style="width: 30px; height:30px; right:2%; top:25%; position:absolute; border:none; background-color:none;">X</button>
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
        <h1>My Show Room</h1>
        <p id="pawal">List Show Room Faizal - 1202204070</p>

        <div class="row row-cols-1 row-cols-md-2">
      <?php 
      
      $query = mysqli_query($conn, "SELECT * FROM showroom_faizal_table");

      
      if($query){
        while($selects = mysqli_fetch_assoc($query)){ 
          $str = $selects['deskripsi'];

          if (strlen($str) > 100)
            $str = substr($str, 0, 100) . '...';
          
          ?>

      
        <div class="col mb-4">
          <div class="card">
            <img src="images/<?=$selects['foto_mobil']?>" class="card-img-top" alt="">
            <div class="card-body">
              <h5 class="card-title"><?=$selects['nama_mobil']?></h5>
              <p class="card-text" style="color: #6B6B6B;"><?=$str?></p>
              <form action="Detail-Faizal.php" method="POST">
                <input type="submit" style="background-color: #3563E9; color:white; display: inline-block; " name="<?=$selects['id_mobil']?>" value="Detail">

              </form>
              <form action="delete.php" method="POST">
                <input type="submit" id="liveToastBtn" style="background-color: #E93535; color:white; display: inline-block;" name="<?=$selects['id_mobil']?>" value="Delete">
              
              </form>
              
            </div>
          </div>
        </div>
      

      <?php  }
      }

      ?>
    
    </div>

    <!-- <div class="toast-container position-fixed bottom-0 end-0 p-3">
  <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header">
      <img src="..." class="rounded me-2" alt="...">
      <strong class="me-auto">Alert</strong>
      
      <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div class="toast-body">
      Data berhasil dihapus.
    </div>
  </div>
</div>

<script>
  const toastTrigger = document.getElementById('liveToastBtn')
const toastLiveExample = document.getElementById('liveToast')
if (toastTrigger) {
  toastTrigger.addEventListener('click', () => {
    const toast = new bootstrap.Toast(toastLiveExample)

    toast.show()
  })
}
</script> -->
    <br>
    <br>
<div id="row">
<?php 
$row = mysqli_num_rows($query);
echo("Jumlah mobil: $row");
?>

</div>  

    </body>
</html>