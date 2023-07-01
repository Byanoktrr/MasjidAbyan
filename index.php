<?php
    require 'controller.php';
    $pewaqaff = query("SELECT * FROM waqaf")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS2/style.css">
</head>
<body>
    <!-- header -->
    <div class="nav" id="index">
            <img src="assets/wk.png" alt="">
            <h1 id="nav-tittle">SMK Wikrama Bogor</h1>  

        <ul id=list-nav>
            <li><a href="index.php">Beranda</a></li>
            <li><a href="#carawakaf">Cara Wakaf</a></li>
            <li><a href="Data.php">Data Wakaf</a></li>
            <li><a href="#gallery">Gallery</a></li>
        </ul>
    </div>
    <!-- Konten utama -->
        <div class="content-utama">
            <div class="content-isi">
                <h4>Masjid Besar SMK Wikrama Bogor</h4>
                <h1>
                    Mari <span style="color: #1F3984 ;">Tingkatkan
                    Keimanan</span> Masyarakat
                    SMK Wikrama Bogor.
                </h1>
                <!-- tombol -->
                <div class="button">
                    <a href="tambah.php" id="btn">Beri Bantuan Shodaqoh</a>
                </div>
            </div>
            <!-- gambar -->
            <img src="assets/foto-konten.png" alt="">
        </div>

        <div class="content-dana-utama">
            <div class="content-dana">
                <div class="target">
                    <p>Target Dana</p>
                    <b><h2>RP.40.000.000</h2></b>
                </div>
                <div class="dana-terkumpul">
                    <p>Total Dana Terkumpul</p>
                 <?php
                 $total_dana = 0;
                 
                 $query = "SELECT Nominal FROM waqaf";
                 $result = mysqli_query($conn, $query);

                 while ($row = mysqli_fetch_assoc($result)) {
                    $total_dana += $row['Nominal'];
                }

                $format_nominal = number_format($total_dana, 1, '.', '.');
                echo '<b><h2>Rp.'. $format_nominal . '</h2></b>';
                ?>
                </div>
                <div class="total-donatur">
                    <p>Total Donatur</p>
                    <?php $angka = 0; ?>
                    <?php foreach($pewaqaff as $waqaff) : ?>
                     <?php $angka++ ?>
                     <?php endforeach; ?>
                     <b><h2><?= $angka; ?></h2></b>
                </div>
            </div>
            <div class="runing-text">
                <marquee behavior="scroll" direction="left" scrollamount="20" class="marquee">
                    <?php foreach ($pewaqaff as $dnt) { ?>
                        <h3>
                        <?= $dnt["Nama"]; ?> Rp. <?= $dnt["Nominal"]; ?>
                        </h3>
                    <?php } ?>
                </marquee>
            </div>
        </div>
            <!-- maanfaat waqaf -->
        <div class="container-text-lewat">
            <div class="content-text-lewat">
                <h2>
                    <span style="color: #1F3984 ;" >Manfaat </span>Wakaf, infaq
                    Shodaqoh
                </h2>
            </div>
            <p>
            Berikut Adalah Beberapa Keutamaan Waqaf, Infaq
            Shodaqoh Yang akan anda dapatkan
            </p>
        </div>
        
        <div class="container-card">
            <div class="card">
                <img src="assets/hati.png" alt="">
                <h4>Menjadikan Hati Lebih Tenang</h4>
                <p>
                    Kami Memberikan Harga yang terbaik di bandingkan kompetitor kami.
                </p>
            </div>
            <div class="card">
                <img src="assets/celist.png" alt="">
                <h4>Terbukanya Pintu Rezeki</h4>
                <p>
                    Allah SWT akan membuka puntu rezeki dari arah yang tidak dikira sebelumnya.
                </p>
            </div>
            <div class="card">
                <img src="assets/tameng.png" alt="">
                <h4>Menjauhkan Dari Bahaya</h4>
                <p>
                Rasulullah SAW pernah bersabda: “Bersegeralah untuk bersedekah, karena musibah dan bencana tidak bisa mendahului sedekah."
                </p>
            </div>
            <div class="card">
                <img src="assets/bintang.png" alt="">
                <h4>Pahala Yang Tak Terputus</h4>
                <p>
                Ini akan menolong kita di akhirat nantinya, juga dapat menyelamatkannya dari api neraka.
                </p>
            </div>
        </div>

        <div  id="carawakaf" class="container-text-lewat">
            <div class="content-text-lewat">
                <h2><span style="color: #1F3984 ;" >Cara Melakukan</span> Waqaf Infaq Shodaqoh</h2>
            </div>
            <p>
                Berikut Adalah Cara Melakukan Wakaf, Infaq Shodaqoh Untuk Membantu Pembangunan Masjid
                Besar SMK Wikrama Bogor
            </p>
        </div>
        <!-- cara waqaf -->
        <div class="container-card1">
            <div class="card1">
                <h3>01</h3>
                <h4>Isi Form Data Diri</h4>
                <p>
                Isikan form pengisian yang disediakan di form data diri, isikan dengan data diri anda dengan teliti.
                </p>
            </div>
            <div class="card1">
                <h3>02</h3>
                <h4>Isikan Nominal Shodaqoh</h4>
                <p>
                Isikan nominal yang akan anda shodaqohkan, pastikan isi nominal dengan seiklasnya tanpa ada paksaan apapun.
                </p>
            </div>
        </div>
        <div class="container-card1">
            <div class="card1">
                <h3>03</h3>
                <h4>Upload Bukti Pembayaran</h4>
                <p>
                Pilih motode pembayaran dan upload bukti pembayaranya.
                </p>
            </div>
            <div class="card1">
                <h3>04</h3>
                <h4>Verifikasi Pembayaran</h4>
                <p>
                Pembayaran anda akan di verifikasi oleh admin dan jika terverifikasi nama anda akan tampil.
                </p>
            </div>
        </div>

        <div class="container-text-lewat" id="gallery">
            <div class="content-text-lewat">
                <h2>
                    <span style="color: #1F3984 ;">Gallery</span> Masjid Besar SMK Wikrama Bogor.
                </h2>
            </div>
            <p>Berikut Adalah Gallery Masjid Besar SMK Wikrama Bogor.</p>
        </div>

        <div class="container-gambar">
            <div class="gambar">
                <img src="assets/masjid.png" alt="">
            </div>
            <div class="gambar">
                <img src="assets/masjid.png" alt="">
            </div>
            <div class="gambar">
                <img src="assets/masjid.png" alt="">
            </div>
            <div class="gambar">
                <img src="assets/masjid.png" alt="">
            </div>
            <div class="gambar">
                <img src="assets/masjid.png" alt="">
            </div>
            <div class="gambar">
                <img src="assets/masjid.png" alt="">
            </div>
        </div>
        <!-- footer -->
        <footer>
            <div class="kaki-kiri">
                <div class="kiri1">
                    <div class="head-kiri1">
                        <img src="assets/wk.png" alt="">
                        <p><b>SMK Wikrama Bogor</b></p>
                    </div>
                    <h4><b>Alamat</b></h4>
                    <p>Jl.Raya Wangun
                        Kelurahan Singdasari
                        Bogor Timur 16720
                    </p>
                    <hr>
                    <h4><b>Alamat</b></h4>
                    <p>Jl.Raya Wangun
                        Kelurahan Singdasari
                        Bogor Timur 16720
                    </p>
                    <hr>
                    <div class="gambar-kaki-kiri">
                        <a href="https://twitter.com/smkwikrama">
                            <div class="logo">
                                <img src="assets/twiter.png" alt="">
                            </div>
                        </a>
                        <a href="https://web.facebook.com/smkwikrama/?locale=id_ID&_rdc=1&_rdr">
                            <div class="logo">
                                <img src="assets/fb.png" alt="">
                            </div>
                        </a>
                        <a href="https://www.youtube.com/@multimediawikrama7482">
                            <div class="logo">
                                <img src="assets/yt.png" alt="">
                            </div>
                        </a>
                        <a href="https://www.instagram.com/smkwikrama/">
                            <div class="logo">
                                <img src="assets/ig.png" alt="">
                            </div>
                        </a>
                    </div>
                </div>
                <div class="kiri2">
                    <div class="palakiri">
                        <p><b>Tentang Wikrama</b></p>
                    </div>
                    <ul>
                        <li>Sejarah</li>
                        <li>Peraturan Sekolah</li>
                        <li>Rencana Strategi & Prestasi</li>
                        <li>yayasan</li>
                        <li>Struktur Organisasi</li>
                        <li>Cabang</li>
                        <li>Penghargaan</li>
                        <li>Kerjasama</li>
                    </ul>
                </div>
            </div>
            <div class="kanan">
                <h4>Kirim pesan</h4>
                <br>
                <form id="messageForm" action="#" method="post">
                    <input placeholder="Nama" type="text" id="name" name="name" required>

                    <input placeholder="Email" type="email" id="email" name="email" required>

                    <textarea placeholder="Pesan" id="message" name="message" required></textarea>
                    <br>
                    <input type="submit" value="Kirim Pesan">
                </form>
            </div>
        </footer>
</body>
</html>