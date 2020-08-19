<?php
include_once("config.php");

$id_jurusan = $_GET['id_jurusan'];

$result = mysqli_query($mysqli, "DELETE FROM jurusan WHERE id_jurusan='$id_jurusan'");

header("Location: Jurusan.php");
?>