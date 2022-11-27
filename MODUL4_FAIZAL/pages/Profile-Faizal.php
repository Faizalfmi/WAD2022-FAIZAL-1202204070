<!DOCTYPE html>
<html>
    <head>
        <title>Profile</title>
    </head>

    <body>
        <?php
        include('connector.php');
        
        ?>
    <form action="Edit-Faizal.php" method="POST">
                        <label for="fcname">Nama Mobil</label>
                        <input type="text" name="cname" id="fcname" value="" readonly><br>
                        <label for="foname">Nama Pemilik</label>
                        <input type="text" name="oname" id="foname" value="" readonly><br>
                        <label for="fmerk">Merk</label>
                        <input type="text" name="merk" id="fmerk" value="" readonly><br>
                        <label for="ftanggal">Tanggal Beli</label>
                        <input type="text" name="tanggal" id="ftanggal" value="" readonly><br>
                        <label for="fdesc">Deskripsi</label>
                        
</form>
    </body>
</html>