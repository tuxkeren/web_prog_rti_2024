<?php
    // ambil data id
    $id = $_GET['id'];
    
    include('lib/koneksi.php');
    $qry ="SELECT * FROM customers";
    $check = $db->query($qry) or die($db->error.__LINE__);
    if($check -> num_rows > 0){
        $sql = "SELECT * FROM customers WHERE id=$id";
        if(!$hasil = $db->query($sql))
        {
            die('Query error['.$db->error.']');
        }
        while($cust = $hasil->fetch_object()){
?>

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
  <form action="customer_update.php" method="post">
      <div class="row">
        <div class="col">
          <input type="hidden" class="form-control" id="id" name="id" value =" <?php echo $cust->id; ?>">
          <label for="nama_konsumen" class="form-label">Nama Konsumen:</label>
          <input type="text" class="form-control" id="nama_konsumen" placeholder="Masukkan nama lengkap Konsumen" name="nama_konsumen" value="<?php echo $cust->cust_name; ?>">
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col">
          <label for="alamat" class="form-label">Alamat:</label>
          <textarea class="form-control" placeholder="Masukkan alamat konsumen" id="alamat" name="alamat"><?php echo $cust->address; ?></textarea>
        </div>
        <div class="col">
          <label for="handphone" class="form-label">Handphone:</label>
          <input type="text" class="form-control" id="handphone" placeholder="Masukkan no HP konsumen" name="handphone" value="<?php echo $cust->phone; ?>">
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col">
        <input class="btn btn-success" type="submit" value="Simpan">
        </div>
      </div>
  </form>
</div>

<div class="mt-5 p-4 bg-dark text-white text-center">
  <p>Aplikasi Minimart create by AH @2024</p>
</div>
<?php 
        }
    };
?>
</body>
</html>