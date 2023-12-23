<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="./css/css.css">
    <?php
    include("./includes/head.php")
    ?>
</head>
<body>
    <?php
    include("./includes/nav.php")
    ?>
    <div id="container">
        <div id="title" class="title flex-center">
            <h1>Compra con estilo</h1>
        </div>
        <div id="contenido" class="">
            <div id="filtros"class="">
                Tipo de dispositivo:
            </div>
            <div id="zonaTienda"class="flex-center">
                <?php
                //bucle para repetir tarjetas
                for ($i=0;$i<16;++$i) {
                    print("<div class='tarjeta'>tarjeta $i</div>");
                };
                ?>
                <div class="tarjeta">
                    <div class="imagen">imagen</div>
                    <div class="nombre">nombre</div>
                    <div class="precio">precio</div>
                    <div class="descripcion">descripcion</div>
                </div>
            </div>

        </div>




















    </div>
</body>
</html>