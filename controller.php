<?php
$conn = mysqli_connect("localhost","root","","db-masjid");
function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $container = [];
    while($object = mysqli_fetch_assoc($result)){
        $container[] = $object;
    }
    return $container;
}

function tambah( $data ){
    global $conn;
    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $Nominal = htmlspecialchars($data["Nominal"]);
    $MetodePembayaran = htmlspecialchars($data["MetodePembayaran"]);
    $buktiFoto = htmlspecialchars($data["buktiFoto"]);

    $buktiFoto = upload();
    if(!$buktiFoto){
        return false;
    }

    $query = "INSERT INTO waqaf
                    VALUES
        ('','$nama','$Nominal','$MetodePembayaran','$buktiFoto')";
        mysqli_query($conn, $query);
        return mysqli_affected_rows($conn);
}

function upload(){
    $namaFile = $_FILES['buktiFoto']['name'];
    $ukuranFile = $_FILES['buktiFoto']['size'];
    $error = $_FILES['buktiFoto']['error'];
    $tmpName = $_FILES['buktiFoto']['tmp_name'];

    //cek apakah tidak ada gambar yang di upload
    if( $error === 4){
        echo "<script>
        alert('pilih gambar terlebih dahulu!');
        document.location.href= 'tambah.php';
      </script>";
      
      return false;
    }

    //cek apakah yang di upload adalah gambar
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png', 'gif'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if( !in_array($ekstensiGambar, $ekstensiGambarValid) ){
        echo "<script>
        alert('pilih gambar terlebih dahulu!');
        document.location.href= 'tambah.php';
      </script>";

      return false;
    }

    //max 5mb
    if( $ukuranFile > 5000000 ){
        echo "<script>
        alert('ukuran gambar terlalu besar!');
        document.location.href= 'tambah.php';
      </script>";

      return false;
    }

    // lolos pengecekan, gambar siap di upload
    // generete nnama gambar baru
    $namaFileBaru = uniqid();
    $namaFileBaru = ".";
    $namaFileBaru = $ekstensiGambar;
    
    move_uploaded_file($tmpName, 'assets/' . $namaFileBaru);

    return $namaFileBaru;
}