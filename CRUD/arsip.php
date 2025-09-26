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
            <a href="?page=hapus_all" 
                onclick="return confirm('⚠️ Yakin mau hapus semua data? Semua data yang terhapus tidak bisa dikembalikan!')" 
                class="btn btn-danger">
                <i class="fas fa-trash"></i> Hapus Semua
            </a>
            <a href="?page=informasi" class="btn btn-success">
                <i class="fas fa-archive"></i> Simpan
            </a>
        </div>

        <!-- Form cari -->
        <form class="d-flex mx-3" method="get" action="">
            <input type="hidden" name="page" value="cari">
            <input class="form-control me-2" type="search" name="keyword" placeholder="Cari data..." aria-label="Search">
            <button class="btn btn-secondary" type="submit">
                <i class="fas fa-search"></i>
            </button>
        </form>
    </div>

    <hr>

    <table class="table table-bordered">
        <tr class="text-center align-middle">
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
        $no = 1;

        if (isset($_GET['keyword']) && !empty($_GET['keyword'])) {
            $keyword = $_GET['keyword'];
            $query = search_item($keyword);
        } else {
            $query = query("SELECT * FROM klip_arsip");
        }

        while ($data = mysqli_fetch_array($query)) {
        ?>
            <tr class="align-middle">
                <td></td>
                <td><?php echo $no; ?></td>
                <td><?php echo $data['nomor_surat']; ?></td>
                <td><?php echo $data['uraian']; ?></td>
                <td><?php echo date('d-m-Y', strtotime($data['tanggal'])); ?></td>
                <td><?php echo $data['jumlah_lembar']; ?> Lembar</td>
                <td><?php echo $data['keterangan']; ?></td>
                <td>
                    <div class="d-flex justify-content-center gap-2">
                        <a href="?page=ubah&&id=<?php echo $data['id_klip']; ?>" class="btn btn-secondary btn-sm">
                            <i class="fa-solid fa-pencil"></i>
                        </a>
                        <a href="?page=hapus&&id=<?php echo $data['id_klip']; ?>" 
                           onclick="return confirm('Yakin ingin menghapus data ini?')" 
                           class="btn btn-danger btn-sm">
                           <i class="fa-solid fa-trash"></i>
                        </a>
                    </div>
                </td>
            </tr>
        <?php
            $no++;
        }
        ?>
    </table>
</div> 
