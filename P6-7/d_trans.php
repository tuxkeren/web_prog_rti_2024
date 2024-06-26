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
            <table class="table table-striped">
                <tr>
                    <td width="30px">No. Faktor</td><td width="30px">:</td><td>...</td>
                </tr>
                <tr>
                    <td>Tanggal</td><td>:</td><td>...</td>
                </tr>
                <tr>
                    <td>Konsumen</td><td>:</td><td>...</td>
                </tr>
            </table>
            <form action="header_save.php" method="post">
                <div class="row">
                    <div class="col">
                        <label for="tanggal" class="form-label">Tanggal:</label>
                        <input type="text" class="form-control" id="tanggal" name="tanggal" value="<?php echo date("Y/m/d") ?>">
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