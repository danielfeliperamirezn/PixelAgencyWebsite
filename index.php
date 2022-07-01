<?php 
    include("./permanentes/header.php");

    $dir = opendir("./img/slider");
    $dataCarpeta = [];

    while ($archivo = readdir($dir)) {
        if($archivo != '.' && $archivo != '..' && $archivo != ".DS_Store"  && $archivo != "__MACOSX" ) {
            array_push($dataCarpeta, $archivo);
        }
    }
    asort($dataCarpeta);
?>
    <main>
        <section class="header maxWidth">
            <div class="contentHeder">
                <div class="ContSlider">
                    <div class="container_slider">
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
                </div>
                <div class="containerText">
                    <p>Diseño y desarrollo Digital</p>
                </div>
            </div>
        </section>
        <section class="freeLance maxWidth">
            <p>
                No pienses en mi como un <b>Freelancer</b> más, me integro de manera organica a tu equipo, empresa o proyecto,
                <b>Juntos</b> podemos hacer grandes cosas.
            </p>
        </section>
        <section class="bannerInvitation">
            <div class="contentInvitation maxWidth">
                <div class="containerBannerInvitation">
                    <h3>Hey, 🤙🏼 comencemos hoy</h3>
                    <p>
                        Sentémonos y tengamos una charla, o tomémonos un café virtual y hablemos de tus necesidades
                    </p>
                </div>
            </div>
        </section>
        <section class="containerServices maxWidth">
            <div class="containerExplicationServices">
                <span>Mis habilidades</span>
                <h2>Inovación y Resultados</h2>
                <p>
                    Desarrollo productos digitales hace más de<strong> 8 años </strong>
                    y se que te puedo ayudar a potencializar tu presencia digital.
                </p>
                <a href="servicios.php"> Ver más</a>
            </div>
            <div class="servicesIcons">
                <ul>
                    <li>
                        <div class="contentService">
                            <figure>
                                <img src="img/Web Design Icon.png" alt="Diseño Web">
                            </figure>
                            <h3>Diseño </br> Web</h3>
                            <p>
                                Páginas Web, Tiendas virtuales, Blogs, LandingPage, template.
                            </p>
                        </div>
                    </li>
                    <li>
                        <div class="contentService">
                            <figure>
                                <img src="img/Marketing Icon.png" alt="Marketing Digital">
                            </figure>
                            <div class="containerServices">
                            <h3>Marketing Digital</h3>
                            <p>
                                Creamos estrategias para que tu marca tenga un impacto en internet.  
                            </p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="contentService">
                            <figure>
                                <img src="img/Branding Icon.png" alt="Branding PNG">
                            </figure>
                            <h3>Branding / Marca</h3>
                            <p>
                                Diseñamos y estructuramos la identidad de tu marca sostenible en el tiempo.
                            </p>
                        </div>
                    </li>
                    <li>
                        <div class="contentService">
                            <figure>
                                <img src="img/Contenido Icon.png" alt="Contenido">
                            </figure>
                            <h3>Creación de Contenido</h3>
                            <p>
                                No es lo que dices, es cómo lo dices, contenido que genere valor y resultados.
                            </p>
                        </div>
                    </li>
                    <li>
                        <div class="contentService">
                            <figure>
                                <img src="img/Cloud Icon.png" alt="Cloud Service">
                            </figure>
                            <h3>Cloud Service</h3>
                            <p>
                                Alquilamos servicios de alojamiento y Hosting para tu sitio web o Aplicación.
                            </p>
                        </div>
                    </li>
                    <li>
                        <div class="contentService">
                            <figure>
                                <img src="img/AppFotografia.png"" alt="Fotografia">
                            </figure>
                            <h3>Fotografia </br> Producto</h3>
                            <p>
                                Las imagenes venden, te ayudamos a mostrar tus productos de manera profesional.
                            </p>
                        </div>
                    </li>
                    <li>
                        <div class="contentService">
                            <figure>
                                <img src="img/App Icon.png" alt="Software">
                            </figure>
                            <h3>Software a </br>la Medida</h3>
                            <p>
                                ¿Necesitas una App nativa o web? Te ayudamos a programarla
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <section class="contianer_promos_and_pack">
            <div class="Container_promos">
                <h2 class="titleh2">Planes y Paquetes <span>Básico</span></h2>
                <div class="promos">
                    <div class="promo1">
                        <div class="header_promo1">
                            <h2>Página Web Sencilla</h2>
                        </div>
                        <div class="body_promo">
                            <ul>
                                <li><span>✔</span>Diseño Estandar</li>
                                <li><span>✔</span>Máximo 3 secciones</li>
                                <li><span>✔</span>Conexión Redes Sociales</li>
                                <li><span>✔</span>Optimización y SEO</li>
                                <li><span>✔</span>Gestión y Administración</li>
                                <li><span>✔</span>Integración diseño de Redes</li>
                            </ul>
                        </div>
                        <div class="footer_promo">
                            <a href="hosting">Necesito algo más pro</a>
                            <p>Desde</p>
                        </div>
                    </div>
                    <div class="price_promo">
                        <p>$699.900</p>
                    </div>
                </div>
                <div class="promos">
                    <div class="promo1">
                        <div class="header_promo1">
                            <h2>E-Comerce Básico</h2>
                        </div>
                        <div class="body_promo">
                            <ul>
                                <li><span>✔</span>Diseño Estandar</li>
                                <li><span>✔</span>Montaje máximo 25 productos</li>
                                <li><span>✔</span>Conexión Redes Sociales</li>
                                <li><span>✔</span>Pasarela de pago</li>
                                <li><span>✔</span>Optimización y SEO</li>
                                <li><span>✔</span>Gestión y administración de la tienda</li>
                                <li><span>✔</span>Certificado SSl por 3 meses</li>
                            </ul>
                        </div>
                        <div class="footer_promo">
                            <a href="hosting">Necesito algo más pro</a>
                            <p>Desde</p>
                        </div>
                    </div>
                    <div class="price_promo">
                        <p>$999.900</p>
                    </div>
                </div>
                <div class="promos">
                    <div class="promo1">
                        <div class="header_promo1">
                            <h2>Hosting y Dominio</h2>
                        </div>
                        <div class="body_promo">
                            <ul>
                                <li><span>✔</span>Dominio .com, .net, .co</li>
                                <li><span>✔</span>6 GB de espacio</li>
                                <li><span>✔</span>3 Correos Corporativos</li>
                                <li><span>✔</span>Constructor de Sitio</li>
                                <li><span>✔</span>Certificación SSL</li>
                                <li><span>✔</span>Ultra Seguridad</li>
                                <li><span>✔</span>Alta velocidad</li>
                                <li><span>✔</span>Soporte y aseosria 24/7</li>
                                <li><span>✔</span>2 base de datos</li>
                                <li><span>✔</span>Cpanel Administrable</li>
                            </ul>
                        </div>
                        <div class="footer_promo">
                            <a href="hosting">Necesito algo más pro</a>
                            <p>Desde</p>
                        </div>
                    </div>
                    <div class="price_promo">
                        <p>$200.000/Año</p>
                    </div>
                </div>
            </div>
            <a class="Btn_host" href="hosting.php">Planes de Hosting y Dominio</a>
        </section>
        <section>
            <div class="contentClients">
                <div class="content_Clients_Logs">
                    <h2>Algunos de nuestros clientes</h2>
                    <p>
                        Algunos clientes que han crecido junto a <stron>Pixel Agency</stron> viendo resultados 
                        con una planeación a corto mediano y largo plazo
                    </p>
                    <ul>
                        <li>
                            <figure><img src="img/Marcas/suroeste.png" alt="Suroeste"></figure>
                        </li>
                        <li>
                            <figure><img src="img/Marcas/ramirartes.png" alt=""></figure>
                        </li>
                        <li>
                            <figure><img src="img/Marcas/santorini.png" alt=""></figure>
                        </li>
                        <li>
                            <figure><img src="img/Marcas/jakofashion.png" alt=""></figure>
                        </li>
                        <li>
                            <figure><img src="img/Marcas/SecretoBelleza.png" alt=""></figure>
                        </li>
                        <li>
                            <figure><img src="img/Marcas/Drakon.png" alt=""></figure>
                        </li>
                      
                    </ul> 
                </div>
                <div class="conteinerImageOffice">
                    <figure>
                        <img src="img/oficina.jpg" alt="Oficina Pixel Agency">
                    </figure>
                </div>
            </div>
            <div class="container_coments">
                <div class="container_testimonios_clientes">
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
                <div class="container_testimonios_clientes">
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
                <div class="container_testimonios_clientes">
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
                <div class="container_testimonios_clientes">
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
        <section class="slideClients">
            <div class="containerSlider">
                <?php foreach ($dataCarpeta as $key => $value): 
                    $nameCompress = substr($value, 0, -3) ?>
                        <div class='containerImage'>
                            <div class='contentImage'> 
                                <a href=" <?php echo $nameCompress ?>php">
                                    <img src="./img/slider/<?php echo $value ?>" alt="">
                                </a>
                            </div>
                        </div>
                <?php endforeach ?>
            </div>
        </section>
        <section class="containerAboutIndex maxWidth">
            <div class="containerboxAbout">
                <div class="lefContainerAbout">
                    <span class="lineSpan">Sobre mi</span>
                    <h2>¿Quien está detrás de todo esto? <span>Daniel Ramirez</span> </h2>
                    <p>
                        Soy un emprendedor, vivo en la ciudad Medellín, con muchas
                        ambiciones y una amplia experiencia en trabajos digitales, apasionado
                        por la téconologia y todo lo que compete esta maravillosa industria.
                    </p>
                    <a href="quiensoy.php" id="sobreMi">Conoce más sobre mi</a>
                </div>
                <div class="rightContainerAbout">
                </div>
            </div>
        </section>
    </main>
    <section class="sobremi">
        <span id="close_me" class="close_me">X</span>
        <div class="container_Profile">
            <div class="imageDanielRam"></div>
            <p>
                Mi nombre completo es Daniel Felipe Ramirez Narvaez, tengo 26 años de edad, vivo en la 
                ciudad de medellín hace 9 años, nacido en la ciudad de Bogotá, desde hace más de 10 años 
                me interesé por la creación de sitios web, Autodidacta y un apasionado por el auto conocimiento,
                llevo realizando trabajos profesionalmente hace más de 8 años, y en este tiempo mis habilidades
                han crecido año tras año, me encantan los proyectos retadores, los proyectos ambisios donde los 
                clientes o empresas saben la importancia de tener presencia Online.
            </p>
        </div>
        <div class="skills">
            <h3>Mis Hábilidades</h3>
            <ul class="mySkills">
                <li>Diseño y desarrollo Web<span>★★★★★</span></li>
                <li>E-Comerce<span>★★★★★</span></li>
                <li>Diseño de marca<span>★★★★★</span></li>
                <li>Manejo de redes<span>★★★★★</span></li>
                <li>Banco de imagenes para redes<span>★★★★★</span></li>
                <li>Campañas Publicitarias<span>★★★★⭒</span></li>
                <li>Photografia<span>★★★★</span></li>
            </ul>
        </div>
    </section>
    <script src="./js/pixelVanilla.js"></script>
<?php 
    include("./permanentes/footer.php");
?>

