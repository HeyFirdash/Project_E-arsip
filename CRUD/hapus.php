<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // query hapus
    $delete = query("DELETE FROM klip_arsip WHERE id_klip = '$id'");

    if ($delete) {
        echo "<script>
                alert('Data berhasil dihapus!');
                window.location.href='?page=arsip';
              </script>";
    } else {
        echo "<script>
                alert('Gagal menghapus data!');
                window.location.href='?page=arsip';
              </script>";
    }
} else {
    echo "<script>
            alert('ID tidak ditemukan!');
            window.location.href='?page=arsip';
          </script>";
}

?>