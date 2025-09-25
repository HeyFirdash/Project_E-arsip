<?php 
    $id = $_GET['id'];
    $result = query("SELECT * FROM klip_arsip WHERE id_klip = '$id'");
    $data = mysqli_fetch_assoc($result);
    if(isset($_POST['nomor_surat'])) {
        $nomor = $_POST['nomor_surat'];
        $uraian = $_POST['uraian'];
        $tanggal = $_POST['tanggal'];
        $jumlah = $_POST['jumlah'];
        $keterangan = $_POST['keterangan'];
        edit_data($id, $nomor, $uraian, $tanggal, $jumlah, $keterangan);
    }
?>

<div class="container-fluid px-4">
    <h1 class="mt-4">Edit Arsip</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Edit Arsip</li>
    </ol>
    <a href="?page=arsip" class="btn btn-danger">Kembali</a>
    <hr>

    <form method="post">
        <table class="table table-bordered">
            <tr>
                <td>Nomor Surat</td>
                <td><input class="form-control" value="<?php echo $data['nomor_surat']; ?>" type="text" name="nomor_surat"></td>
            </tr>
            <tr>
                <td>Uraian</td>
                <td><input class="form-control" value="<?php echo $data['uraian']; ?>" type="text" name="uraian"></td>
            </tr>
            <tr>
                <td>Tanggal</td>
                <td><input class="form-control" value="<?php echo $data['tanggal']; ?>" type="date" lang="id" name="tanggal"></td>
            </tr>
            <tr>
                <td>Jumlah Lembar</td>
                <td><input class="form-control" value="<?php echo $data['jumlah_lembar']; ?>" type="number" name="jumlah"></td>
            </tr>
            <tr>
                <td>Keterangan</td>
                <td><input class="form-control" value="<?php echo $data['keterangan']; ?>" type="text" name="keterangan"></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <button type="submit" class="btn btn-primary">SIMPAN</button>
                </td>
            </tr>
        </table>
    </form>
</div>
