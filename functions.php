<?php 
session_start();
$koneksi = mysqli_connect("localhost","root","","e_arsip_db");

function query($qry){
    global $koneksi;
    return mysqli_query($koneksi, $qry);
}

function login_user($usn, $pwd){
    global $koneksi;
    
    // Cek username ada atau tidak
    $check = query("SELECT * FROM users WHERE username='$usn' LIMIT 1");
    
    if(mysqli_num_rows($check) > 0){
        $data = mysqli_fetch_assoc($check);
        
        // Bandingkan password input dengan yang di database
        if (password_verify($pwd, $data["password"])) {
            $_SESSION['user'] = $data;
            echo '<script>alert("Selamat datang"); location.href="../index.php"</script>';
        } else {
            echo '<script>alert("Password salah!");</script>';
}

    } else {
        echo '<script>alert("Username tidak ditemukan!");</script>';
    }
}

function log_out(){
    session_start();
    session_destroy();
    header('location: login.php');
}

function insert_data($nomor, $uraian, $tanggal, $jumlah, $keterangan){
        $query = query("INSERT INTO klip_arsip(nomor_surat, uraian, tanggal, jumlah_lembar, keterangan) values('$nomor','$uraian', '$tanggal, '$jumlah', '$keterangan')");
        if($query){
            echo '<script>alert("Tambah Data Berhasil")</script>';
            header('location: ../index.php');
        }else {
            echo '<script>alert("Tambah Data Gagal")</script>';
        }
}

function edit_data($data_id, $nomor, $uraian, $tanggal, $jumlah, $keterangan){
    // pastikan datanya ada
    $check = query("SELECT * FROM klip_arsip WHERE id_klip = '$data_id'");
    if(mysqli_num_rows($check) == 0){
        echo '<script>alert("Data tidak ditemukan!");</script>';
        return false;
    }
    $updated_query = query("UPDATE klip_arsip SET nomor_surat = '$nomor', 
                                                uraian = '$uraian',
                                                tanggal = '$tanggal',
                                                jumlah_lembar = '$jumlah',
                                                keterangan = '$keterangan'
                                        WHERE id_klip = '$data_id'");
    if($updated_query){
        echo '<script>alert("Data berhasil diupdate!"); location.href="../index.php?page=arsip";</script>';
    } else {
        echo '<script>alert("Update gagal!");</script>';
    }
}



function search_item($keyword){

}

function print_data(){

}
?>