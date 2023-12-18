<?php
	//conexion con la base de datos y el servidor
	$link = mysql_connect("localhost","root","") or die("<h2>No se encuentra el servidor</h2>");
	$db = mysql_select_db("pagina",$link) or die("<h2>Error de Conexion</h2>");

	//obtenemos los valores del formulario
	$Nombre=$_POST['Nombre'];
	$ApePat=$_POST['ApeP'];
	$Numero=$_POST['Numero'];
	$Producto=$_POST['producto'];
	$Codigo=$_POST['codigo'];
	$Talla=$_POST['talla'];

	//Obtiene la longitus de un string
	$req = (strlen($Nombre)*strlen($ApePat)*strlen($Numero)*strlen($Producto)*strlen($Codigo)*strlen($Talla)) or die("No se han llenado todos los campos");

	//ingresamos la informacion a la base de datos
	mysql_query("INSERT INTO datos VALUES('','$Nombre','$ApePat','$Numero','$Producto','$Codigo','$Talla')",$link) or die("<h2>Error Guardando los datos</h2>");
	echo'
		<script>
			alert("Registro Exitoso");
			location.href="pedido.html";
		</script>
	'
?>
