<?php
include_once("config.php");

$id_nilai = $_GET['id_nilai'];

$result = mysqli_query($mysqli, "DELETE FROM nilai WHERE id_nilai='$id_nilai'");

header("Location: Nilai.php");
?>