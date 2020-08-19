<html>
<head>
    <title>Tambah Data Nilai</title>
</head>
<link href="CSS.css" rel="stylesheet" type="text/css">

<body background="Space.jpg">
    <br><br><br>

    <form action="TambahNilai.php" method="post" name="form1">
        <table class="li" background="white.png" align="center" border="1">
			<tr> 
                <td colspan="2" align="center" class="cont"><b>TAMBAH DATA NILAI</b></td>
            </tr>
            <tr> 
                <td><b>NIM</b></td>
                <td><input type="text" name="nim"></td>
            </tr>
			<tr>
				<td><b>Mata Kuliah</b></td>
                <td>
					<select name="kode_mk">
					<option value="1"> Basis Data 2
					<option value="2"> Pemrograman Visual
					<option value="3"> Metode Numerik
					<option value="4"> Sistem Informasi
					<option value="5"> Sistem Operasi
					<option value="6"> Rekayasa Perangkat Lunak I
					<option value="7"> Aplikasi Teknologi Online
					</select>
				</td>
            </tr>
			<tr> 
                <td><b>Nilai</b></td>
                <td><input type="text" name="nilai"></td>
            </tr>
            <tr> 
                <td colspan="2" align="center"><input type="submit" name="Submit" value="TAMBAH"><button>
				<a href="Nilai.php">KEMBALI</a></button></td>
            </tr>
        </table>
    </form>

    <?php

    if(isset($_POST['Submit'])) {
			$nim = $_POST['nim'];
			$kode_mk = $_POST['kode_mk'];
			$nilai = $_POST['nilai'];
			
			include_once("config.php");
			
			$result = mysqli_query($mysqli, "INSERT INTO nilai(nim,kode_mk,nilai) VALUES('$nim','$kode_mk','$nilai')");
			
			if($result){
				echo "<script>
				alert ('Berhasil Menambah Data');
				</script>";
			} else {
				echo "<script>
				alert ('Gagal Menambah Data, NIM salah!');
				</script>";
			}
    }
    ?>
</body>
</html>