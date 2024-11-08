<html>
<head>
<title> Variables locales y globales </title>
</head>
<body>
<?php
$a=10; //variable global

function variables(){
$b=15; //variable local es la que esta dentro de la funcion
echo "Prueba de la impression de la variable dentro";
echo "La variable a es $a <br>";
echo "La variable b es $b <br>";
}

variables();
echo "Prueba de la impression de la variable fuera<br>"; 
echo "La variable a es $a <br>";
echo "La variable b es $b <br>";

?>
</body>
</html>