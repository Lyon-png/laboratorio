<?php
	//conexion con la base de datos y el servidor
	$link = mysql_connect("sql307.epizy.com","epiz_28287075","vlfwoCwDje4p") or die("<h2>No se encuentra el servidor</h2>");
	$db = mysql_select_db("epiz_28287075_formulario",$link) or die("<h2>Error de Conexion</h2>");

	//obtenemos los valores del formulario
	$nombres = $_POST['nombreuser'];
	$apellidos = $_POST['apellidosuser'];
	$email = $_POST['emailuser'];
	$age = $_POST['age'];
	$direction = $_POST['direction'];
	$electrolitos = $_POST['electrolitos'];
	$glucosa = $_POST['glucosa'];
	$azucar = $_POST['azucar'];
	$proteina = $_POST['proteina'];
	$destino = $_POST['emailuser'];
	$contenido = "Azucar: " . $azucar . "\nElectrolitos: " . $electrolitos . "\nProteinas: " . $proteina . "\nGlucosa: " . $glucosa;
	mail($destino,"Resultados medicos", $contenido);
	//Obtiene la longitus de un string
	$req = (strlen($nombres)*strlen($apellidos)*strlen($email)*strlen($age)*strlen($direction)*strlen($electrolitos)*strlen($glucosa)*strlen($azucar)*strlen($proteina)) or die("No se han llenado todos los campos");

	//ingresamos la informacion a la base de datos
	mysql_query("INSERT INTO datos VALUES('','$nombres','$apellidos','$email','$age','$electrolitos','$glucosa','$azucar','$proteina')",$link) or die("<h2>Error Guardando los datos</h2>");
	echo'
		<script>
			alert("Registro Exitoso");
			location.href="index.html";
		</script>
	'



?>