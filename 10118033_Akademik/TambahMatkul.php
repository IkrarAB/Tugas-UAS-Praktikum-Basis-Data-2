<html>
<head>
    <title>Tambah Data Matkul</title>
</head>
<link href="CSS.css" rel="stylesheet" type="text/css">

<body background="Space.jpg">
    <br><br><br>

    <form action="TambahMatkul.php" method="post" name="form1">
        <table class="li" background="white.png" align="center" border="1">
			<tr> 
                <td colspan="2" align="center" class="cont"><b>TAMBAH DATA MATA KULIAH</b></td>
            </tr>
            <tr> 
                <td><b>Nama Mata Kuliah</b></td>
                <td><input type="text" name="nama_mk"></td>
            </tr>
			<tr> 
                <td><b>Semester</b></td>
                <td><input type="text" name="semester"></td>
            </tr>
			<tr> 
                <td><b>SKS</b></td>
                <td><input type="text" name="sks"></td>
            </tr>
            <tr> 
                <td colspan="2" align="center"><input type="submit" name="Submit" value="TAMBAH"><button><a href="MataKuliah.php">KEMBALI</a></button></td>
            </tr>
        </table>
    </form>

    <?php

    if(isset($_POST['Submit'])) {
			$nama_mk = $_POST['nama_mk'];
			$semester = $_POST['semester'];
			$sks = $_POST['sks'];
			
			include_once("config.php");
			
			$result = mysqli_query($mysqli, "INSERT INTO matkul(nama_mk,semester,sks) VALUES('$nama_mk','$semester','$sks')");
			
			echo "<script>
			alert ('Berhasil Menambah Data');
			</script>";
    }
    ?>
</body>
</html>