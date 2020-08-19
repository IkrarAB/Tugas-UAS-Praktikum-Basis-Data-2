<?php
include_once("config.php");

if(isset($_POST['update']))
{   
	$id_nilai=$_POST['id_nilai'];
	$kode_mk = $_POST['kode_mk'];
    $nilai=$_POST['nilai'];
	
    $result = mysqli_query($mysqli, "UPDATE nilai SET kode_mk='$kode_mk',nilai='$nilai' WHERE id_nilai=$id_nilai");

	header("Location: Nilai.php");
}
?>
<?php
$id_nilai = $_GET['id_nilai'];

$result = mysqli_query($mysqli, "SELECT * FROM nilai WHERE id_nilai=$id_nilai");

while($user_data = mysqli_fetch_array($result))
{
    $id_nilai = $user_data['id_nilai'];
	$nim = $user_data['nim'];
	$kode_mk = $user_data['kode_mk'];
    $nilai = $user_data['nilai'];
}
?>
<html>
<head>  
    <title>Ubah Data Matkul</title>
</head>
<link href="CSS.css" rel="stylesheet" type="text/css">

<body background="Space.jpg">
    <br><br><br>

    <form action="EditNilai.php" method="post" name="update_nilai">
        <table class="li" background="white.png" align="center" border="1">
			<tr> 
                <td colspan="2" align="center" class="cont"><b>UBAH DATA NILAI</b></td>
            </tr>
			<tr>
                <td><b>ID Nilai</b></td>
                <td><input type="text" name="id_nilai" value=<?php echo $id_nilai;?> disabled></td>
            </tr>
            <tr>
                <td><b>NIM</b></td>
                <td><input type="text" name="nim" value=<?php echo $nim;?> disabled></td>
            </tr>
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
			<tr>
                <td><b>Nilai</b></td>
                <td><input type="text" name="nilai" value=<?php echo $nilai;?>></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="hidden" name="id_nilai" value=<?php echo $_GET['id_nilai'];?>><input type="submit" name="update" value="UBAH">
				<button><a href="Nilai.php">KEMBALI</a></button></td>
            </tr>
        </table>
    </form>
</body>
</html>