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
    include('connector.php');
    ?>

    <body>
    <nav class="navbar navbar-inverse" role="navigation">
            <div class="navbar-inner">
                <ul class="nav navbar-nav">
                  <li><a href="Home-Faizal.php">Home</a></li>
                  <li><a style="color: white;" href=" ">MyCar</a></li>
                  <li id="kanan"><a href="add-Faizal.php"><button>Add Car</button></a></li>
                  <li id="kanan2">
                    <div class="dropdown">
                      <button onclick="myFunction()" class="dropbtn">nama <span id="icon">expand_more</span></button>
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
        </nav>
    
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