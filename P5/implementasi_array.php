<?php
  $konsumen =[
    "nama" => "Andi Felani",
    "handphone" => "013876152"
  ];

  $produk = [
    [
        "kode" => "00001",
        "deskripsi" => "Pop Mie Raksa Bakso",
        "harga" => 6000,
        "qty" => 3
    ],
    [
        "kode" => "00002",
        "deskripsi" => "Indomie rasa Kari Ayam",
        "harga" => 5000,
        "qty" => 1
    ],
    [
        "kode" => "00003",
        "deskripsi" => "Beras Horas 25KG",
        "harga" => 403750,
        "qty" => 1
    ],
    [
        "kode" => "00004",
        "deskripsi" => "Minyak Goreng Filma 500 ml",
        "harga" => 13700,
        "qty" => 12
    ],
    [
        "kode" => "00004",
        "deskripsi" => "Tepung Terigu Segitiga Biru 1kg",
        "harga" => 15500,
        "qty" => 24
    ]
  ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nota Penjualan Kafe Redum-redum</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="bg-danger text-white text-center mt-5">
        <h3>NOTA PENJUALAN</h3>
    </div>
    <div class="row mt-1">
        <div class="col-sm-4">
            <table class="table table-bordered">
                <tr>
                    <td>Nama Konsumen</td><td>:</td>
                    <td>
                        <strong>
                            <?php echo $konsumen["nama"]; ?>
                        </strong>
                    </td>
                </tr>
                <tr>
                    <td>Handphone</td><td>:</td>
                    <td>
                        <strong>
                        <?php echo $konsumen["handphone"]; ?>
                        </strong>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <div class="row mt-1">
        <div>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Deskripsi</th>
                        <th>Harga</th>
                        <th>Qty</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <?php 
                    $no = 1;
                    foreach($produk as $barang)
                    {
                        
                ?>
                <tbody>
                    <tr>
                        <td align="right">
                            <?php echo $no; ?>
                        </td>
                        <td>
                            <?php  echo $barang["deskripsi"]; ?>
                        </td>
                        <td align="right">
                            <?php  echo number_format($barang["harga"], 0,',', '.'); ?>
                        </td>
                        <td align="right">
                            <?php  echo $barang["qty"]; ?>
                        </td>
                        <td align="right">
                            <?php echo number_format($barang["harga"]* $barang["qty"], 0,',', '.'); ?>
                        </td>
                    </tr>
                    <?php 
                        $no++;
                       // $total+= $barang["harga"];
                    };
                    ?>
                    <tr>
                        <td colspan="4" align="right"><strong>TOTAL:</strong></td>
                        <td>
                            <?php  //$total; ?>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>


<script src="js/bootstrap.min.js"></script>
</body>
</html>