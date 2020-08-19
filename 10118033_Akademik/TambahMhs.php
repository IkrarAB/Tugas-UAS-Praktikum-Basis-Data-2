<html>
<head>
    <title>Tambah Data Mahasiswa</title>
</head>
<link href="CSS.css" rel="stylesheet" type="text/css">

<body background="Space.jpg">
    <br><br><br>

    <form action="TambahMhs.php" method="post" name="form1">
        <table class="li" background="white.png" align="center" border="1">
			<tr> 
                <td colspan="2" align="center" class="cont"><b>TAMBAH DATA MAHASISWA</b></td>
            </tr>
            <tr> 
                <td><b>NIM</b></td>
                <td><input type="text" name="nim"></td>
            </tr>
            <tr> 
                <td><b>Nama Mahasiswa</b></td>
                <td><input type="text" name="nama_mhs"></td>
            </tr>
            <tr> 
                <td><b>Tanggal Lahir</b></td>
                <td><input type="date" name="tgl_lahir"></td>
            </tr>
			<tr> 
                <td><b>Alamat</b></td>
                <td><textarea name="alamat"></textarea></td>
            </tr>
			<tr> 
                <td><b>Jenis Kelamin</b></td>
                <td>
					<input type="radio" name="jk" value="1">Laki-laki
					<input type="radio" name="jk" value="2">Perempuan
				</td>
            </tr>
			<tr>
				<td><b>Jurusan</b></td>
                <td>
					<select name="id_jurusan">
					<option value="1"> Teknik Informatika
					<option value="2"> Teknik Elektro
					<option value="3"> Sastra Jepang
					<option value="4"> Sastra Inggris
					</select>
				</td>
            </tr>
            <tr> 
                <td colspan="2" align="center"><input type="submit" name="Submit" value="TAMBAH"><button><a href="Mahasiswa.php">KEMBALI</a></button></td>
            </tr>
        </table>
    </form>

    <?php

    if(isset($_POST['Submit'])) {
			$nim = $_POST['nim'];
			$nama_mhs = $_POST['nama_mhs'];
			$tgl_lahir = $_POST['tgl_lahir'];
			$jk = $_POST['jk'];
			$alamat = $_POST['alamat'];
			$id_jurusan = $_POST['id_jurusan'];
			
			include_once("config.php");

			$result = mysqli_query($mysqli, "INSERT INTO mahasiswa(nim,nama_mhs,tgl_lahir,jk,alamat,id_jurusan) VALUES('$nim','$nama_mhs','$tgl_lahir','$jk','$alamat','$id_jurusan')");
			
			echo "<script>
			alert ('Berhasil Menambah Data');
			</script>";
    }
    ?>
</body>
</html>