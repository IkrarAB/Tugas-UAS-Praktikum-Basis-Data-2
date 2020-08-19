<?php
include_once("config.php");

$result = mysqli_query($mysqli, "SELECT * FROM jurusan ORDER BY id_jurusan");
?>

<html>
<head>
	<title>JURUSAN</title>
<link href="CSS.css" rel="stylesheet" type="text/css">
</head>
<body background="Space.jpg">
<br><br><br>
<table class="li" background="white.png" align="center" border="1" width="800">
	<tr>
		<td colspan="4"><p class="Judul" align="center">JURUSAN</p></td>
	</tr>
	<tr>
        <th>ID Jurusan</th> <th>Nama Jurusan</th> <th colspan="2">Update</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
		echo "<td>".$user_data['id_jurusan']."</td>";
        echo "<td>".$user_data['nama_jurusan']."</td>";
		echo "<td><a href='EditJurusan.php?id_jurusan=$user_data[id_jurusan]'>Ubah</a></td>";
		echo "<td><a href='DeleteJurusan.php?id_jurusan=$user_data[id_jurusan]'>Hapus</a></td></tr>";
    }
    ?>
	<tr>
		<td colspan="4" align="center"><a href="TambahJurusan.php"><button><b>TAMBAH DATA JURUSAN</b></button></a></td>
	</tr>
</table>
</body>
</html>