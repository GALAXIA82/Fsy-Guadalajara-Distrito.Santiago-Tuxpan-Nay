<?php

$con=mysqli_connect('localhost','root','','formulario') or die('Error con el servidor');
$sql="INSERT INTO registro VALUES(null, '".$_POST["nombre"]."', '".$_POST["apellido"]."', '".$_POST["email"]."', '".$_POST["pass"]."', '".$_POST["sexo"]."')";
$resultado=mysqli_query($con,$sql) or die ('Error en el query database');
mysqli_close($con);

echo 'El nombre ingresado es: '.$_POST["nombre"].' '.$_POST["apellido"].'<br>';
echo 'El correo ingresado es: '.$_POST["email"].'<br>';
echo 'El sexo ingresado es: '.$_POST["sexo"];

?>