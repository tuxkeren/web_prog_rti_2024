<?php 

    $id = $_GET['id'];


    include('lib/koneksi.php');

    $sql = "DELETE FROM customers WHERE id=?";
    $stat = $db->prepare($sql);
    $stat->bind_param('i', $id);
    $stat->execute();
    $db->close();

// ?>

<script type="text/javascript">
    window.alert("Data berhasil dihapus!");
    window.location="customers.php";
</script>
