<?php 
if(isset($_POST['kategori'])) {
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
    <title>Preview File</title>
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
            margin-left: 320px;    
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

        thead { 
            display: table-header-group; 
        }

        tfoot { 
            display: table-row-group; 
        }

        tr { 
            page-break-inside: avoid; 
        }

        @media print {
            tr, td, th {
                page-break-inside: avoid !important;
            }

            thead { 
                display: table-header-group; 
            }

            tfoot { 
                display: table-row-group; 
            }

            .action-buttons {
                display: none;
            }
        }
    </style>
</head>
<body>
    <table style="border:none; margin-bottom:15px;">
        <thead>
            <!-- Kop Surat -->
            <tr>
                <th colspan="6" style="border:none; padding:10px; text-align:center;">
                    <div style="margin-bottom:px; font-size:18px; font-weight:bold;">
                        DAFTAR ARSIP AKTIF
                    </div>
                    <div style="margin-bottom:1px; font-size:18px;">
                        DINAS KETENAGAKERJAAN PROVINSI SUMATERA UTARA
                    </div>
                    <!-- Subjudul: rata kiri tapi sejajar huruf "D" -->
                    <div style="display:inline-block; text-align:left; font-size:16px; font-weight:bold;">
                        DAFTAR ISI BERKAS : SURAT PERINTAH TUGAS <?= strtoupper($kategori) ?> <?= $bulan ?> <?= $tahun ?><br>
                        UNIT PENGOLAH : SEKRETARIAT
                    </div>
                </th>
            </tr>

            <!-- Header Kolom -->
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

    <div class="action-buttons" style="margin-top:20px; text-align:center;">
        <button onclick="window.print()" class="btn btn-success">
            <i class="fa-solid fa-file-export"></i>
            Export PDF
        </button>
    </div>
</body>
<script>
</script>
</html>
