<!DOCTYPE html>
<html lang="en">
<head>
  <title>Aplikasi Minimart</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <script src="js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="p-5 bg-primary text-white text-center">
  <h1>Aplikasi Minimart</h1>
  <p>Minimarket terlengkap di kampung Anda!</p> 
</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link " href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="products.php">Products</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="customers.php">Customers</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="trans.php">Transactions</a>
      </li>
    </ul>
  </div>
</nav>

<div class="container mt-5">
 
    <h1>Data Produk</h1>
    <a class="btn btn-primary" href="product_new.php">Tambah Produk</a>
    <br><br>
    <div class="row">
    <table class="table table-hover">
        <thead>
            <tr>
            <th scope="col">No</th> 
            <th scope="col">&nbsp;</th>
            <th scope="col">Kode Barang</th>
            <th scope="col">Barcode</th>
            <th scope="col">Nama Produk</th>
            <th scope="col">Harga</th>
            <th scope="col">Aksi</th>
            </tr>
        </thead>
        <?php
            include('lib/koneksi.php');

                $qry = "SELECT * FROM products";
                $check = $db->query($qry) or die($db->error. __LINE__);

                if($check -> num_rows > 0)
                {
                    $sql = "SELECT * FROM products ORDER BY id DESC";
                    if(!$hasil = $db->query($sql))
                    {
                        die('Query error['. $db->error.']');
                    }

                    $no =1;
                    while ($prod = $hasil -> fetch_object())
                    {      
        ?>
        <tbody>
            <tr>
            <th scope="row"><?php echo $no; ?></th>
            <td>
                <img class="rounded" src="<?php echo "images/produk/".$prod->picture; ?>" height="200px" width="200px">
            </td>
            <td><?php echo $prod->id; ?></td>
            <td><?php echo $prod->barcode; ?></td>
            <td><?php echo $prod->product_name; ?></td>
            <td><?php echo number_format($prod->price); ?></td>
            <td>
                <a class="btn btn-warning" href=<?php echo "product_edit.php?id=".$prod->id ?>>Update</a>
                <a class="btn btn-danger" href=<?php echo "product_delete.php?id=".$prod->id ?>>Hapus</a>
            </td>
            </tr>
        </tbody>
        <?php
               $no++;}
            }else{
              echo "<tr>";
              echo "<td colspan=\"7\" align=\"center\" style=\"color:red\"> Data belum ada di Database</td>";
              echo "</tr>";
            }
        ?>
        </table>
  </div>
</div>

<div class="mt-5 p-4 bg-dark text-white text-center">
  <p>Aplikasi Minimart create by AH @2024</p>
</div>

</body>
</html>