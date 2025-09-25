<div class="container-fluid px-4">
                        <h1 class="mt-4">Arsip</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Buat Kredensial File</li>
                        </ol>
                        <a href="?page=arsip" class="btn btn-danger">Kembali</a>
                        <hr>
    
                    <form method="post">
                        <table class="table table--bordered">
                            <tr>
                                <td width="200">Nama File</td>
                                <td width="1">:</td>
                                <td><input class="form-control" type="text" name="nama_file" required></td>
                            </tr>
                            <tr>
                                <td width="200">Kategori Arsip</td>
                                <td width="1">:</td>
                                <td>
                                    <select class="form-control" type="text" name="kategori" required>
                                        <option value="">--- PILIH KATEGORI ARSIP ---</option>
                                        <option value="DALAM KOTA">Surat Dalam Kota</option>
                                        <option value="LUAR KOTA">Surat Luar Kota</option>
                                        <option value="SURAT KELUAR">Surat Keluar</option>
                                    </select>
                                    </td>
                            </tr>
                            <tr>
                                <td>Bulan</td>
                                <td>:</td>
                                <td>
                                    <select class="form-control" type="text" step="0" name="bulan" required> 
                                        <option value="">--- PILIH BULAN ---</option>
                                        <option value="JANUARI">Januari</option>
                                        <option value="FEBRUARI">Februari</option>
                                        <option value="MARET">Maret</option>
                                        <option value="APRIL">April</option>
                                        <option value="MEI">Mei</option>
                                        <option value="JUNI">Juni</option>
                                        <option value="JULI">Juli</option>
                                        <option value="AGUSTUS">Agustus</option>
                                        <option value="SEPTEMBER">September</option>
                                        <option value="OKTOBER">Oktober</option>
                                        <option value="NOVEMBER">November</option>
                                        <option value="DESEMBER">Desember</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Tahun</td>
                                <td>:</td>
                                <td><input class="form-control" type="number" min="1900" max="2100" placeholder="cth: 2025" step="0" name="tahun" required></td>
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