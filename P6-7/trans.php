<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <title>Minimart - Trasaction</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Minimart</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>
    <main class="container">
        <div class="bg-body-tertiary p-5 rounded">
            <form action="header_save.php" method="post">
                <div class="row">
                    <div class="col">
                        <label for="tanggal" class="form-label">Tanggal:</label>
                        <input type="text" class="form-control" id="tanggal" name="tanggal" value="<?php echo date("Y/m/d") ?>">
                    </div>
                    <div class="col">
                        <label for="konsumen" class="form-label">Konsumen:</label>
                        <select class="form-select" aria-label="Default select example" name="konsumen">
                            <option selected>Pilih Konsumen</option>
                            <?php 
                            
                                include('lib/koneksi.php');

                                $qry ="SELECT * FROM customers";
                                $check = $db->query($qry) or die($db->error.__LINE__);
                                if($check -> num_rows > 0){
                                    $sql = "SELECT * FROM customers";
                                    if(!$hasil = $db->query($sql))
                                    {
                                        die('Query error['.$db->error.']');
                                    }
                                    while($cust = $hasil->fetch_object()){
                            
                            ?>
                                <option value="<?php echo $cust->id; ?>">
                                    <?php echo $cust->cust_name; ?>
                                </option>
                            <?php 
                                    }
                                } 
                            ?>
                        </select>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col">
                        <input type="submit" value="Seterusnya...">
                    </div>
                </div>
            </form>
        </div>
    </main>


    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>