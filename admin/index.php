<?php
include "db.php";
$images = get_imgs();
?>
<html>
	<head>
		<title>Subir Multiples Imagenes - Evilnapsis</title>
		  <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">

	</head>
	<body>

<?php include("navbar.php");?>

		<div class="container">
			<div class="row">
				<div class="col-md-12">
		<h1>Imagenes</h1>
		<a href="./form.php" class="btn btn-default">Agregar Imagen</a> 
		<br><br>
		<?php if(count($images)>0):?>
				<table class="table table-bordered">
					<thead>
						<th>Imagen</th>
						<th>Texto a mostrar</th>
						<th>
					</thead>
			<?php foreach($images as $img):?>
				<tr>
				<td><img src="<?php echo $img->folder.$img->src; ?>" style="width:240px;">				</td>
				<td><?php echo $img->title; ?></td>
				<td>
				<a class="btn btn-success" href="./download.php?id=<?php echo $img->id; ?>">Descargar</a> 
				<a class="btn btn-danger" href="./delete.php?id=<?php echo $img->id; ?>">Eliminar</a>
			</td>
				</tr>
			<?php endforeach;?>
</table>
		<?php else:?>

			<h4 class="alert alert-warning">No hay imagenes!</h4>
		<?php endif; ?>
</div>
</div>
</div>
	</body>

</html>
