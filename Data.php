<?php
    require 'controller.php';
    $pewaqaf = query("SELECT * FROM waqaf");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pewaqaf</title>
    <link rel="stylesheet" href="CSS2/style.css">
    <style>
    .content-text{
        text-align: center;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }
    
    th, td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }
    
    th {
        background-color: #f2f2f2;
    }
    
    tr:hover {
        background-color: #f5f5f5;
    }
    </style>
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
    <div class="content-text">
        <h1>Data Pewaqaf</h1>
    </div>
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>ID waqaf</th>
                <th>Nominal</th>
                <th>Metode Pembayaran</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1001 ?>
            <?php foreach( $pewaqaf as $waqaff) { ?>
                <tr>
                    <td><?= $waqaff["Nama"] ?></td>
                    <td><?= $i++ ?></td>
                    <td>Rp. <?= $waqaff["Nominal"] ?></td>
                    <td><?= $waqaff["MetodePembayaran"] ?></td>
                </tr>
            <?php $i++ ?>    
            <?php }?>
        </tbody>
    </table>
</body>
</html>
