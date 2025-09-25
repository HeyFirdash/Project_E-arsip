<div class="container-fluid px-4">
                        <h1 class="mt-4">Arsip</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Arsip</li>
                        </ol>
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <!-- Tombol kiri -->
                            <div class="d-flex gap-2">
                                <a href="?page=tambah" class="btn btn-primary">
                                    <i class="fas fa-plus"></i> Tambah Data
                                </a>
                                <a href="?page=hapus" class="btn btn-danger">
                                    <i class="fas fa-trash"></i> Hapus Semua
                                </a>
                                <a href="?page=print" class="btn btn-success">
                                    <i class="fas fa-archive"></i> Simpan
                                </a>
                            </div>

                            <!-- Form cari kanan -->
                            <form class="d-flex" method="get" action="">
                                <input type="hidden" name="page" value="cari">
                                <input class="form-control me-2" type="search" name="keyword" placeholder="Cari data..." aria-label="Search">
                                <button class="btn btn-secondary" type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                            </form>
                        </div>


                        <hr>
                    <table class="table table-bordered">
                        <tr>
                            <th>NO BERKAS</th>
                            <th>NO ITEM ARSIP</th>
                            <th>KODE KLASIFIKASI (NOMOR SURAT)</th>
                            <th>URAIAN INFORMASI</th>
                            <th>TANGGAL</th>
                            <th>JUMLAH</th>
                            <th>KETERANGAN</th>
                            <th>AKSI</th>
                        </tr>   
                        
                        <?php 
                            $query = query("SELECT * FROM klip_arsip");
                            $no = 1;
                            while($data = mysqli_fetch_array($query)){
                                ?>
                                <tr>
                                    <td></td>
                                    <td><?php echo $no; ?></td>
                                    <td><?php echo $data['nomor_surat']; ?></td>
                                    <td><?php echo $data['uraian']; ?></td>
                                    <td><?php echo $data['tanggal']; ?></td>
                                    <td><?php echo $data['jumlah_lembar']; ?></td>
                                    <td><?php echo $data['keterangan']; ?></td>
                                    <td>
                                        <a href="?page=ubah&&id=<?php echo $data['id_klip']; ?>" class="btn btn-secondary"><i class="fa-solid fa-pencil"></i></a>
                                        <a href="?page=hapus&&id=<?php echo $data['id_klip']; ?>" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
                                    </td>
                                </tr>
                                <?php
                                $no++;
                            }
                        ?>
                    </table>

                    </div>