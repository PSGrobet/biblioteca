<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
</head>
<body>
<?php
	$db_host = 'localhost';
	$db_user = 'root';
	$db_pass = '';
	$db = "BIBLIOTECA";
	$db_table = "Titulos";
	mysqli_report(MYSQLI_REPORT_ERROR);
	$mysqli = new mysqli($db_host, $db_user, $db_pass, $db);
	if ($mysqli !== FALSE) {
		printf("Conectado: ".$mysqli->host_info."<br><br>");
	}
	
	$get_titulo = $_GET["titulo"];
	$get_autor = $_GET["autor"];
	$get_edit = $_GET["editorial"];
	$get_cate = $_GET["categoria"];
	$get_owner = $_GET["owner"];
	$get_lang = $_GET["lengua"];
	$get_col = $_GET["coleccion"];
	$get_year = $_GET["year"];
	$get_com = $_GET["comentario"];
				
	$query = "INSERT INTO Titulos (titulo, autor, editorial, categoria, dueño, lengua, coleccion, año, comentario) VALUES ('$get_titulo', '$get_autor', '$get_edit', '$get_cate', '$get_owner', '$get_lang', '$get_col', '$get_year', '$get_com');";
	if ($mysqli->query($query)) {
		echo "Succes, database updated.<br>";
		echo "<strong>Autor:</strong> ".$get_autor."<br>";
		echo "<strong>Título:</strong> ".$get_titulo."<br>";
		echo "<strong>Colección:</strong> ".$get_col."<br>";
		echo "<strong>Editorial:</strong> ".$get_edit."<br>";
		echo "<strong>Año:</strong> ".$get_year."<br>";
		echo "<strong>Categoría:</strong> ".$get_cate."<br>";
		echo "<strong>Lengua:</strong> ".$get_lang."<br>";
		echo "<strong>Dueño:</strong> ".$get_owner."<br>";
		echo "<strong>Comentario:</strong> ".$get_com."<br>";
	}
	
	echo "<button onclick='back()'>Regresar</button>";	

?>
	<script type="text/javascript">
		function back() {
			window.history.back()
		}
	</script>



