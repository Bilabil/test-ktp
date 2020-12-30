<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['tambah'])){

    // ambil data dari formulir
    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin= $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $pekerjaan = $_POST['pekerjaan'];

    $tempat_lahir = $_POST['tempat'];
    $tanggal_lahir = $_POST['tanggal'];
    
    $provinsi = $_POST['provinsi'];
    $kab_kota = $_POST['kab_kota'];
    
    $status = $_POST['status'];
    

    // buat query
    $sql = "INSERT INTO data_ktp (nik, nama, tempat_lahir, tanggal_lahir, jenis_kel, alamat, provinsi, kab_kota, agama, status, pekerjaan) VALUE ('$nik', '$nama','tempat_lahir','tanggal_lahir','jenis_kelamin', '$alamat', 'provinsi','kab_kota','$agama', 'status', '$pekerjaan')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: halaman_user.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: halaman_user.php?status=gagal');
    }


} else {
    die("Tombol belum berfungsi");
}

?>