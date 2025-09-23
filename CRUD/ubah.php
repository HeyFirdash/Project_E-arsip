<?php 
    $id = $_GET['id'];
    if(isset($_POST['namaproduk'])) {
        $nama = $_POST['namaproduk'];
        $harga = $_POST['harga'];
        $stok = $_POST['stok'];

        $query = mysqli_query($koneksi, "UPDATE produk SET namaproduk='$nama', harga='$harga', stok='$stok' WHERE produkid='$id'");
        if($query){
            echo '<script>alert("Ubah Data Berhasil")</script>';
        }else {
            echo '<script>alert("Ubah Data Gagal")</script>';
        }
    }

    $query = mysqli_query($koneksi, "SELECT*FROM produk WHERE produkid=$id");
    $data = mysqli_fetch_array($query);
?>

<div class="container-fluid px-4">
                        <h1 class="mt-4">Produk</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Produk</li>
                        </ol>
                        <a href="?page=produk" class="btn btn-danger">Kembali</a>
                        <hr>
     
                    <form method="post">
                        <table class="table table--bordered">
                            <tr>
                                <td width="200">Nama Produk</td>
                                <td width="1">:</td>
                                <td><input class="form-control" value="<?php echo $data['namaproduk'] ?>" type="text" name="namaproduk"></td>
                            </tr>
                             <tr>
                                <td>Harga</td>
                                <td>:</td>
                                <td><input class="form-control" value="<?php echo $data['harga'] ?>" type="number" step="0" name="harga"></td>
                            </tr>
                             <tr>
                                <td>Stok</td>
                                <td>:</td>
                                <td><input class="form-control" value="<?php echo $data['stok'] ?>" type="number" step="0" name="stok"></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td>
                                    <button type="submit" class="btn btn-primary">SIMPAN</button>
                                    <button type="reset" class="btn btn-danger">RESET</button>
                                </td>
                            </tr>
                        </table>     
                    </form>

                    </div>