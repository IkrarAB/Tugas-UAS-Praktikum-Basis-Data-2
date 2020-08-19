<?php
include_once("config.php");

if(isset($_POST['update']))
{   
	$kode_mk=$_POST['kode_mk'];
    $nama_mk=$_POST['nama_mk'];
	$semester=$_POST['semester'];
    $sks=$_POST['sks'];
	
    $result = mysqli_query($mysqli, "UPDATE matkul SET nama_mk='$nama_mk',
									semester='$semester',sks='$sks' WHERE kode_mk=$kode_mk");

    header("Location: MataKuliah.php");
}
?>
<?php
$kode_mk = $_GET['kode_mk'];

$result = mysqli_query($mysqli, "SELECT * FROM matkul WHERE kode_mk=$kode_mk");

while($user_data = mysqli_fetch_array($result))
{
    $kode_mk = $user_data['kode_mk'];
    $nama_mk = $user_data['nama_mk'];
	$semester = $user_data['semester'];
    $sks = $user_data['sks'];
}
?>
<html>
<head>  
    <title>Ubah Data Matkul</title>
</head>
<link href="CSS.css" rel="stylesheet" type="text/css">

<body background="Space.jpg">
    <br><br><br>

    <form action="EditMatkul.php" method="post" name="update_matkul">
        <table class="li" background="white.png" align="center" border="1">
			<tr> 
                <td colspan="2" align="center" class="cont"><b>UBAH DATA MATA KULIAH</b></td>
            </tr>
            <tr> 
                <td><b>Kode Mata Kuliah</b></td>
                <td><input type="text" name="kode_mk" value=<?php echo $kode_mk;?> disabled></td>
            </tr>
            <tr> 
                <td><b>Nama Mata Kuliah</b></td>
                <td><input type="text" name="nama_mk" value=<?php echo $nama_mk;?>></td>
            </tr>
			<tr> 
                <td><b>Semester</b></td>
                <td><input type="text" name="semester" value=<?php echo $semester;?>></td>
            </tr>
			<tr> 
                <td><b>SKS</b></td>
                <td><input type="text" name="sks" value=<?php echo $sks;?>></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="hidden" name="kode_mk" value=<?php echo $_GET['kode_mk'];?>><input type="submit" name="update" value="UBAH">
				<button><a href="MataKuliah.php">KEMBALI</a></button></td>
            </tr>
        </table>
    </form>
</body>
</html>