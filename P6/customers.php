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
        <a class="nav-link active" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="products.php">Products</a>
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
 
    <h1>Data Konsumen</h1>
    <a class="btn btn-primary" href="product_new.php">Tambah Konsumen</a>
    <br><br>
    <div class="row">
    <table class="table table-hover">
        <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Nama Kosumen</th>
            <th scope="col">Alamat</th>
            <th scope="col">Handphone</th>
            <th scope="col">Aksi</th>
            </tr>
        </thead>
        <?php
            include('lib/koneksi.php');

                $qry = "SELECT * FROM customers";
                $check = $db->query($qry) or die($db->error. __LINE__);

                if($check -> num_rows > 0)
                {
                    $sql = "SELECT * FROM customers ORDER BY id DESC";
                    if(!$hasil = $db->query($sql))
                    {
                        die('Query error['. $db->error.']');
                    }

                    while ($cust = $hasil -> fetch_object())
                    {      
        ?>
        <tbody>
            <tr>
            <th scope="row"><?php echo $cust->id; ?></th>
            <td><?php echo $cust->cust_name; ?></td>
            <td><?php echo $cust->address; ?></td>
            <td><?php echo $cust->phone; ?></td>
            <td>
                <a class="btn btn-warning" href="">Update</a>
                <a class="btn btn-danger" href="">Hapus</a>
            </td>
            </tr>
        </tbody>
        <?php
                  } 
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