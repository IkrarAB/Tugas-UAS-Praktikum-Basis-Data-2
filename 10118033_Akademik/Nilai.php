<?php
include_once("config.php");

$result = mysqli_query($mysqli, "SELECT * FROM nilai JOIN mahasiswa ON nilai.nim = mahasiswa.nim JOIN matkul ON nilai.kode_mk = matkul.kode_mk");

?>

<html>
<head>
	<title>NILAI</title>
<link href="CSS.css" rel="stylesheet" type="text/css">
</head>
<body background="Space.jpg">
<br><br><br>
<table class="li" background="white.png" align="center" border="1" width="800">
	<tr>
		<td colspan="5"><p class="Judul" align="center">NILAI</p></td>
	</tr>
	<tr>
        <th>NIM</th> <th>Mata Kuliah</th> <th>Nilai</th> <th colspan="2">Update</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
		echo "<td>".$user_data['nim']."</td>";
        echo "<td>".$user_data['nama_mk']."</td>";
		echo "<td>".$user_data['nilai']."</td>";
		echo "<td><a href='EditNilai.php?id_nilai=$user_data[id_nilai]'>Ubah</a></td>";
		echo "<td><a href='DeleteNilai.php?id_nilai=$user_data[id_nilai]'>Hapus</a></td></tr>";
    }
    ?>
	<tr>
		<td colspan="5" align="center"><a href="TambahNilai.php"><button><b>TAMBAH DATA NILAI</b></button></a></td>
	</tr>
</table>
</body>
</html>