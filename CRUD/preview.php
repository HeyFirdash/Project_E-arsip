<?php 
if(isset($_POST['nama_file'])) {
    $nama_file = $_POST['nama_file'];
    $kategori = $_POST["kategori"];
    $bulan = $_POST['bulan'];
    $tahun = $_POST['tahun'];

    // Fetch data arsip
    $data_arsip = [];
    $result = query("SELECT * FROM klip_arsip");

    while ($row = mysqli_fetch_assoc($result)) {
        $data_arsip[] = $row;
    }

}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Preview Arsip</title>
    <style>
        body {
            font-family: "Times New Roman", Times, serif;
            margin: 40px;
            font-size: 14px;
        }

        .kop {
            text-align: center;
            margin-bottom: 15px;
        }

        .judul-utama {
            font-size: 16pt;
            font-weight: bold;
            margin: 5px 0;
        }

        .subjudul {
            font-size: 14pt;
            margin: 3px 0;
            font-weight: bold;
            text-align: left;
            margin-left: 320px;    /* atur angka ini biar sejajar pas dengan huruf D */
        }

        table {
            border-collapse: collapse;
            margin: 0 auto;
            width: 210mm;     
            max-width: 100%;
            font-size: 11pt;
        }


        table, th, td {
            border: 1px solid black;
        }

        th {
            text-align: center;
            vertical-align: middle;
            padding: 6px;
            font-weight: bold;
        }

        td {
            padding: 6px;
            vertical-align: top;
        }

        .tengah {
            text-align: center;
        }

        .uraian {
            text-align: justify;
        }

        @media print {
            body {
                margin: 1.5cm; 
            }

            .kop {
                text-align: center;
                margin-bottom: 15px;
            }

            .judul-utama {
                font-size: 15pt;
                font-weight: bold;
                margin: 5px 0;
            }

            .subjudul {
                font-size: 12pt;
                margin: 3px 0;
                text-align: left;
                margin-left: 0.8cm; 
                display: block;
            }
        }

    </style>
</head>
<body>
<div class="kop">
    <h2 class="judul-utama">DAFTAR ARSIP AKTIF</h2>
    <h2 class="judul-utama">DINAS KETENAGAKERJAAN PROVINSI SUMATERA UTARA</h2>
    <h3 class="subjudul">DAFTAR ISI BERKAS : SURAT PERINTAH TUGAS <?= strtoupper($kategori) ?> <?= $bulan ?> <?= $tahun ?></h3>
    <h3 class="subjudul">UNIT PENGOLAH : SEKRETARIAT</h3>
</div>

<table>
    <thead>
        <tr>
        <th>NO. BERKAS</th>
        <th>NO ITEM ARSIP</th>
        <th>KODE KLASIFIKASI</th>
        <th>URAIAN INFORMASI ARSIP</th>
        <th>TANGGAL</th>
        <th>JUMLAH</th>
        </tr>
    </thead>

    <tbody>
        <?php if (!empty($data_arsip)) : ?>
            <?php $no = 1; foreach ($data_arsip as $arsip) : ?>
                <tr>
                    <td class="tengah"></td>
                    <td class="tengah"><?= $no++ ?></td>
                    <td class="tengah"><?= $arsip['nomor_surat'] ?></td>
                    <td class="uraian"><?= $arsip['uraian'] ?></td>
                    <td class="tengah"><?= $arsip['tanggal'] ?></td>
                    <td class="tengah"><?= $arsip['jumlah_lembar'] ?> Lembar</td>
                </tr>
            <?php endforeach; ?>
        <?php else : ?>
            <tr>
                <td colspan="6" class="tengah">Data tidak tersedia</td>
            </tr>
        <?php endif; ?>
        </tbody>
</table>
</body>
<script>
</script>
</html>
