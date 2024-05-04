<?php
    //variabel yang dibutuhkan pada nota

    // tipe string
    $konsumen = "Yuni Rahayu";
    $handphone = "0811 600 6554";

    $produk1 = "Pop Mie Rasa Bakso";
    $produk2 = "Kitkat Rasa Mochi";
    $produk3 = "Aqua 250ML";

    //tipe integer
    $qty_p1 = 2;
    $qty_p2 = 6;
    $qty_p3 = 2;
    
    //tipe float atau decimal
    $harga_p1 = 7500.00 ;
    $harga_p2 = 5000.00;
    $harga_p3 = 3000.00;

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
                        <strong><?php echo $konsumen ?></strong>
                    </td>
                </tr>
                <tr>
                    <td>Handphone</td><td>:</td>
                    <td>
                        <strong><?php echo $handphone ?></strong>
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
                <tbody>
                    <tr>
                        <td align="right"><?php echo "1." ?></td>
                        <td><?php echo $produk1?></td>
                        <td align="right"><?php echo number_format($harga_p1) ?></td>
                        <td align="right"><?php echo $qty_p1?></td>
                        <td align="right"><?php echo number_format($harga_p1 * $qty_p1)?></td>
                    </tr>
                    <tr>
                        <td align="right"><?php echo "2." ?></td>
                        <td><?php echo $produk2?></td>
                        <td align="right"><?php echo number_format($harga_p2) ?></td>
                        <td align="right"><?php echo $qty_p2?></td>
                        <td align="right"><?php echo number_format($harga_p2 * $qty_p2) ?></td>
                    </tr>
                    <tr>
                        <td align="right"><?php echo "3." ?></td>
                        <td><?php echo $produk3?></td>
                        <td align="right"><?php echo number_format($harga_p3) ?></td>
                        <td align="right"><?php echo $qty_p3?></td>
                        <td align="right"><?php echo number_format($harga_p3 * $qty_p3) ?></td>
                    </tr>
                    <tr>
                        <td colspan="4" align="right"><strong>TOTAL:</strong></td>
                        <td>
                            <?php  ?>
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