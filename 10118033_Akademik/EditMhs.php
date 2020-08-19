<?php
include_once("config.php");

if(isset($_POST['update']))
{   
    $nim = $_POST['nim'];
    $nama_mhs=$_POST['nama_mhs'];
    $tgl_lahir=$_POST['tgl_lahir'];
    $alamat=$_POST['alamat'];
	$jk=$_POST['jk'];
	$id_jurusan=$_POST['id_jurusan'];
	
    $result = mysqli_query($mysqli, "UPDATE mahasiswa SET nim='$nim', nama_mhs='$nama_mhs',
									tgl_lahir='$tgl_lahir',alamat='$alamat',jk='$jk',id_jurusan='$id_jurusan' WHERE nim=$nim");

    header("Location: Mahasiswa.php");
}
?>
<?php

$nim = $_GET['nim'];

$result = mysqli_query($mysqli, "SELECT * FROM mahasiswa WHERE nim=$nim");

while($user_data = mysqli_fetch_array($result))
{
    $nim = $user_data['nim'];
    $nama_mhs = $user_data['nama_mhs'];
    $tgl_lahir = $user_data['tgl_lahir'];
	$alamat = $user_data['alamat'];
	$jk = $user_data['jk'];
	$id_jurusan = $user_data['id_jurusan'];
}
?>
<html>
<head>  
    <title>Ubah Data Mahasiswa</title>
</head>
<link href="CSS.css" rel="stylesheet" type="text/css">

<body background="Space.jpg">
    <br><br><br>

    <form action="EditMhs.php" method="post" name="update_mahasiswa">
        <table class="li" background="white.png" align="center" border="1">
			<tr> 
                <td colspan="2" align="center" class="cont"><b>UBAH DATA MAHASISWA</b></td>
            </tr>
            <tr> 
                <td><b>NIM</b></td>
                <td><input type="text" name="nim" value=<?php echo $nim;?> disabled></td>
            </tr>
            <tr> 
                <td><b>Nama Mahasiswa</b></td>
                <td><input type="text" name="nama_mhs" value=<?php echo $nama_mhs;?>></td>
            </tr>
            <tr> 
                <td><b>Tanggal Lahir</b></td>
                <td><input type="date" name="tgl_lahir" value=<?php echo $tgl_lahir;?>></td>
            </tr>
			<tr> 
                <td><b>Alamat</b></td>
                <td><textarea name="alamat" value=<?php echo $alamat;?>></textarea></td>
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
                <td colspan="2" align="center"><input type="hidden" name="nim" value=<?php echo $_GET['nim'];?>><input type="submit" name="update" value="UBAH">
				<button><a href="Mahasiswa.php">KEMBALI</a></button></td>
            </tr>
        </table>
    </form>
</body>
</html>