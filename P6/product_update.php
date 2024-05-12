<?php
    $id = $_POST['id'];
    $barcode = $_POST['barcode'];
    $nama_barang = $_POST['nama_barang'];
    $harga = $_POST['harga'];

    include('lib/koneksi.php');
    $sql = "UPDATE products SET barcode = ?, product_name =?, price=? WHERE id=?";
   
    $stat = $db->prepare($sql);
    $stat->bind_param('ssdi', $barcode,$nama_barang,$harga,$id);
    $stat->execute();
    $db->close();

    header("location:products.php");
?>;