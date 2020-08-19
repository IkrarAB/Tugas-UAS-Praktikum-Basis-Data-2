<?php
include_once("config.php");

$result = mysqli_query($mysqli, "SELECT * FROM matkul ORDER BY kode_mk");
?>

<html>
<head>
	<title>MATA KULIAH</title>
<link href="CSS.css" rel="stylesheet" type="text/css">
</head>
<body background="Space.jpg">
<br><br><br>
<table class="li" background="white.png" align="center" border="1" width="800">
	<tr>
		<td colspan="6"><p class="Judul" align="center">MATA KULIAH</p></td>
	</tr>
	<tr>
        <th>Kode Mata Kuliah</th> <th>Nama Mata Kuliah</th> <th>Semester</th> <th>SKS</th> <th colspan="2">Update</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
		echo "<td>".$user_data['kode_mk']."</td>";
        echo "<td>".$user_data['nama_mk']."</td>";
		echo "<td>".$user_data['semester']."</td>";
        echo "<td>".$user_data['sks']."</td>";
		echo "<td><a href='EditMatkul.php?kode_mk=$user_data[kode_mk]'>Ubah</a></td>";
		echo "<td><a href='DeleteMatkul.php?kode_mk=$user_data[kode_mk]'>Hapus</a></td></tr>";
    }
    ?>
	<tr>
		<td colspan="6" align="center"><a href="TambahMatkul.php"><button><b>TAMBAH DATA MATA KULIAH</b></button></a></td>
	</tr>
</table>
</body>
</html>