<?php
include 'koneksi.php';

$id = $_GET['id'];
mysqli_query($db, "DELETE from nilai WHERE nis = '$id'");

header("location: nilai.php?status=sukses");
