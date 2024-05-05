<?php
    // ARRAY
    // Index Array

    //Mendefinikasi array yang tak ada isi datanya (kosong)
    $buah = array();
    $hobi = [];

    //Mendefinikasi array yang langsung berisi data.
    $minuman = array("Kopi","Teh","Jus","Teh Botol","Bir");
    $makanan =["Nasi Goreng","Soto","Bubur Ayam", "Rawon","Ikan Bakar"];

    // menampilkan data array satu per satu
    echo $minuman[2]."<br/>";
    echo $makanan[1]."<br/>";
    echo "<hr/>";
    
    // menampilkan data array sekaligus dengan perulangan for
    for($i=0; $i < count($minuman); $i++)
    {
        echo $minuman[$i]."<br/>";
    }
    echo"<hr/>";

    // menampilkan data array sekaligus dengan perulangan foreach
    foreach($makanan as $menu)
    {
        echo $menu."<br/>";
    }
    echo"<hr/>";

    // menampilkan data array sekaligus dengan perulangan while
    $buah[3] = "Pepaya";
    $buah[1] = "Markisa";
    $buah[2] = "Durian";
    $buah[0] = "Jeruk";

    $i = 0;
    while($i < count($buah))
    {
        echo $buah[$i]."<br/>";
        $i++;

    }
    echo"<hr/>";

    //Latihan
    //Tampilkan semua data dari array Hobi dengan perulangan for, foreach, dan while.

    //menambah data kedalam array.
    $hobi[5] = "Menembak";
    $hobi[0] = "Berburu";
    $hobi[1] = "Main Game";
    $hobi[3] = "Soccer";
    $hobi[4] = "Boxer";
    $hobi[2] = "Menyanyi";

    if($hobi[1] == "Main Game")
    {
        //mengganti data dalam array.
        $hobi[1] = "E-Sports";
    }

    if($hobi[2] == "Menyanyi")
    {
        //menghapus data dalam array.
        unset($hobi[2]);
    }

    // menampilkan data array sekaligus dengan perulangan foreach
    foreach($hobi as $kesukaan)
    {
        echo $kesukaan."<br/>";
    }
    echo"<hr/>";

    // Assosiatif Array
    $barang = [
        "Kode" => "00001",
        "Deskripsi" => "Pop Mie Rasa Bakso Rusa",
        "Harga" => 7900
    ];

    echo "Kode Barang: ".$barang["Kode"]."<br/>";
    echo "Nama Barang: ".$barang["Deskripsi"]."<br/>";
    echo "Harga Barang: ".$barang["Harga"]."<br/>";
    echo"<hr/>";


    // Multidemensi array
    $matrik = [
        [2,3,4],
        [7,5,0],
        [4,3,8],
    ];

    echo $matrik[1][2];
    echo"<hr/>";

    $menu = [
        [
            "pesanan" => "Teh Obeng",
            "harga"   => 6000
        ],
        [
            "pesanan" => "Mie Ayam",
            "harga" => 12000
        ],
        [
            "pesanan" => "Nasi Goreng Rusa",
            "harga" => 85000
        ]
    ];

    foreach ($menu as $order)
    {
        echo "Yang dipesan: ".$order["pesanan"]."<br/>";
        echo "Dengan harga: ".$order["harga"]."<br/>";
        echo "<hr/>";
    }
?>