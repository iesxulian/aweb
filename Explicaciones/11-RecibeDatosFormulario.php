<<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>recibe los datos del formulario básico</title>
</head>
<body>
	
<?php
	$nome = $_GET["nome"] ?? "";
	$clave = $_GET["clave"] ?? "";
	$idade = $_GET["idade"] ?? "";
	$sexo = $_GET["sexo"] ?? "";
	$dep = $_GET["dep"] ?? array();
	$prov = $_GET["prov"] ?? "";
	$so = $_GET["so"] ?? array();

	echo "<p>Nome: $nome</p>";
	echo "<p>Clave: $clave</p>";
	echo "<p>Idade: $idade</p>";
	echo "<p>Sexo: $sexo</p>";
	echo "<p>Deportes:";
	foreach ($dep as $value) {
		echo "$value ";
	}
	echo "</p>";
	echo "<p>Provincia: $prov</p>";

	echo "<p>Sistemas Operativos:";
	foreach ($so as $value) {
		echo "$value ";
	}
	echo "</p>";

?>	

	<p>
		<a href="11-formularios1.html">Volver</a>
	</p>

</body>
</html>