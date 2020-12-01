<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de suma en PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form class="caja" action="calculadora.php" method="get" autocomplete="off">
    <h3>CALCULADORA DE SUMA PHP</h3>
    <input type="text" name="numero1" value="" placeholder="Ingrese un número">
    <input type="text" name="numero2" value="" placeholder="Ingrese otro número">
    <input type="submit" value="SUMAR">
    <input type="submit" name="limpiar" value="BORRAR">
    <output type="number">
    </form>
</body>
</html>

<?php
if(isset($_GET['numero1']) && isset($_GET['numero2']) && is_numeric($_GET['numero1']) && is_numeric($_GET['numero2']))
{
$numero1 = $_GET['numero1'];
$numero2 = $_GET['numero2'];
echo $numero1+$numero2;

}

?>