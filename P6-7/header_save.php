<?php
    $tgl = $_POST['tanggal'];
    $konsumen = $_POST['konsumen'];
    $total = 0;

    // kirim data ke database
    include('lib/koneksi.php');

    $sql = "INSERT INTO h_trans(date_trans,cust_id,total) VALUES(?,?,?)";

    $stat = $db->prepare($sql);
    $stat-> bind_param('sii',$tgl,$konsumen,$total);
    $stat->execute();
    $db->close();

    header("location:d_trans.php");
?>