<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Actualizar Inventario</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<style>
		body {
			background: #E6E3E3;
			margin-top: 50px;
			font-family: sans-serif;
		}
		p {

			font-size: 16px;
		}
	</style>
</head>
<body>
	<div class="container">
		<center><h2>Actualizar Inventario</h2>
		<p>Elija un archivo de inventario generado por World Office</p></center><br>
		<div class="row">
			<div class="col-sm-4 col-sm-offset-4">
				<form enctype="multipart/form-data" action="p_archivo.php" method="POST">
					<!--<input type="hidden" name="MAX_FILE_SIZE" value="30000" />-->
					<label for="archivo">Buscar Archivo:</label><br><br><input class="form-control" type="file" name="archivo" required><br><br>
					<button class="btn btn-success">Subir Archivo</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>