<?php 
    if(isset($_POST['namaproduk'])) {
        $nama = $_POST['namaproduk'];
        $harga = $_POST['harga'];
        $stok = $_POST['stok'];

        $query = mysqli_query($koneksi, "INSERT INTO produk(namaproduk,stok,harga) values('$nama','$stok','$harga')");
        if($query){
            echo '<script>alert("Tambah Data Berhasil")</script>';
        }else {
            echo '<script>alert("Tambah Data Gagal")</script>';
        }
    }
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
                                <td><input class="form-control" type="text" name="namaproduk"></td>
                            </tr>
                             <tr>
                                <td>Harga</td>
                                <td>:</td>
                                <td><input class="form-control" type="number" step="0" name="harga"></td>
                            </tr>
                             <tr>
                                <td>Stok</td>
                                <td>:</td>
                                <td><input class="form-control" type="number" step="0" name="stok"></td>
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