<?php
include_once("config.php");

$kode_mk = $_GET['kode_mk'];

$result = mysqli_query($mysqli, "DELETE FROM matkul WHERE kode_mk='$kode_mk'");

header("Location: MataKuliah.php");
?>