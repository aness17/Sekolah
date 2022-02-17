<?php
include 'koneksi.php';

$id = $_GET['nis'];
$sql = "DELETE from siswa WHERE nis = '$id'";

mysqli_query($db, $sql);

header("location: siswa.php?status=sukses");
