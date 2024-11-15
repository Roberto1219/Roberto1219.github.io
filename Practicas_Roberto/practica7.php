<html>
<head>
<title> Conexion a un sistema gestor </title>
</head>
<body>
<?php
require ("config.php");
echo "<h1>Practica: Creacion de base de datos </h1><br><br>";
$conexion=mysqli_connect($servidor, $usuario, $password, $bd);
$basededatos="progacionweb";

$consulta="create database $basededatos";
if ($resultado=mysqli_query($conexion, $consulta))
{
echo "La base de datos $basededatos, se creo con exito<br>";
echo "El script utilizado fue: $consulta <br><br>";
}
else
{
echo "La base de datos $basededatos no se ha podido crear<br> ".mysqli_connect_error();
}
echo "<br><br>";
mysqli_close($conexion);

?>
</body>
</html>