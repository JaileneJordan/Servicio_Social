<html>
	<head>
		<title>Subir imagenes del Carousel</title>
	  <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
	</head>
	<body>

		<div class="container">
			<div class="row">
				<div class="col-md-12">
		<h1>Subir imagenes o archivos</h1>
		<form enctype="multipart/form-data" method="post" action="upload.php">

  <div class="form-group">
    <label for="exampleInputPassword1">Texto a mostrar</label>
    <input type="text"  name="title" class="form-control"  placeholder="Texto a mostrar">
  </div>
  <div class="form-group">
    <label for="exampleInputFile">Imagen</label>
    <input type="file" name="image" required>
  </div>

		<input type="submit" value="Subir imagen" class="btn btn-primary">
		</form>
	</div>
</div>
</div>
	</body>

</html>
