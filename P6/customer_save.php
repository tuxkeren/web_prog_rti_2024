<?php
    $nama_konsumen = $_POST['nama_konsumen'];
    $alamat = $_POST['alamat'];
    $handphone = $_POST['handphone'];

    // kirim data ke database
    include('lib/koneksi.php');

    $sql = "INSERT INTO customers(cust_name,address,phone) VALUES(?,?,?)";

    $stat = $db->prepare($sql);
    $stat-> bind_param('sss',$nama_konsumen,$alamat,$handphone);
    $stat->execute();
    $db->close();

    header("location:customers.php");
?>