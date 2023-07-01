<?php
require 'controller.php';
    
    if( isset($_POST["submit"])){
        if(tambah($_POST) > 0){
            echo "
                <script>
                    alert('Dana Berhasil Masuk, Terimakasih');
                    document.location.href = 'tambah.php';
                </script>
                ";
        }else{
            echo "
                <script>
                    alert('Coba lagi');
                    document.location.href = 'tambah.php';
                </script>
                ";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Duid</title>
    <link rel="stylesheet" href="CSS2/tambah.css">
</head>
<body>
     <!-- header -->
     <div class="nav" id="index">
            <img src="assets/wk.png" alt="">
            <h1 id="nav-tittle">SMK Wikrama Bogor</h1>  

        <ul id=list-nav>
            <li><a href="index.php">Beranda</a></li>
            <li><a href="index.php">Cara Wakaf</a></li>
            <li><a href="Data.php">Data Wakaf</a></li>
            <li><a href="index.php">Gallery</a></li>
        </ul>
    </div>
    <!-- pengisian form -->
    <div class="containerisi">
        <div class="form-container">
            <form action="" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $waqaff["id"]?>">

                <div>
                    <label for="text">Nama: </label>
                    <input type="text" name="nama">
                </div>
                <div>
                    <label for="text">Nominal: </label>
                    <input type="number" name="Nominal">
                </div>
                <div class="metode">
                    <label for="text">Metode Pembayaran: </label>
                    <select name="MetodePembayaran" id="">
                        <option value="ShoppePay">ShoppePay</option>
                        <option value="BCA">BCA</option>
                        <option value="DANA">DANA</option>
                        <option value="OVO">OVO</option>
                    </select>
                </div>
                <div>
                    <label for="text">Bukti Pembayaran: </label>
                    <input type="file" name="buktiFoto">
                </div>
                <button type="submit" name="submit"> kirim </button>

            </form>
        </div>
    </div>
</body>
</html>