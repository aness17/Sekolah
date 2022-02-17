<?php
include 'koneksi.php';

$id = $_GET['id'];
mysqli_query($db, "DELETE from mapel WHERE id = '$id'");

header("location: matpel.php?status=sukses");
