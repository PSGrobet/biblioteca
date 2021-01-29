<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
</head>
	<link rel="stylesheet" href="styles.css">

<body>
<h2>Agrega nueva entrada a LIBROS - Titulos</h2>
<form action="nuevo-titulo.php" method="get">
	<div class="fields">
		<div>
			<div class="campo">
				<label for="autor">Autor</label>
				<input type="text" name="autor" id="autor">
			</div>
			<div class="campo">
				<label for="titulo">Título</label>
				<input type="text" name="titulo" id="titulo">
			</div>
			<div class="campo">
				<label for="coleccion">Colección</label>
				<input type="text" name="coleccion" id="coleccion">
			</div>
			<div class="campo">
				<label for="editorial">Editorial</label>
				<input type="text" name="editorial" id="editorial">
			</div>
		</div>
		<div>
			<div class="campo">
				<label for="year">Año</label>
				<input type="text" name="year" id="year">
			</div>
			<div class="campo">
				<label for="categoria">Categoría</label>
				<select name="categoria" id="categoria">
					<option value="ficcion">Ficción</option>
					<option value="no-ficcion">No-ficción</option>
					<option value="arte">Arte</option>
					<option value="consulta">Consulta</option>
					<option value="cocina">Cocina</option>
				</select>
			</div>
			<div class="campo">
				<label for="owner">Dueño</label>
				<select name="owner" id="owner">
					<option value="Juan">Juan</option>
					<option value="Pablo">Pablo</option>
				</select>
			</div>
			<div class="campo">
				<label for="lengua">Lengua</label>
				<select name="lengua" id="lengua">
					<option value="inglés">Inglés</option>
					<option value="español">Español</option>
					<option value="francés">Francés</option>
					<option value="sueco">Sueco</option>
				</select>
			</div>
			<div class="campo">
				<label for="comentario">Comentario adicional</label>
				<textarea id="comentario" name="comentario"></textarea>
			</div>
		</div>
	</div>
	<input type="submit" value="Enviar">
</form>


</body>
