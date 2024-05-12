<?php
    $barcode = $_POST['barcode'];
    $nama_barang = $_POST['nama_barang'];
    $harga = $_POST['harga'];

    $temp = $_FILES['gambar']['tmp_name'];
    $name = $_FILES['gambar']['name'];
    $size = $_FILES['gambar']['size'];
    $type = $_FILES['gambar']['type'];
    $folder = "./images/produk/";
   
    // cek type file gambarnya
    if($type == 'image/jpg' or $type =='image/png' or $type == 'image/jpeg'){
            // jika semua type file sudah benar, maka upload ke folder
            move_uploaded_file($temp, $folder.$name);

            // dan kirim data ke database untuk disimpan
            include('lib/koneksi.php');

            $sql = "INSERT INTO products(barcode,product_name,price,picture) VALUES(?,?,?,?)";

            $stat = $db->prepare($sql);
            $stat-> bind_param('ssds',$barcode,$nama_barang,$harga,$name);
            $stat->execute();
            $db->close();

    }else{
        echo "Ada kesalahan, mungkin type file dll.";
    }
    

    header("location:products.php");
?>