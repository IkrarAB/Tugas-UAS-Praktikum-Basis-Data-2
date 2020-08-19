<html>
<head>
    <title>Tambah Data Dosen</title>
</head>
<link href="CSS.css" rel="stylesheet" type="text/css">

<body background="Space.jpg">
    <br><br><br>

    <form action="TambahDosen.php" method="post" name="form1">
        <table class="li" background="white.png" align="center" border="1">
			<tr> 
                <td colspan="2" align="center" class="cont"><b>TAMBAH DATA DOSEN</b></td>
            </tr>
            <tr> 
                <td><b>NIP</b></td>
                <td><input type="text" name="nip"></td>
            </tr>
            <tr> 
                <td><b>Nama Dosen</b></td>
                <td><input type="text" name="nama_dosen"></td>
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
                <td><b>Tanggal Lahir</b></td>
                <td><input type="date" name="tgl_lahir"></td>
            </tr>
			<tr> 
                <td><b>Jenis Kelamin</b></td>
                <td>
					<input type="radio" name="jk" value="1">Laki-laki
					<input type="radio" name="jk" value="2">Perempuan
				</td>
            </tr>
			<tr> 
                <td><b>Alamat</b></td>
                <td><textarea name="alamat"></textarea></td>
            </tr>
            <tr> 
                <td colspan="2" align="center"><input type="submit" name="Submit" value="TAMBAH"><button><a href="Dosen.php">KEMBALI</a></button></td>
            </tr>
        </table>
    </form>

    <?php

    if(isset($_POST['Submit'])) {
			$nip = $_POST['nip'];
			$nama_dosen = $_POST['nama_dosen'];
			$kode_mk = $_POST['kode_mk'];
			$tgl_lahir = $_POST['tgl_lahir'];
			$jk = $_POST['jk'];
			$alamat = $_POST['alamat'];
			
			include_once("config.php");
			
			$result = mysqli_query($mysqli, "INSERT INTO dosen(nip,nama_dosen,kode_mk,tgl_lahir,jk,alamat) VALUES('$nip','$nama_dosen','$kode_mk','$tgl_lahir','$jk','$alamat')");
			
			echo "<script>
			alert ('Berhasil Menambah Data');
			</script>";
    }
    ?>
</body>
</html>