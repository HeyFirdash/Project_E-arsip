<div class="container-fluid px-4">
                        <h1 class="mt-4">Produk</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Produk</li>
                        </ol>
                        <a href="?page=produk_tambah" class="btn btn-primary">Tambah Data</a>
                        <hr>
                    <table class="table table-bordered">
                        <tr>
                            <th>Nama Produk</th>
                            <th>Harga</th>
                            <th>Stok</th>
                            <th>Aksi</th>
                        </tr>   
                        
                        <?php 
                            $query = mysqli_query($koneksi, "SELECT * FROM produk");
                            while($data = mysqli_fetch_array($query)){
                                ?>
                                <tr>
                                    <td><?php echo $data['namaproduk']; ?></td>
                                    <td><?php echo $data['harga']; ?></td>
                                    <td><?php echo $data['stok']; ?></td>
                                    <td>
                                        <a href="?page=produk_ubah&&id=<?php echo $data['produkid']; ?>" class="btn btn-secondary">ubah</a>
                                        <a href="?page=produk_hapus&&id=<?php echo $data['produkid']; ?>" class="btn btn-danger">hapus</a>
                                    </td>
                                </tr>
                                <?php
                            }
                        ?>
                    </table>

                    </div>