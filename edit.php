<?php

include("config.php");

// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: halaman_user.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM data_ktp WHERE id=$id";
$query = mysqli_query($db, $sql);
$ktp = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
    
</head>

<body>
    <header>
        <h3>Edit Datum</h3>
    </header>

    <form action="proses-edit.php" method="POST">

        <fieldset>

            <input type="hidden" name="id" value="<?php echo $ktp['id'] ?>" />

        <p>
            <label for="nik">NIK: </label>
            <input type="text" name="nik" placeholder="" value="<?php echo $ktp['nik'] ?>" />
        </p>

        <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" placeholder="" value="<?php echo $ktp['nama'] ?>" />
        </p>

        <p>
            <label for="tempat_lahir">Tempat Lahir: </label>
            <input type="text" name="tempat_lahir" placeholder="" value="<?php echo $ktp['tempat_lahir'] ?>" />
        </p>

        <p>
            <label for="tanggal_lahir">Tanggal Lahir: </label>
            <input type="date" name="tanggal_lahir" placeholder="" value="<?php echo $ktp['tanggal_lahir'] ?>" />
        </p>

        <p>
            <label for="jenis_kelamin">Jenis Kelamin: </label>
            <?php $jk = $ktp['jenis_kel']; ?>
            <label><input type="radio" name="jenis_kelamin" value="laki-laki" <?php echo ($jk == 'laki-laki') ? "checked": "" ?>> Laki-laki</label>
            <label><input type="radio" name="jenis_kelamin" value="perempuan" <?php echo ($jk == 'perempuan') ? "checked": "" ?>> Perempuan</label>
        </p>

        <p>
            <label for="alamat">Alamat: </label>
            <textarea name="alamat"><?php echo $ktp['alamat'] ?></textarea>
        </p>

        <p>
            <label for="provinsi">Provinsi: </label>
            <input type="text" name="provinsi" placeholder="" value="<?php echo $ktp['provinsi'] ?>" />
        </p>

        <p>
            <label for="kab_kota">Kabupaten/Kota: </label>
            <input type="text" name="kab_kota" placeholder="" value="<?php echo $ktp['kab_kota'] ?>" />
        </p>


        <p>
            <label for="agama">Agama: </label>
            <?php $agama = $ktp['agama']; ?>
            <select name="agama">
                <option <?php echo ($agama == 'Islam') ? "selected": "" ?>>Islam</option>
                <option <?php echo ($agama == 'Katolik') ? "selected": "" ?>>Katolik</option>
                <option <?php echo ($agama == 'Protestan') ? "selected": "" ?>>Protestan</option>
                <option <?php echo ($agama == 'Hindu') ? "selected": "" ?>>Hindu</option>
                <option <?php echo ($agama == 'Budha') ? "selected": "" ?>>Budha</option>
                <option <?php echo ($agama == 'Konghucu') ? "selected": "" ?>>Konghucu</option>
            </select>
        </p>

         <p>
            <label for="status">Status Perkawinan: </label>
            <?php $status = $ktp['status']; ?>
            <select name="status">
                <option <?php echo ($status == 'Belum Kawin') ? "selected": "" ?>>Belum Kawin</option>
                <option <?php echo ($status == 'Kawin') ? "selected": "" ?>>Kawin</option>
                <option <?php echo ($status == 'Cerai') ? "selected": "" ?>>Cerai</option>
                
            </select>
        </p>

        <p>
            <label for="pekerjaan">Pekerjaan: </label>
            <?php $pekerjaan = $ktp['pekerjaan']; ?>
            <select name="pekerjaan">
                <option <?php echo ($pekerjaan == 'Belum/Tidak Bekerja') ? "selected": "" ?>>Belum/Tidak Bekerja</option>
                <option <?php echo ($pekerjaan == 'PNS') ? "selected": "" ?>>PNS</option>
                <option <?php echo ($pekerjaan == 'Peg Swasta') ? "selected": "" ?>>Peg Swasta</option>
                <option <?php echo ($pekerjaan == 'Seniman') ? "selected": "" ?>>Seniman</option>
                <option <?php echo ($pekerjaan == 'Pelajar/ Mahasiswa') ? "selected": "" ?>>Pelajar/Mahasiswa</option>
                <option <?php echo ($pekerjaan == 'Wiraswasta') ? "selected": "" ?>>Wiraswasta</option>
            </select>
        </p>
        <p>
            <input type="submit" value="Update" name="simpan" />
        </p>

        </fieldset>


    </form>

    </body>
</html>