

<!DOCTYPE html>
<html>
    <head>
        <title>Register</title>
        <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
            <link rel="stylesheet" href="MODUL4_FAIZAL/Register-Faizal.css">
    </head>

    <body>
        <div class="row">
            <div class="column">
                <img src="https://wallpapercave.com/wp/wp9596637.jpg" alt="" width="100%" height="100%" style="top: 0%;">
            </div>
            <div class="column">
                
                <form action="{{ route('register.do') }}" method="POST">
                @csrf
                @method('POST')
                <h1>Register</h1>
                <br>
                <br>
                    <label for="femail">Email</label><br>
                    <input type="email" name="email" id="femail" value="" required><br>
                    <label for="fnama">Nama</label><br>
                    <input type="text" name="nama" id="fnama" value="" ><br>
                    <label for="fhp">Nomor Handphone</label><br>
                    <input type="text" name="hp" id="fhp" value="" required><br>
                    <label for="fpassword">Kata Sandi</label><br>
                    <input type="password" name="password" id="fpassword" value="" required><br>
                    <label for="fconfirm">Konfirmasi Kata Sandi</label><br>
                    <input type="password" name="confirm" id="fconfirm" value="" required><br>
                    <br>
                    <br>
                    <input type="submit" id="fsbmt" name="submit" value="Daftar" >
                    <br>
                    <br>
                    <p>Anda sudah punya akun? <a href="{{ route('login') }}">Login</a></p>
                </form>
            </div>
        </div>
    </body>
</html>