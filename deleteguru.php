<?php
include 'koneksi.php';

$id = $_GET['id'];
mysqli_query($db, "DELETE from guru WHERE nip = '$id'");

header("location: guru.php?status=sukses");
