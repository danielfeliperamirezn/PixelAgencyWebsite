<?php 
    include("../permanentes/header.php");

    $dir = opendir("../assets/img/slider");
    $dataCarpeta = [];

    while ($archivo = readdir($dir)) {
        if($archivo != '.' && $archivo != '..' && $archivo != ".DS_Store"  && $archivo != "__MACOSX" ) {
            array_push($dataCarpeta, $archivo);
        }
    }
    asort($dataCarpeta);
?>
    <section class="section_works_pixel">
        <h2>ÚLTIMOS PROYECTOS</h2>
        <div class="content_works">
            <?php foreach ($dataCarpeta as $key => $value) : 
            $nameCompress = substr($value, 0, -4);?>
                <div class="containerProducts">
                    <a href="../<?php echo $nameCompress ?>" tarjet="_blank">
                        <figure>
                            <img src="../assets/img/slider/<?php  echo $value ?>" alt="<?php  echo $nameCompress ?>">
                        </figure>
                    </a>
                </div>
            <?php  endforeach ?> 
            <div class="message_market">
                <h3>Hola</h3>
                <p>
                    Trabajamos cada proyecto como si fuera nuestra propia empresa  o 
                    negocio, es por eso que nos empoderamos y creamos productos geniales
                    para que nuestros clientes tengan la mejor proyección Online.
                </p>
            </div>
        </div>
    </div>
    <div class="conteiner_ref">
        <span></span>
        <p>
            "Recordar que vas a morir es la mejor manera que conozco para evitar la trampa
            de pensar que tienes algo que perder. Ya estás desnudo. No hay ninguna razón 
            para no seguir a tu corazón." Steve Jobs
        </p>
    </div>
    </section>
<?php 
    include("../permanentes/footer.php");
?>