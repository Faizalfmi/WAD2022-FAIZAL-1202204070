        <!DOCTYPE html>
        <html>
        <head>
            <title>EAD Rent Car</title>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
            <link rel="stylesheet" href="Faizal_home.css">
        </head>

        <body>
        <nav class="navbar navbar-inverse center" role="navigation">
            <div class="navbar-inner">
                <ul class="nav navbar-nav">
                    <li><a href="Faizal_home.php">Home</a></li>
                    <li><a href="Faizal_booking.phpa">Booking</a></li>
                </ul>
            </div>
        </nav>

            <h2>WELCOME TO EAD RENT</h2>
            <p>Find your best deal here!</p>

            <div class="row">
                <div class="column">
                    <div class="card">
                        <img src="https://www.toyota.astra.co.id/sites/default/files/2021-11/4-avanza-silver-mica-metallic.png" alt="" style="height: 120px;">
                        <h4>Toyota Avanza</h4>
                        <p>Rp. 150000 / Day</p>
                        <hr>
                        <p id="pbiru">7 Seater</p>
                        <p id="pbiru">1500 CC</p>
                        <p id="pbiru">Automatic</p>
                        <hr>
                        <form action="Faizal_booking.php" method="POST">
                            <input type="submit" id="fbook1" name="book1" value="Book Now" >
                        </form>
                    </div>
                </div>

                <div class="column">
                    <div class="card">
                        <img src="https://daihatsu-promo.com/wp-content/uploads/2021/11/1.5-ads.png" alt="" style="height: 120px;">
                        <h4>Daihatsu Xenia</h4>
                        <p>Rp. 150000 / Day</p>
                        <hr>
                        <p id="pbiru">7 Seater</p>
                        <p id="pbiru">1500 CC</p>
                        <p id="pbiru">Automatic</p>
                        <hr>
                        <form action="Faizal_booking.php" method="POST">
                            <input type="submit" id="fbook2" name="book2" value="Book Now" >
                        </form>
                    </div>
                </div>
        
                <div class="column">
                    <div class="card">
                        <img src="https://www.toyota.astra.co.id/sites/default/files/2022-08/3-super-white.png" alt="" style="height: 120px;">
                        <h4>Toyota Yaris</h4>
                        <p>Rp. 200000 / Day</p>
                        <hr>
                        <p id="pbiru">5 Seater</p>
                        <p id="pbiru">1500 CC</p>
                        <p id="pbiru">Automatic</p>
                        <hr>
                        <form action="Faizal_booking.php" method="POST">
                            <input type="submit" id="fbook3" name="book3" value="Book Now" >
                        </form>
                    </div>
                </div>
            </div>

        <br>
        <br>
            <footer>Created By FAIZAL_1202204070</footer>
        </body>
        </html>