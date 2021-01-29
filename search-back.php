

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="styles.css?v=1.4">
</head>
<body>
<?php



$mysqli = new mysqli("localhost", "root", "", "BIBLIOTECA");
// if ($mysqli !== false) echo $mysqli->host_info."<br>";

$q_titulo = $_GET['q_titulo'];
$q_autor = $_GET['q_autor'];
$q_col = $_GET['q_coleccion'];
$q_ed = $_GET['q_editorial'];
$q_lan = $_GET['q_lengua'];
// $q_com = $_GET['comentario'];

$query_titulo = "SELECT autor, titulo, coleccion, editorial, comentario, año, precio FROM Titulos WHERE titulo LIKE '%$q_titulo%'";
$query_autor = "SELECT autor, titulo, coleccion, editorial, comentario, año, precio FROM Titulos WHERE autor LIKE '%$q_autor%'";
$query_col = "SELECT autor, titulo, coleccion, editorial, comentario, año, precio FROM Titulos WHERE coleccion LIKE '%$q_col%'";
$query_ed = "SELECT autor, titulo, coleccion, editorial, comentario, año, precio FROM Titulos WHERE editorial LIKE '%$q_ed%'";
$query_lan = "SELECT autor, titulo, coleccion, editorial, comentario, año, precio FROM Titulos WHERE lengua LIKE '$q_lan'";

// $table = <<<END
// 	<table>
// 	<tr>
// 		<th>Autor</th>
// 		<th>Titulo</th>
// 		<th>Colección</th>
// 		<th>Editorial</th>
// 		<th>Precio</th>
// 	</tr>
// 	END;

if ($q_titulo != "") {
	echo "<h2><strong>Resultado de la búsqueda: </strong></h2>";
	if ($result = $mysqli->query($query_titulo)){
		if ($result->num_rows > 0) {
			while($row = $result->fetch_array()){
				echo "<div class='titulo'>
								<h3><em>".$row['titulo']."</em></h3>
							</div>";
				echo "<div class='card'>
								<div class='icon'><img src='images/book.png'></div>
								<div class='datos'>
									<p><strong>Por: </strong>".$row['autor']."</p>
									<p><strong>Editorial:</strong> ". $row['editorial']."</p>							
									<p><strong>Año: </strong>".$row['año']."</p>
									<p><strong>Colección/serie: </strong>".$row['coleccion']."</p>

								</div>
								<div class='comment'>
									<p><strong>Comentario:</strong> ".$row['comentario']."</p>
									<p><strong>Precio: $".$row['precio']."</strong><p>
								</div>	
							</div>";		
				echo "<hr>";						
			}
			echo "</div>";
		} else echo "Lo siento, no encontré nada.";
	} else echo "ERROR: ".$mysqli->error;
} elseif ($q_autor != "") {
	echo "<p><strong>Resultado de la búsqueda: </strong></p><br>";
	if ($result = $mysqli->query($query_autor)){
		if ($result->num_rows > 0) {
			while($row = $result->fetch_array()){
				echo "<div class='titulo'>
								<h3><em>".$row['titulo']."</em></h3>
							</div>";
				echo "<div class='card'>
								<div class='icon'><img src='images/book.png'></div>
								<div class='datos'>
									<p><strong>Por: </strong>".$row['autor']."</p>
									<p><strong>Editorial:</strong> ". $row['editorial']."</p>							
									<p><strong>Año: </strong>".$row['año']."</p>
									<p><strong>Colección/serie: </strong>".$row['coleccion']."</p>

								</div>
								<div class='comment'>
									<p><strong>Comentario:</strong> ".$row['comentario']."</p>
									<p><strong>Precio: $".$row['precio']."</strong><p>
								</div>	
							</div>";		
				echo "<hr>";
			}
			echo "</div>";
		} else echo "Lo siento, no encontré nada.";
	} else echo "ERROR: ".$mysqli->error;
} elseif ($q_col != "") {
	echo "<p><strong>Resultado de la búsqueda: </strong></p><br>";
	if ($result = $mysqli->query($query_col)){
		if ($result->num_rows > 0) {
			while($row = $result->fetch_array()){
				echo "<div class='titulo'>
								<h3><em>".$row['titulo']."</em></h3>
							</div>";
				echo "<div class='card'>
								<div class='icon'><img src='images/book.png'></div>
								<div class='datos'>
									<p><strong>Por: </strong>".$row['autor']."</p>
									<p><strong>Editorial:</strong> ". $row['editorial']."</p>							
									<p><strong>Año: </strong>".$row['año']."</p>
									<p><strong>Colección/serie: </strong>".$row['coleccion']."</p>

								</div>
								<div class='comment'>
									<p><strong>Comentario:</strong> ".$row['comentario']."</p>
									<p><strong>Precio: $".$row['precio']."</strong><p>
								</div>	
							</div>";		
				echo "<hr>";
			}
			echo "</div>";
		} else echo "Lo siento, no encontré nada.";
	} else echo "ERROR: ".$mysqli->error;
} elseif ($q_ed != "") {
	echo "<p><strong>Resultado de la búsqueda: </strong></p><br>";
	if ($result = $mysqli->query($query_ed)){
		if ($result->num_rows > 0) {
			//echo $table;
			while($row = $result->fetch_array()){
				echo "<div class='titulo'>
								<h3><em>".$row['titulo']."</em></h3>
							</div>";
				echo "<div class='card'>
								<div class='icon'><img src='images/book.png'></div>
								<div class='datos'>
									<p><strong>Por: </strong>".$row['autor']."</p>
									<p><strong>Editorial:</strong> ". $row['editorial']."</p>							
									<p><strong>Año: </strong>".$row['año']."</p>
									<p><strong>Colección/serie: </strong>".$row['coleccion']."</p>

								</div>
								<div class='comment'>
									<p><strong>Comentario:</strong> ".$row['comentario']."</p>
									<p><strong>Precio: $".$row['precio']."</strong><p>
								</div>	
							</div>";		
				echo "<hr>";
			}
			echo "</div>";
		} else echo "Lo siento, no encontré nada.";
	} else echo "ERROR: ".$mysqli->error;
} elseif ($q_lan != "") {
	echo "<p><strong>Resultado de la búsqueda: </strong></p><br>";
	if ($result = $mysqli->query($query_lan)){
		if ($result->num_rows > 0) {
			//echo $table;
			while($row = $result->fetch_array()){
				echo "<div class='titulo'>
								<h3><em>".$row['titulo']."</em></h3>
							</div>";
				echo "<div class='card'>
								<div class='icon'><img src='images/book.png'></div>
								<div class='datos'>
									<p><strong>Por: </strong>".$row['autor']."</p>
									<p><strong>Editorial:</strong> ". $row['editorial']."</p>							
									<p><strong>Año: </strong>".$row['año']."</p>
									<p><strong>Colección/serie: </strong>".$row['coleccion']."</p>

								</div>
								<div class='comment'>
									<p><strong>Comentario:</strong> ".$row['comentario']."</p>
									<p><strong>Precio: $".$row['precio']."</strong><p>
								</div>	
							</div>";		
				echo "<hr>";
			}
			echo "</div>";
		} else echo "Lo siento, no encontré nada.";
	} else echo "ERROR: ".$mysqli->error;
} else echo "Por favor llena uno de los campos de búsqueda.";
$mysqli->close();


?>
