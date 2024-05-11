<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "minimart";

    $conn = mysqli_connect($hostname,$username,$password,$database);

    if(!$conn){
        die("Koneksi ke database gagal: ". mysqli_connect_error());
    }
    echo "Koneksi berhasil";

?>