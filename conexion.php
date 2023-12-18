<?php
    $mysqlConect=new mysql('localhost','root','','pagina');
    if (!$mysqlConect) {
        echo "Error al conectar la base de datos";
    }
    $Nombre=$_POST['Nombre'];
    $ApePat=$_POST['ApeP'];
    $Numero=$_POST['Numero'];
    $Producto=$_POST['producto'];
    $Codigo=$_POST['codigo'];
    $Talla=$_POST['talla'];

    $insertar = "INSERT INTO datos(Nombre,ApePat,Numero,Producto,Codigo,Talla) VALUES ('$Nombre','$ApePat','$Numero','$Producto','$Codigo','$Talla')";
    if (mysql_query($mysqliConect,$insertar)){
        echo "";
    }else{
        echo "Error al guardar datos";
    }
?>
