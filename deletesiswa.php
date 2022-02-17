<?php
include 'koneksi.php';

$id = $_GET['id'];
mysqli_query($db, "DELETE from siswa WHERE nis = '$id'");

header("location: siswa.php?status=sukses");
