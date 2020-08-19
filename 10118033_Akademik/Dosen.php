<?php
include_once("config.php");

$result = mysqli_query($mysqli, "SELECT * FROM dosen JOIN matkul ON dosen.kode_mk = matkul.kode_mk ORDER BY nip");
?>

<html>
<head>
	<title>DOSEN</title>
<link href="CSS.css" rel="stylesheet" type="text/css">
</head>
<body background="Space.jpg">
<br><br><br>
<table class="li" background="white.png" align="center" border="1" width="800">
	<tr>
		<td colspan="8"><p class="Judul" align="center">DOSEN</p></td>
	</tr>
	<tr>
        <th>NIP</th> <th>Nama Dosen</th> <th>Mata Kuliah</th> <th>Tanggal Lahir</th> <th>Jenis Kelamin</th> <th>Alamat</th> <th colspan="2">Update</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
		echo "<td>".$user_data['nip']."</td>";
        echo "<td>".$user_data['nama_dosen']."</td>";
		echo "<td>".$user_data['nama_mk']."</td>";
        echo "<td>".$user_data['tgl_lahir']."</td>";
        echo "<td>".$user_data['jk']."</td>";
		echo "<td>".$user_data['alamat']."</td>";
		echo "<td><a href='EditDosen.php?nip=$user_data[nip]'>Ubah</a></td>";
		echo "<td><a href='DeleteDosen.php?nip=$user_data[nip]'>Hapus</a></td></tr>";
    }
    ?>
	<tr>
		<td colspan="8" align="center"><a href="TambahDosen.php"><button><b>TAMBAH DATA DOSEN</b></button></a></td>
	</tr>
</table>
</body>
</html>