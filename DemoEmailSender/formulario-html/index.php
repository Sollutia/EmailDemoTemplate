<!DOCTYPE html>
<html lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="color-scheme" content="light dark">
    <meta name="supported-color-schemes" content="light dark">

    <link rel="stylesheet" href="style.css">
    <title>Formulario de prueba</title>
</head>
<body>
    <header>
        Seleccionador de inicial pokemon
    </header>
    <main>
        <div id="title-decoration"><h1 id="title">Elige tu Inicial y te lo mandaremos a tu PC!</h1></div>
        <div class="formulario">
            <form action="../ejemploConDatos.php" method="POST">
                <p><label for="name"></label><input type="text" name="name" value="" placeholder="Tu Nombre"></label></p>
                <p><label for="last-name"><input type="text" name="last-name" value="" placeholder="Tus Apellidos"></label></p>
                <p><label for="email"><input type="email" name="email" placeholder="Tu correo"></label></p>
                <p><label for="inicial"> Selecciona a tu inicial
                    <select name="inicial">
                        <option value="????" selected>--Selecciona Un inicial--</option>
                        <option value="Bulbasur">Bulbasaur</option>
                        <option value="Charmander">Charmander</option>
                        <option value="Squirtle">Squirtle</option>
                        <option value="Chikorita">Chikorita</option>
                        <option value="Cyndaquil">Cyndaquil</option>
                        <option value="Totodile">Totodile</option>
                        <option value="Treecko">Treecko</option>
                        <option value="Torchic">Torchic</option>
                        <option value="Mudkip">Mudkip</option>
                    </select>
                </label></p>
                <input type="submit" name="submit" value="Enviar">
            </form>
        </div>
    </main>
    
</body>
</html>