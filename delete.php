 <?php
include ('koneksi.php');
$id =$_GET ['id'];

$delete = " DELETE FROM jurusan WHERE id='$id'";
mysqli_query($koneksi,$delete);
header('location:jurusan.php');
?> 