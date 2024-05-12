<?php
    $id = $_POST['id'];
    $nama_konsumen = $_POST['nama_konsumen'];
    $alamat = $_POST['alamat'];
    $handphone = $_POST['handphone'];

    include('lib/koneksi.php');
    $sql = "UPDATE customers SET cust_name = ?, address = ?, phone = ? WHERE id = ?";
   
    $stat = $db->prepare($sql);
    $stat->bind_param('sssi', $nama_konsumen,$alamat,$handphone,$id);
    $stat->execute();
    $db->close();

    header("location:customers.php");
?>;