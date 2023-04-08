<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body id="cuerpo">
    <img class="pc" src="img/torre.png" alt="pc">
    <h1>Cotizacion</h1>
<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombres = $_POST["nombre"];
    $marcas = $_POST["marca"];
    $precios = $_POST["precio"];

    $subtotal = 0;

    for ($i = 0; $i < count($nombres); $i++) {
        //los nombres de las variables tienen que ser distintos 
        $nombre = $nombres[$i];
        $marca = $marcas[$i];
        $precio = floatval($precios[$i]);
        $subtotal += $precio;
        printf("%s ($%s) marca %s <br>", $nombre, number_format($precio, 2), $marca);
    }

    $porcentajeIva = 0.19;
    $iva = $subtotal * $porcentajeIva;
    $total = $subtotal + $iva;

    echo "<br><strong >subtotal:</strong>" . number_format($subtotal, 2) . "<br>";
    echo "<strong>iva:</strong>" . number_format($iva, 2) . "<br>";
    echo "<strong>total:</strong>" . number_format($total, 2) . "<br>";
    echo "<br><a href='index.php'> volver al formulario</a>";
    exit;
}
?>
</body>
</html>
