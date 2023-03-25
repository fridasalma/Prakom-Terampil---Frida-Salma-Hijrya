<?php include("config.php"); ?>

<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pendaftaran Pasien Lama dan Pasien Baru || RSUD Ajibarang</title>
</head>

<body>
	<header>
		<h3>Pasien yang Sudah Terdaftar</h3>
	</header>

	<nav>
		<a href="form-daftar.php">[+] Tambah Baru</a>
	</nav>

	<br>

	<table border="1">
	<thead>
		<tr>
			<th>Nomor Rekam Medis</th>
			<th>Tanggal Registrasi</th>
			<th>Kd Poli</th>
			<th>Kd Dokter</th>
		</tr>
	</thead>
</body>

<?php
        $sql = "SELECT * FROM pendaftaran

        while($pasien = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$pasien['norm']."</td>";
            echo "<td>".$pasien['tglreg']."</td>";
            echo "<td>".$pasien['kdpoli']."</td>";
            echo "<td>".$pasien['kddokter']."</td>";
           
            echo "<td>";
            echo "<a href='form-edit.php?id=".$pasien['id']."'>Edit</a> | ";
            echo "<a href='hapus.php?id=".$pasien['id']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </tbody>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>

    </body>

</html>