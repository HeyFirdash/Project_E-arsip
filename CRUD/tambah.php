<?php 
    if (isset($_POST['nomor_surat'])) {
        $nomor = $_POST['nomor_surat'];
        $uraian = $_POST['uraian'];
        $tanggal = $_POST['tanggal'];
        $jumlah = $_POST['jumlah'];
        $keterangan = $_POST['keterangan'];
        insert_data($nomor, $uraian, $tanggal, $jumlah, $keterangan);
    }
?>

<div class="container-fluid px-4">
                        <h1 class="mt-4">Arsip</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Tambah Data</li>
                        </ol>
                        <a href="?page=arsip" class="btn btn-danger">Kembali</a>
                        <hr>
     
                    <form method="post">
                        <table class="table table--bordered">
                            <tr>
                                <td width="200">Nomor Surat</td>
                                <td width="1">:</td>
                                <td><input class="form-control" type="text" name="nomor_surat" required></td>
                            </tr>
                             <tr>
                                <td>Uraian</td>
                                <td>:</td>
                                <td><input class="form-control" type="text" step="0" name="uraian" required></td>
                            </tr>
                             <tr>
                                <td>Tanggal</td>
                                <td>:</td>
                                <td><input class="form-control" type="date" step="0" name="tanggal" required></td>
                            </tr>
                             <tr>
                                <td>Jumlah lembar</td>
                                <td>:</td>
                                <td><input class="form-control" type="number" step="0" name="jumlah" required></td>
                            </tr>
                             <tr>
                                <td>Keterangan</td>
                                <td>:</td>
                                <td><input class="form-control" type="text-box" step="0" name="keterangan"></td>
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