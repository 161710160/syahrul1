<?php
include('koneksi.php');
$id =$_POST['id'];
$nama=$_POST['jurusan'];
$edit ="UPDATE jurusan SET jurusan='$nama' WHERE id ='$id'";
mysqli_query($koneksi,$edit);
header("location:jurusan.php");
?>