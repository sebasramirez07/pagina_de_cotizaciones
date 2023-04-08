<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PC SHOP COLOMBIA</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Climate+Crisis&family=Lobster&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Climate+Crisis&family=Lobster&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <img src="img/asus-republic-of-gamers-gaming-laptop-gamer-hd-wallpaper-preview.jpg" alt="imagen">
    <header>
        <h1>PC SHOP COLOMBIA</h1>
        <h2>BIENVENIDOS</h2>
    </header>
    <main>
        <div class="main">
            <form action='proceso.php' method="POST">
                <?php
                $cantidadproductos = 10;
                ?>

                <?php
                for ($i = 0; $i < 10; $i++) { ?>
                    <p>Producto <?php echo $i + 1 ?></p>
                    <label for="">Elemento:</label>
                    <select name="nombre[]" required>
                        <option selected value="chasis">Chasis</option>
                        <option value="discoduro">Disco Duro</option>
                        <option value="discoduro">Disco solido</option>
                        <option value="discosolido">Board</option>
                        <option value="ram4">Memoria Ram 4gb</option>
                        <option value="ram8">Memoria Ram 8gb</option>
                        <option value="ram16">Memoria Ram 16gb</option>
                        <option value="fuente">Fuente de Poder</option>
                        <option value="teclado">Teclado</option>
                        <option value="mouse">Mouse</option>
                        <option value="Pantalla">Pantalla</option>
                        <option value="Audifonos">Audifonos</option>
                    </select>
                    <label for="">Marca:</label>
                    <select name="marca[]" required>
                        <option selected value="Corsair">Corsair</option>
                        <option value="HP">Hp</option>
                        <option value="Samsung">Samsung</option>
                        <option value="Asus">Asus</option>
                        <option value="Iceberg">Iceberg</option>
                        <option value="AeroCool">AeroCool</option>
                        <option value="CoolerMaster">CoolerMaster</option>
                        <option value="CompuMax">CompuMax</option>
                        <option value="GigaByte">GigaByte</option>
                        <option value="Lenovo">Lenovo</option>
                    </select>
                    <label for="">Precio:</label>
                    <input type="number" name="precio[]" required>
                    <br>
                <?php } ?>
                <br>

                <input class="boton1" type="submit">
                <input class="boton2" type="reset">
            </form>
        </div>

    </main>
</body>

</html>