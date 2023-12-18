<?php

$link = mysql_connect("localhost","root","") or die ("<h2>No se encuentra el servidor</h2>");;
$db = mysql_select_db ("pagina",$link) or die ("<h2>Error de conexion</h2>");

$Nombre=$_POST['Nombre'];
$ApePat=$_POST['ApeP'];
$Numero=$_POST['Numero'];
$Producto=$_POST['producto'];
$Codigo=$_POST['codigo'];
$Talla=$_POST['talla'];

$req = (strlen($Nombre)*strlen($ApePat)*strlen($Numero)*strlen($Producto)*strlen($Codigo)*strlen($Talla)) or die("No se han llenado los campos <br><br><a href='pedido.html'>")

mysql_query("INSERT INTO datos VALUES ('','$Nombre','$ApePat','$Numero','$Producto','$Codigo','$Talla')",$link) or die ("<h2>Error de envio</h2>");

echo '
    <h2>Registro Completo</h2>
    <h5>Gracias por su pedido, nos pondremos en contacto con usted</h5>
    ';

    ?>

