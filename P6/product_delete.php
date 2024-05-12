<?php 

    $kode = $_GET['id'];


    include('lib/koneksi.php');

    $sql = "DELETE FROM products WHERE id=?";
    $stat = $db->prepare($sql);
    $stat->bind_param('i', $kode);
    $stat->execute();
    $db->close();

// ?>

<script type="text/javascript">
    window.alert("Data berhasil dihapus!");
    window.location="products.php";
</script>
