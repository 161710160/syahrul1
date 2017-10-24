<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tambah Jurusan</title>
	<link  href="/CRUD/bootstrap/af/dist/css/bootstrap.min.css" rel="stylesheet">
		<link  href="/CRUD/bootstrap/af/dist/css/bootstrap.css" rel="stylesheet">
			<link  href="/CRUD/bootstrap/af/dist/css/bootstrap-theme.css" rel="stylesheet">
				<link  href="/CRUD/bootstrap/af/dist/css/bootstrap-theme.min.css" rel="stylesheet">
</head>
<body>

</body>
<H1 align="center" >Input Jurusan </H1>
<fieldset style="width: 50%; margin: auto;">
<legend>Form Input Jurusan </legend>
<form action="simpan.php" method="post">
<p>
<div class="container">
  <form action="/action_page.php">
    <div class="form-group">
      <label for="email">Nama Jurusan</label> <br>
      <input type="text" class="form-control" id="jurusan" placeholder="Tulis Jurusan" name="jurusan">
    </div>
</p>
<p>
	<input type="Submit" value="Simpan" class="btn btn-success">
<input type="reset" value="Reset" class="btn btn-primary" onclick="return confirm ('Hapus Moal')">
</p>
 </form>
 </fieldset>
 <br/>
  <center><a href="jurusan.php">	<input type="Submit" value="Tabel Jurusan" class="btn btn-info">
</a>
</center>
</div>
</p>
</form>	
</fieldset>
</html>