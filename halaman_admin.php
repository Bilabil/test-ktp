
<?php
session_start();
?>

<?php include("config.php"); ?>

<!DOCTYPE html>
<html>

<body>
	
    <header>
        <h3>Data KTP</h3>
    </header>

   
    <table width="100%" cellpadding="4" cellspacing="1" bgcolor="#ccc">
<tr>
 <th bgcolor="#eee" width="30">No</th>
 <th bgcolor="#eee" width="100">NIK</th>
 <th bgcolor="#eee">Nama</th>
 <th bgcolor="#eee" width="100">Tempat Lahir</th>
 <th bgcolor="#eee" width="120">Tanggal Lahir</th>
 <th bgcolor="#eee" width="100">Jenis Kelamin</th>
 <th bgcolor="#eee" width="50">Alamat</th>
 <th bgcolor="#eee" width="50">Provinsi</th>
 <th bgcolor="#eee" width="50">Kabupaten/Kota</th>
 <th bgcolor="#eee" width="50">Agama</th>
 <th bgcolor="#eee" width="50">Status Perkawinan</th>
<th bgcolor="#eee" width="50">Pekerjaan</th>
</tr>
 
  <?php
        $sql = "SELECT * FROM data_ktp";
        $query = mysqli_query($db, $sql);

        while($ktp = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$ktp['id']."</td>";
            echo "<td>".$ktp['nik']."</td>";
            echo "<td>".$ktp['nama']."</td>";
            echo "<td>".$ktp['tempat_lahir']."</td>";
            echo "<td>".$ktp['tanggal_lahir']."</td>";
            echo "<td>".$ktp['jenis_kel']."</td>";
            echo "<td>".$ktp['alamat']."</td>";
            echo "<td>".$ktp['provinsi']."</td>";
            echo "<td>".$ktp['kab_kota']."</td>";
            echo "<td>".$ktp['agama']."</td>";
            echo "<td>".$ktp['status']."</td>";
            echo "<td>".$ktp['pekerjaan']."</td>";

                    }
        ?>

    </tbody>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>

    </body>
	<a href = "cetak.php">Cetak</a>
    <a href="logout.php">LOGOUT</a>


	<br/>
	<br/>

</body>
</html>


