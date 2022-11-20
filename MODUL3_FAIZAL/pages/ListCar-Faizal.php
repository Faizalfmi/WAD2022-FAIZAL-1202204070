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
                

                

            </style>
    </head>

    <?php 
    include('C:\xampp\htdocs\MODUL3_FAIZAL\config\connector.php');
    ?>

    <body>
    <nav class="navbar navbar-inverse" role="navigation">
            <div class="navbar-inner">
                <ul class="nav navbar-nav">
                  <li><a href="Home-Faizal.php">Home</a></li>
                  <li><a href=" ">MyCar</a></li>
                  <li><a href="add-Faizal.php"><button>Add Car</button></a></li>
                </ul>
            </div>
        </nav>
    
      <?php 
      
      $query = mysqli_query($conn, "SELECT * FROM showroom_faizal_table");
      
      if($query){
        while($selects = mysqli_fetch_assoc($query)){ 
          $string = $selects['deskripsi'];
          function read_more($string)
          {
            // strip tags to avoid breaking any html
              $string = strip_tags($string);
              if (strlen($string) > 35) {

                  // truncate string
                  $stringCut = substr($string, 0, 35);
                  $endPoint = strrpos($stringCut, ' ');

                  //if the string doesn't contain any space then it will cut without word basis.
                  $string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
                  $string .= '...';
              }
              return $string;
          }
          ?>

      <div class="row row-cols-1 row-cols-md-2">
        <div class="col mb-4">
          <div class="card">
            <img src="<?=$selects['foto_mobil']?>" class="card-img-top" alt="">
            <div class="card-body">
              <h5 class="card-title"><?=$selects['nama_mobil']?></h5>
              <p class="card-text"><?php $string?></p>
              <form action="Detail-Faizal.php" method="post">
              <button style="background-color: #3563E9;" name="<?php $selects['id_mobil']?>"><a href="Detail-Faizal.php">Detail</a></button>
              </form>
              <form action="C:\xampp\htdocs\MODUL3_FAIZAL\config\Delete-Faizal.php" method="post">
              <button style="background-color: #E93535;" name="<?php $selects['id_mobil']?>"><a href="C:\xampp\htdocs\MODUL3_FAIZAL\config\Delete-Faizal.php">Delete</a></button>
              </form>
              
            </div>
          </div>
        </div>
      </div>

      <?php  }
      }
      ?>
    

      

    </body>
</html>