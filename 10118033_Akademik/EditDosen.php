<?php
include_once("config.php");

if(isset($_POST['update']))
{   
    $nip = $_POST['nip'];
    $nama_dosen=$_POST['nama_dosen'];
	$kode_mk=$_POST['kode_mk'];
    $tgl_lahir=$_POST['tgl_lahir'];
	$jk=$_POST['jk'];
    $alamat=$_POST['alamat'];
	
    $result = mysqli_query($mysqli, "UPDATE dosen SET nip='$nip', nama_dosen='$nama_dosen',
									kode_mk='$kode_mk',tgl_lahir='$tgl_lahir',jk='$jk',alamat='$alamat' WHERE nip=$nip");

    header("Location: Dosen.php");
}
?>
<?php
$nip = $_GET['nip'];

$result = mysqli_query($mysqli, "SELECT * FROM dosen WHERE nip=$nip");

while($user_data = mysqli_fetch_array($result))
{
    $nip = $user_data['nip'];
    $nama_dosen = $user_data['nama_dosen'];
	$kode_mk = $user_data['kode_mk'];
    $tgl_lahir = $user_data['tgl_lahir'];
	$jk = $user_data['jk'];
	$alamat = $user_data['alamat'];
}
?>
<html>
<head>  
    <title>Ubah Data Dosen</title>
</head>
<link href="CSS.css" rel="stylesheet" type="text/css">

<body background="Space.jpg">
    <br><br><br>

    <form action="EditDosen.php" method="post" name="update_dosen">
        <table class="li" background="white.png" align="center" border="1">
			<tr> 
                <td colspan="2" align="center" class="cont"><b>UBAH DATA DOSEN</b></td>
            </tr>
            <tr> 
                <td><b>NIP</b></td>
                <td><input type="text" name="nip" value=<?php echo $nip;?> disabled></td>
            </tr>
            <tr> 
                <td><b>Nama Dosen</b></td>
                <td><input type="text" name="nama_dosen" value=<?php echo $nama_dosen;?>></td>
            </tr>
            <tr> 
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
                <td><b>Tanggal Lahir</b></td>
                <td><input type="date" name="tgl_lahir" value=<?php echo $tgl_lahir;?>></td>
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
                <td><textarea name="alamat" value=<?php echo $alamat;?>></textarea></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="hidden" name="nip" value=<?php echo $_GET['nip'];?>><input type="submit" name="update" value="UBAH">
				<button><a href="Dosen.php">KEMBALI</a></button></td>
            </tr>
        </table>
    </form>
</body>
</html>