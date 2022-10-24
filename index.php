<?php

    $dir = opendir("assets/img/slider");
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

    <link rel="icon" type="image/png" href="./assets/img/logo pixel agency.png" sizes="64x64">
    <link rel="stylesheet" href="assets/css/styleHome.css">
    <link rel="stylesheet" media="(max-width:800px)" href="assets/css/responsiveHome.css">
    <link rel="stylesheet" href="assets/css/styleFonts.css">
    <title>Pixel Agency</title>
</head>
<body>
    <header>
        <figure>
            <img src="assets/img/logoPixelAgency.webp" alt="pixel Agency">
        </figure>
    </header>
    <section class="containerHome">
        <div class="webDesignSection ">
            <div class="contentWebDesignContent">
                <div class="containerGalleryImage">
                    <?php foreach ($dataCarpeta as $key => $value): 
                        $nameClient = substr($value, 0, -9);?>
                        <a href="">
                            <div class="container_slider_img">
                                <figure>
                                    <img src="assets/img/slider/<?php echo $value ?>" alt="<?php  echo $nameClient?>">
                                </figure>
                            </div>
                        </a>
                    <?php endforeach ?>
                </div>
                <div class="linkAnTextwebDesign">
                    <figure class="logo_PixelWeb">
                        <img src="assets/img/logoPixelAgency.webp" alt="Pixel Agency">
                    </figure>
                    <div class="contentDescPixelWeb">
                        <h2>Pixel Web</h2>
                        <p alt="Diseño web en Medellin, Marketing digital, SEO, Manejo de Redes Sociales, Posicionamiento Web">Diseño web en Medellin, Marketing digital, SEO, Manejo de Redes Sociales, Posicionamiento Web</p>
                        <a href="web" class="btn_pixel">conocer más</a>
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
                    <img src="assets/img/logoDrone.webp" alt="Drone">
                </figure>
                <div class="contentDescPixelVisual">
                    <h2>Pixel AudioVisual</h2>
                    <p alt="Videos con Drone, Contenido AudioVisual, Videos para propiedades,
Videos promocionales Medellín, Creación de contenido.">Videos con Drone, Contenido AudioVisual, Videos para propiedades,
Videos promocionales Medellín, Creación de contenido.</p>
                    <a href="audiovisual" class="btn_pixel">conocer más</a>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <p> Todos los Derechos Reservados</p>
        <a href="https://www.facebook.com/pixelAgencyy" target="_blank"><span class="icon-facebook"></span></a>
        <a href="https://instagram.com/pixelagencyy" target="_blank"><span class="icon-instagram"></span></a>
    </footer>
    <script src="js/jsIndex.js"></script>
</body>
</html>



