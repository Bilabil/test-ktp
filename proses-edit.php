<?php

include("config.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan'])){

    // ambil data dari formulir
    $id = $_POST['id'];
    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $jenis_kelamin= $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];
    $provinsi = $_POST['provinsi'];
    $kab_kota = $_POST['kab_kota'];
    $agama = $_POST['agama'];
    $status = $_POST['status'];
    $pekerjaan = $_POST['pekerjaan'];

    // buat query update
    $sql = "UPDATE data_ktp SET nik ='$nik', nama='$nama', tempat_lahir='$tempat_lahir', tanggal_lahir='tanggal_lahir', alamat='$alamat', jenis_kel='$jenis_kelamin', provinsi='$provinsi', kab_kota='$kab_kota', agama='$agama', status='$status', pekerjaan='$pekerjaan' WHERE id=$id";
    $query = mysqli_query($db, $sql);

    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman 
        header('Location: halaman_user.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Tombol belum berfungsi");
}

?>