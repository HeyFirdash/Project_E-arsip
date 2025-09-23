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
    $check = query("SELECT * FROM user WHERE username='$usn' LIMIT 1");
    
    if(mysqli_num_rows($check) > 0){
        $data = mysqli_fetch_assoc($check);
        
        // Bandingkan password input dengan hash di database
        if(password_verify(PASSWORD_DEFAULT,$pwd)){
            $_SESSION['user'] = $data;
            echo '<script>alert("Selamat datang"); location.href="index.php"</script>';
        } else {
            echo '<script>alert("Password salah!");</script>';
        }
    } else {
        echo '<script>alert("Username tidak ditemukan!");</script>';
    }
}

function log_out($id_user){

}

function read_data($qry){

}
function insert_data($nomor_surat, $uraian, $tanggal, $jumlah, $keterangan){

}

function edit_data($nomor_surat, $uraian, $tanggal, $jumlah, $keterangan){

}

function delete_single($id){

}

function delete_all($qry){

}
?>