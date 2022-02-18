<?php
include 'koneksi.php';

$id = $_GET['id'];
mysqli_query($db, "DELETE from guru_mapel WHERE nip = '$id'");

header("location: guru_matpel.php?status=sukses");
