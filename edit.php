<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Edit Jurusan</title>
	<link  href="/CRUD/bootstrap/af/dist/css/bootstrap.min.css" rel="stylesheet">
		<link  href="/CRUD/bootstrap/af/dist/css/bootstrap.css" rel="stylesheet">
			<link  href="/CRUD/bootstrap/af/dist/css/bootstrap-theme.css" rel="stylesheet">
				<link  href="/CRUD/bootstrap/af/dist/css/bootstrap-theme.min.css" rel="stylesheet">
</head>
<body bgcolor="lime">
<?php
	include('koneksi.php');
	$id =$_GET['id'];
	$mhs =mysqli_query($koneksi,"SELECT * FROM jurusan WHERE id='$id'");
	$data =mysqli_fetch_array($mhs);
	 ?>
	 <center> <h3>Edit  Jurusan</h3></center>
	 <fieldset style="width: 50%; margin: auto;">
	 	<legend>Form Edit Jurusan </legend>
	 	<form action="savedit.php" method="post">
	 		<input type="hidden" name="id" value="<?php echo $data['id'];?>">
	 		<p>
	 			<div class="container">
  <form action="/action_page.php">
    <div class="form-group">
      <label for="jurusan">Nama Jurusan:</label><br>
      <input type="text" class="form-control" id="jurusan" placeholder="Enter Jurusan" name="jurusan">
    </div>
	 		</p>
	 		<p>
	 	<input type="Submit" value="Simpan" class="btn btn-info">
	 		</p>
	 	</form>
	 </fieldset>
<br/><center>
<a href="jurusan.php">
<input type="Submit" value="Lihat data" class="btn btn-primary">
</a></center></div></p></form></fieldset></body></html>
</body>
</html>