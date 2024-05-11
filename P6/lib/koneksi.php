<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "minimart";

    $db = new mysqli($hostname,$username,$password,$database);
    if($db->connect_error)
    {
        die("Koneksi ke database gagal: ".$conn->connect_error);
    }
    // echo "Koneksi berhasil";

?>