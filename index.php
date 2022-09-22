<?php

    $dir = opendir("./img/slider");
    $dataCarpeta = [];

    while ($archivo = readdir($dir)) {
        if($archivo != '.' && $archivo != '..' && $archivo != ".DS_Store"  && $archivo != "__MACOSX" ) {
            array_push($dataCarpeta, $archivo);
        }
    }
    asort($dataCarpeta);

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" type="image/png" href="img/logo pixel agency.png" sizes="64x64">
    <link rel="stylesheet" href="css/styleHome.css">
    <link rel="stylesheet" href="css/styleFonts.css">
    <title>Pixel Agency</title>
</head>
<body>
    <header>
        <img src="img/logo final principal.png" alt="pixel Agency">
    </header>
    <section class="containerHome">
        <div class="webDesignSection ">
            <div class="contentWebDesignContent">
                <div class="containerGalleryImage">
                    <?php foreach ($dataCarpeta as $key => $value): 
                        $nameClient = substr($value, 0, -3);?>
                        <a href="<?php echo $nameClient?>php ">
                            <div class="container_slider_img">
                                <figure>
                                    <img src="img/slider/<?php echo $value ?>" alt="<?php  echo $nameClient?>">
                                </figure>
                            </div>
                        </a>
                    <?php endforeach ?>
                </div>
                <div class="linkAnTextwebDesign">
                    <figure class="logo_PixelWeb">
                        <img src="img/logo pixel agency.png" alt="Pixel Agency">
                    </figure>
                    <div class="contentDescPixelWeb">
                        <h2>Pixel Web</h2>
                        <p alt="Diseño web en Medellin, Marketing digital, SEO, Manejo de Redes Sociales, Posicionamiento Web">Diseño web en Medellin, Marketing digital, SEO, Manejo de Redes Sociales, Posicionamiento Web</p>
                        <a href="pixelagency.php" class="btn_pixel">conocer más</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="containerDroneVideo contentIndex">
            <div class="containerVIdeo">
                <iframe width="100%" height="100%"  src="https://www.youtube.com/embed/-kBNvzANHTg?controls=0&amp;start=40?autoplay=1" title="Pixel Agency" frameborder="0"  allowfullscreen></iframe>
            </div>
            <div class="contentDronevideo">
                <figure class="logo_PixelVisual">
                    <img src="img/logoDrone.png" alt="Drone">
                </figure>
                <div class="contentDescPixelVisual">
                    <h2>Pixel AudioVisual</h2>
                    <p alt="Videos con Drone, Contenido AudioVisual, Videos para propiedades,
Videos promocionales Medellín, Creación de contenido.">Videos con Drone, Contenido AudioVisual, Videos para propiedades,
Videos promocionales Medellín, Creación de contenido.</p>
                    <a href="/pixelagency.php" class="btn_pixel">conocer más</a>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <p> Todos los Derechos Reservados</p>
        <a href="https://www.facebook.com/pixelAgencyy" target="_blank"><span class="icon-facebook"></span></a>
        <a href="https://instagram.com/pixelagencyy" target="_blank"><span class="icon-instagram"></span></a>
    </footer>
</body>
</html>



