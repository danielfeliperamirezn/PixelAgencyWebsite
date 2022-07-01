<?php 
    include("./permanentes/header.php");
    $anio = 1994;
    $fecha = date("Y");
    $final = $fecha - $anio;
    $llegada = 2011;
    $llegadafinal = $fecha - $llegada;

?>
    <main>
        <section class="containerQuienSoy maxWidth">
            <section class="containerHistory">
                <div class="leftHistory">
                    <h1>¿Quien Soy?</h1>
                </div>
                <div class="rightHistory"></div>
            </section>
            <section class="saludo ">
                <p>
                <span>🤙🏼</span>, De ante mano, gracias por querer leer quien soy, mi trayectoria
                    y porque trabajar conmigo.
                </p>
            </section>
            <section class="resumenQuienSoy">
                <h2>Daniel Ramirez</h2>
                <p>
                    Mi nombre es Daniel Ramirez, tengo <?php echo $final  ?> años de edad, vivo en la ciudad 
                    de medellín hace <?php echo $llegadafinal ?>  años, nacido en la ciudad de Bogotá, desde muy adolecente me interesé 
                    por la creación de sitios web, Autodidacta y un apasionado por el auto conocimiento, llevo 
                    realizando trabajos profesionalmente hace más de 10 años, y en este tiempo mis habilidades 
                    han crecido año tras año, me encantan los proyectos retadores, los proyectos ambisios donde 
                    los clientes o empresas saben la importancia de tener presencia Online.
                </p>
            </section>
            <section class="containerWrap">
                <div>
                    <h4>Ha valido la pena</h4>
                    <p>
                        Por estos 10 años que he trabajado como independiente, integrandome a muchos equipos, muchas
                        empresas que creen en mi trabajo y mucho aprendizaje me han echo madurar y crecer como 
                        profesional Gracias por la confianza y el tiempo.
                    </p>
                </div>
            </section>
            <section class="containerComent">
                <div class="comentsBio">
                    <div class="contentComent">
                        <div class="text_testm">
                            <p>
                                <span>"</span>Se hizo un rediseño completo del sitio web y una 
                                integración completa con las redes sociales para crear presencia
                                en internet y posicionar mejor la empresa. <span>"</span>
                            </p>
                        </div>
                        <div class="detail_client_testimonial">
                            <span>Suroeste Finca Raiz</span>
                        </div>
                    </div>  
                    <div class="contentComent">
                        <div class="text_testm">
                            <p>
                                <span>"</span> Un rediseño completo visualmente, y un funcionamiento
                                perfecto, era lo que estabamos buscando, oportuno a tiempo y profesional<span>"</span>
                            </p>
                        </div>
                        <div class="detail_client_testimonial">
                            <span>Jako Fashion</span>
                        </div>
                    </div>
                    <div class="contentComent">
                        <div class="text_testm">
                            <p>
                                <span>"</span>Hemos trabajado juntos por más de 3 años, y en este proceso se 
                                ha visto profesionalismo, eficiencia, puntualidad y responsabilidad, sin 
                                contar con el trabajo tan bueno que se hace.<span>"</span>
                            </p>
                        </div>
                        <div class="detail_client_testimonial">
                            <span>Drakon Industry</span>
                        </div>
                    </div>
                    <div class="contentComent">
                        <div class="text_testm">
                            <p>
                                <span>"</span>Contratamos y construimos una tienda virtual altamente eficiente
                                y muy práctica, intuitiva para los clientes, a demás muy rentable y vistosa, 
                                estoy muy feliz de trabajar con ellos, ya casi 3 años juntos. <span>"</span>
                            </p>
                        </div>
                        <div class="detail_client_testimonial">
                            <span>Pierde Peso Col</span>
                        </div>
                    </div>
                </div>
            </section>
        </section>
    </main>
<?php 
    include("./permanentes/footer.php");
?>