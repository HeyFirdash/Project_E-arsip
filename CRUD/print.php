</head>
<body>
<div class="kop">
    <h2 class="judul-utama spasi">DAFTAR ARSIP AKTIF</h2>
    <h2 class="judul-utama spasi">DINAS TENAGA KERJA PROVINSI SUMATERA UTARA</h2>
    <h3 class="subjudul spasi">UNIT PENGOLAH : SUBBAG UMUM DAN KEPEGAWAIAN</h3>
    <h3 class="subjudul spasi">DAFTAR ISI BERKAS : SURAT PERINTAH TUGAS LUAR KOTA <?= $bulan ?> <?= $tahun ?></h3>
</div>


<table>
    <thead>
        <tr>
            <th style="width: 5%;">NO. BERKAS</th>
            <th style="width: 7%;">NO ITEM ARSIP</th>
            <th style="width: 20%;">KODE KLASIFIKASI (NOMOR SURAT)</th>
            <th style="width: 45%;">URAIAN INFORMASI ARSIP</th>
            <th style="width: 12%;">TANGGAL</th>
            <th style="width: 13%;">JUMLAH</th>
        </tr>

    </thead>
    <tbody>
        <?php if (!empty($data_arsip)) : ?>
            <?php $no = 1; foreach ($data_arsip as $arsip) : ?>
                <tr>
                    <td style="width: 5%;" class="tengah"></td>
                    <td style="width: 7%;" class="tengah"><?= $no++ ?></td>
                    <td style="width: 18%;" class="tengah"><?= htmlspecialchars($arsip['no_surat']) ?></td>
                    <td style="width: 45%;" class="uraian"><?= htmlspecialchars($arsip['uraian']) ?></td>
                    <td style="width: 12%;" class="tengah"><?= date('d-m-Y', strtotime($arsip['tanggal'])) ?></td>
                    <td style="width: 13%;" class="tengah"><?= htmlspecialchars($arsip['jumlah']) ?> Lembar</td>
                </tr>
            <?php endforeach; ?>
        <?php else : ?>
            <tr>
                <td colspan="5" style="text-align:center;">Data tidak tersedia</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>
</body>
</html>
