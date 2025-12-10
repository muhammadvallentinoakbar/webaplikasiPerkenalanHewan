<?php
include '../config.php';
$id = $_GET['id'];
mysqli_query($koneksi, "DELETE FROM tb_hewan WHERE id='$id'");
header("location: data-hewan.php");
?>
