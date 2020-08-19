<?php
include_once("config.php");

$result = mysqli_query($mysqli, "SELECT * FROM mahasiswa JOIN jurusan ON mahasiswa.id_jurusan = jurusan.id_jurusan ORDER BY nim");
?>

<html>
<head>
	<title>MAHASISWA</title>
<link href="CSS.css" rel="stylesheet" type="text/css">
</head>
<body background="Space.jpg">
<br><br><br>
<table class="li" background="white.png" align="center" border="1" width="800">
	<tr>
		<td colspan="8"><p class="Judul" align="center">MAHASISWA</p></td>
	</tr>
	<tr>
        <th>NIM</th> <th>Nama Mahasiswa</th> <th>Tanggal Lahir</th> <th>Jenis Kelamin</th> <th>Alamat</th> <th>Jurusan</th> <th colspan="2">Update</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
		echo "<td>".$user_data['nim']."</td>";
        echo "<td>".$user_data['nama_mhs']."</td>";
        echo "<td>".$user_data['tgl_lahir']."</td>";
        echo "<td>".$user_data['jk']."</td>";
		echo "<td>".$user_data['alamat']."</td>";
		echo "<td>".$user_data['nama_jurusan']."</td>";
		echo "<td><a href='EditMhs.php?nim=$user_data[nim]'>Ubah</a></td>";
		echo "<td><a href='DeleteMhs.php?nim=$user_data[nim]'>Hapus</a></td></tr>";
    }
    ?>
	<tr>
		<td colspan="8" align="center"><a href="TambahMhs.php"><button><b>TAMBAH DATA MAHASISWA</b></button></a></td>
	</tr>
</table>
</body>
</html>