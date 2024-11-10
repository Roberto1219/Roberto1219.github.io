<!DOCTYPE html>
<html lang="es">
<head>
    <title>Ejemplos de Operadores en PHP</title>
</head>
<body>
    <h1>Operadores en PHP</h1>

    <?php
    $a = 10;
    $b = 5;
    $c = "Hola";
    $d = " Mundo";

    echo "<h2>Operadores Aritméticos</h2>";
    echo "<p>Suma (a + b): " . ($a + $b) . "</p>";
    echo "<p>Resta (a - b): " . ($a - $b) . "</p>";
    echo "<p>Multiplicación (a * b): " . ($a * $b) . "</p>";
    echo "<p>División (a/b):" . ($a / $b) . "</p>";
    echo "<p>Módulo (a % b): " . ($a % $b) . "</p>";
    echo "<p>Incremento (++a): " . (++$a) . " (pre-incremento)</p>";
    echo "<p>Decremento (--a): " . (--$a) . " (pre-decremento)</p>";

    echo "<h2>Operadores de Comparación</h2>";
    echo "<p>Igual (a == b): " . var_export($a == $b, true) . "</p>";
    echo "<p>Idéntico (a === b): " . var_export($a === $b, true) . "</p>";
    echo "<p>Distinto (a != b): " . var_export($a != $b, true) . "</p>";
    echo "<p>Mayor que (a > b): " . var_export($a > $b, true) . "</p>";
    echo "<p>Menor que (a < b): " . var_export($a < $b, true) . "</p>";
    echo "<p>Mayor o igual (a >= b): " . var_export($a >= $b, true) . "</p>";
    echo "<p>Menor o igual (a <= b): " . var_export($a <= $b, true) . "</p>";

    echo "<h2>Operadores de Asignación</h2>";
    $a = 10; // Reset de $a
    echo "<p>Asignación (a = b): " . ($a = $b) . "</p>";
    $a = 10;
    echo "<p>Suma y asigna (a += b): " . ($a += $b) . "</p>";
    $a = 10;
    echo "<p>Resta y asigna (a -= b): " . ($a -= $b) . "</p>";
    $a = 10;
    echo "<p>Multiplicación y asigna (a *= b): " . ($a *= $b) . "</p>";
    $a = 10;
    echo "<p>División y asigna (a /= b): " . ($a /= $b) . "</p>";
    $a = 10;
    echo "<p>Módulo y asigna (a %= b): " . ($a %= $b) . "</p>";

    echo "<h2>Operadores Lógicos</h2>";
    echo "<p>AND (a > 5 && b < 10): " . var_export($a > 5 && $b < 10, true) . "</p>";
    echo "<p>OR (a > 5 || b < 10): " . var_export($a > 5 || $b < 10, true) . "</p>";
    echo "<p>NOT (!a > b): " . var_export(!($a > $b), true) . "</p>";

    echo "<h2>Operadores de Cadena</h2>";
    echo "<p>Concatenación (c . d): " . ($c . $d) . "</p>";
    $c .= $d;
    echo "<p>Concatenación y asignación (c .= d): " . $c . "</p>";
    ?>

</body>
</html>
