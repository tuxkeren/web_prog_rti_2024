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
  <form action="product_save.php" method="post">
      <div class="row">
        <div class="col">
          <label for="nama_konsumen" class="form-label">Nama Konsumen:</label>
          <input type="text" class="form-control" id="nama_konsumen" placeholder="Masukkan nama lengkap Konsumen">
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col">
          <label for="alamat" class="form-label">Alamat:</label>
          <textarea class="form-control" placeholder="Masukkan alamat konsumen" id="alamat"></textarea>
        </div>
        <div class="col">
          <label for="handphone" class="form-label">Handphone:</label>
          <input type="text" class="form-control" id="handphone" placeholder="Masukkan no HP konsumen">
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

</body>
</html>