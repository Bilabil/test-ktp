<!DOCTYPE html>
<html>

<body>
    

    <form action="proses-tambah.php" method="POST">

        <fieldset>

        <p>
            <label for="nik">NIK: </label>
            <input type="text" name="nik" placeholder="" />
        </p>

        <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" placeholder="" />
        </p>

        <p>
            <label for="tempat">Tempat Lahir: </label>
            <input type="text" name="tempat_lahir" placeholder="" />
        </p>

        <p>
            <label for="tanggal">Tanggal Lahir: </label>
            <input type="date" name="tanggal_lahir" placeholder="" />
        </p>

        <p>
            <label for="jk">Jenis Kelamin: </label>
            <label><input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki</label>
            <label><input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan</label>
        </p>

        <p>
            <label for="alamat">Alamat: </label>
            <textarea name="alamat"></textarea>
        </p>
       
       <p>
            <label for="provinsi">Provinsi: </label>
            <input type="text" name="provinsi" placeholder="" />
        </p>

        <p>
            <label for="kab_kota">Kabupaten/Kota: </label>
            <input type="text" name="kab_kota" placeholder="" />
        </p>


        <p>
            <label for="agama">Agama: </label>
            <select name="agama">
                <option>Islam</option>
                <option>Katolik</option>
                <option>Protestan</option>
                <option>Hindu</option>
                <option>Budha</option>
                <option>Konghucu</option>
            </select>
        </p>

        <p>
            <label for="status">Status Perkawinan: </label>
            <select name="status">
                <option>Belum Kawin</option>
                <option>Kawin</option>
                <option>Cerai</option>
              
            </select>
        </p>


        <p>
            <label for="pekerjaan">Pekerjaan: </label>
            <input type="text" name="pekerjaan" placeholder="" />
        </p>

        <p>
            <input type="submit" value="Tambah" name="tambah" />
        </p>

        </fieldset>

    </form>

    </body>
</html>