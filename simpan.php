<?php
include ('koneksi.php');

$nama  =$_POST['jurusan'];

$tambah ="INSERT INTO jurusan set jurusan='$nama'";
mysqli_query($koneksi,$tambah);
header("location:jurusan.php");
?>	