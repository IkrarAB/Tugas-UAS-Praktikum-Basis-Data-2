<?php
include_once("config.php");

$nip = $_GET['nip'];

$result = mysqli_query($mysqli, "DELETE FROM dosen WHERE nip='$nip'");

header("Location: Dosen.php");
?>