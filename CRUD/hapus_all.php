<?php 
if (isset($_GET['page']) && $_GET['page'] === 'hapus_all') {
    $query = query("DELETE FROM klip_arsip");
    if($query){
        echo "<script>alert('Semua data berhasil dihapus!'); location.href='index.php';</script>";
    } else {
        echo "<script>alert('Gagal menghapus semua data!');</script>";
    }
}

?>