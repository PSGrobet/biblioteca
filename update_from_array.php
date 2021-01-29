<?php

// Actualiza múltiples filas de valores en DB 'BIBLIOTECA', tabla 'Titulos' a partir un array.

function value_string($arr, $qStr){
	$q = $qStr;
	$valStr = "";
	for($j=0; $j<=count($arr)-1; $j++) {
		$en = "";
		$en .= "(";
		for($i=0; $i<= count($arr[$j])-1; $i++){
			$sep =', ';
			$val = $arr[$j][$i];
			if ($i == count($arr[$j])-1) $sep = ""; 
			$en .= "'$val'$sep";
			//echo $en;
		}
		$en .= ")";
		if ($j != count($arr)-1) $en .= ", ";
		$q .= $en;
	};
	$q .= ";";
	return $q;
}

$host = "localhost";
$user = "root";
$pass = "";
$db = "BIBLIOTECA";
$table = "Titulos";

$mysqli = new mysqli("$host", "$user", "$pass", "$db");

if ($mysqli !== false) {
	echo "Succes: " . $mysqli->host_info."<br>\n";
}

//require_once "libros-29-01.php";

$query = "INSERT INTO $table (autor, titulo, coleccion, editorial, año, categoria, lengua, dueño, comentario)
		VALUES ";

$query = value_string($libros, $query);
//echo $query;

if($mysqli->query($query) !== false) {
	echo "Updated succesfully<br>";
} else {
	echo "Error: " . $mysqli->error."<br>";
}

?>
