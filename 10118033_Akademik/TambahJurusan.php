<html>
<head>
    <title>Tambah Data Jurusan</title>
</head>
<link href="CSS.css" rel="stylesheet" type="text/css">

<body background="Space.jpg">
    <br><br><br>

    <form action="TambahJurusan.php" method="post" name="form1">
        <table class="li" background="white.png" align="center" border="1">
			<tr> 
                <td colspan="2" align="center" class="cont"><b>TAMBAH DATA JURUSAN</b></td>
            </tr>
            <tr> 
                <td><b>Nama Jurusan</b></td>
                <td><input type="text" name="nama_jurusan"></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="Submit" value="TAMBAH"><button><a href="Jurusan.php">KEMBALI</a></button></td>
            </tr>
        </table>
    </form>

    <?php

    if(isset($_POST['Submit'])) {
			$nama_jurusan = $_POST['nama_jurusan'];
			
			include_once("config.php");
			
			$result = mysqli_query($mysqli, "INSERT INTO jurusan(nama_jurusan) VALUES('$nama_jurusan')");
			
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