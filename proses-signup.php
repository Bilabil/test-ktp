<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['tambah'])){

    // ambil data dari formulir
    $user_mail = $_POST['user_mail'];
    $user_pass = $_POST['user_pass'];
    $user_role = 'user';
   
    
    // buat query
    $sql = "INSERT INTO admin (user_mail, user_pass, user_role) VALUE ('$user_mail', '$user_pass', '$user_role')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: signup.php?status=gagal');
    }


} else {
    die("tombol belum berfungsi");
}

?>