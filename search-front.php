<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="styles.css?v=1.4">
</head>
<body>
<h1>Busca un libro</h1>
<span class="adv"> -- Llena sólo un campo para obtener mejores resultados -- </span>
<form action="search-back.php" method="get">
	<div class="fields">
		<div class="campo">
			<label for="titulo">Busca por título</label>
			<input type="text" name="q_titulo" id="titulo" class="input" onchange="borrar()">
		</div>
		<div class="campo">
			<label for="autor">Busca por autor</label>
			<input type="text" name="q_autor" id="autor" class="input">
		</div>
		<div class="campo">
			<label for="coleccion">Busca por colección</label>
			<input type="text" name="q_coleccion" id="coleccion" class="input">
		</div>
		<div class="campo">
			<label for="editorial">Busca por editorial</label>
			<input type="text" name="q_editorial" id="editorial" class="input">
		</div>
		<div class="campo">
			<label for="lengua">Busca por lengua</label>
			<select name="q_lengua" id="lengua" class="input">
				<option value="">--selecciona una--</option>
				<option value="español">Español</option>
				<option value="inglés">Inglés</option>
				<option value="francés">Francés</option>
				<option value="sueco">Sueco</option>
			</select>
		</div>
	</div>
	<
	<input type="submit" value="Buscar">
</form>


<script>
</script>



<body>
