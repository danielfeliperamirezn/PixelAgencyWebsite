<?php 
    include("../permanentes/header.php");

    $dir = opendir("assets/img/slider");
    $dataCarpeta = [];

    while ($archivo = readdir($dir)) {
        if($archivo != '.' && $archivo != '..' && $archivo != ".DS_Store"  && $archivo != "__MACOSX" ) {
            array_push($dataCarpeta, $archivo);
        }
    }
    asort($dataCarpeta);

    $dateWork = date("y") - 10;
?>
    <main>
        <section class="header maxWidth">
            <div class="contentHeder">
                <div class="ContSlider">
                    <div class="container_slider">
                        <?php foreach ($dataCarpeta as $key => $value): 
                            $nameClient = substr($value, 0, -4);?>
                            <a href="./<?php echo $nameClient?> ">
                                <div class="container_slider_img">
                                    <figure>
                                        <img src="assets/img/slider/<?php echo $value ?>" alt="<?php  echo $nameClient?>">
                                    </figure>
                                </div>
                            </a>
                        <?php endforeach ?>
                    </div>
                </div>
                <div class="containerText">
                    <p>Tiendas virtuales o Páginas Web</p>
                </div>
            </div>
        </section>
        <section class="freeLance maxWidth">
            <p>
                No pienses en mi como un <b>Freelancer</b> más, me integro de manera organica a tu equipo, empresa o proyecto,
                <b>Juntos</b> podemos hacer grandes cosas.
            </p>
        </section>
        <section class="containerCompra">
            <h3>Compra Ya tu tienda en linea o sitio Web</h3>
            <div class="container">
                <a class="btn_WhatsApp" href="https://wa.link/u8a270" target="_blank"><span class="icon-whatsapp"></span>Hablemos</a>
                <a class="btn_pixel" href="https://wa.link/9fy2iq" target="_blank"> Comprar <span class="icon-bag"></span> </a>
            </div>
        </section>
        <section class="bannerInvitation">
            <div class="contentInvitation maxWidth">
                <div class="containerBannerInvitation">
                    <h3>Hey, 🤙🏼 comencemos hoy</h3>
                    <p>
                        Sentémonos y tengamos una charla, o tomémonos un café virtual y hablemos de lo que negocio necesita.
                    </p>
                    <a href="https://wa.link/u8a270" class="btn_pixel" target="_blank"><span class="icon-tel"></span> Hablemos</a>
                </div>
            </div>
        </section>
        <section class="containerBeneficios maxWidth">
            <div class="headerBeneficios">
                <h3>¿BENEFICIOS DE TU SITIO WEB?</h3>
                <p>
                    En <strong>Pixel Agency</strong>puedes obtener tu sitio Web o tienda online optimizada y lista para vender, 
                    aumenta tus ventas con una tienda en línea o presenta tu negocio con una página Web y llega a miles de 
                    usuarios de tu interés, tenemos los mejores precios y los mejores tiempos de entrega, Adicional te damos 
                    una asesoría completa de Marketing Digital y como puedes poner tu tienda a facturar desde el minuto 1 de 
                    lanzamiento.
                </p>
                <a href="https://wa.link/u8a270" target="_blank" class="btn_pixel">Contáctanos</a>
            </div>
            <div class="contentBeneficios">
                <div class="cont_ben">
                    <h2>ADAPTABILIDAD</h2>
                    <P>Todas las páginas web y tiendas en línea serán adaptables y funcionales en cualquier dispositivo.</P>
                </div>
                <div class="cont_ben">
                    <h2>PRODUCTOS ILIMITADOS</h2>
                    <P>Puedes ajustar tu inventario y los productos o servicios que vendas de forma fácil y rápida.</P>
                </div>
                <div class="cont_ben">
                    <h2>Asesoría personalizada</h2>
                    <P>Una vez entregado el sitio web o tienda en línea te asesoramos en el manejo del sitio web y puedas comenzar a dar el primer paso en la venta.</P>
                </div>
                <div class="cont_ben">
                    <h2>INTEGRACIÓN REDES SOCIALES</h2>
                    <P>Integramos tu tienda online con el Marketplace de Facebook e instagram para que puedas tener el engranaje perfecto entre tienda y redes sociales.</P>
                </div>
            </div>
        </section>
        <section class="containerServices maxWidth">
            <div class="containerExplicationServices">
                <span>+ Visibilidad + Ventas</span>
                <h2>INNOVACIÓN y Resultados</h2>
                <p>
                    Desarrollo productos digitales hace más de <strong> <?php echo $dateWork ?> Años </strong>
                    con mi experiencia y tu idea podemos hacer grandes cosas para tu negocio.
                </p>
            </div>
            <div class="servicesIcons">
                <ul>
                    <li>
                        <div class="contentService">
                            <figure>
                                <img src="assets/img/Web Design Icon.png" alt="Diseño Web">
                            </figure>
                            <h3>POSICIONAMIENTO </br> EN GOOGLE</h3>
                            <p>
                            Google es la plataforma #1 en el mundo en navegación, haz que tu página Web o tienda virtual sea más fácil de encontrar para tus potenciales clientes.
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
                                Creamos campañas impactantes y segmentadas para llegarle a tu público objetivo de manera 
                                eficiente y precisa.  
                            </p>
                            </div>
                        </div>
                    </li>
                    <!-- <li>
                        <div class="contentService">
                            <figure>
                                <img src="img/Branding Icon.png" alt="Branding PNG">
                            </figure>
                            <h3>Branding / Marca</h3>
                            <p>
                                Diseñamos y estructuramos la identidad de tu marca sostenible en el tiempo.
                            </p>
                        </div>
                    </li> -->
                    <li>
                        <div class="contentService">
                            <figure>
                                <img src="img/Contenido Icon.png" alt="Contenido">
                            </figure>
                            <h3>Creación de Contenido</h3>
                            <p>
                            ¿Tu contenido es de alto valor o genérico? Te asesoramos y guiamos en el proceso del tipo de contenido que a tu marca más le funciona con estrategias en tendencia y aplicándolo para que vuelva viral tu contenido.
                            </p>
                        </div>
                    </li>
                    <!-- <li>
                        <div class="contentService">
                            <figure>
                                <img src="img/Cloud Icon.png" alt="Cloud Service">
                            </figure>
                            <h3>Cloud Service</h3>
                            <p>
                                Alquilamos servicios de alojamiento y Hosting para tu sitio web o Aplicación.
                            </p>
                        </div>
                    </li> -->
                    <li>
                        <div class="contentService">
                            <figure>
                                <img src="img/AppFotografia.png"" alt="Fotografia">
                            </figure>
                            <h3>Fotografia </br> Producto</h3>
                            <p>
                                Las imágenes venden, te ayudamos a mostrar tus productos de manera profesional y optimizado
                                para usarlas en redes sociales y cualquier medio digital.
                            </p>
                        </div>
                    </li>
                    <li>
                        <div class="contentService">
                            <figure>
                                <img src="img/App Icon.png" alt="Software">
                            </figure>
                            <h3>Instagram y Facebook Shop</h3>
                            <p>
                                Integramos toda tu tienda Online con las principales redes sociales, creando un engranaje
                                perfecto tu sistema web y tus redes sociales, aumentando tu visibilidad, ventas y más.
                            </p>
                        </div>
                    </li>
                    <li>
                        <div class="contentService">
                            <figure>
                                <img src="img/App Icon.png" alt="Software">
                            </figure>
                            <h3>Meta </br> Ads</h3>
                            <p>
                                Una vez integrado toda la tienda virtual con las redes sociales podemos crear campañas
                                poderosas en Meta, la plataforma con millones de usuarios recurrentes, en Instagram y Facebook,
                                haciéndolo de manera Inteligente.
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
                                <li><span>✔</span>Máximo 4 secciones</li>
                                <li><span>✔</span>Integración Facebook - Instagram</li>
                                <li><span>✔</span>Optimización y SEO</li>
                                <li><span>✔</span>Gestión y Administración</li>
                                <li><span>✔</span>Integración WhatsApp Business</li>
                            </ul>
                        </div>
                        <div class="footer_promo">
                            <p>Desde</p>
                        </div>
                    </div>
                    <div class="price_promo">
                        <p class="font_bold">$300/USD</p>
                    </div>
                    <div class="contentMorePro">
                        <a href="https://wa.link/pkyvtf" target="_blank">Necesito algo más pro</a>
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
                                <li><span>✔</span>Montaje Productos</li>
                                <li><span>✔</span>Integración con Facebook - Instagram</li>
                                <li><span>✔</span>Pasarela de pago</li>
                                <li><span>✔</span>Optimización y SEO</li>
                                <li><span>✔</span>Gestión y administración de la tienda</li>
                                <li><span>✔</span>Certificado SSl</li>
                                <li><span>✔</span>Integración WhatsApp Business</li>
                            </ul>
                        </div>
                        <div class="footer_promo">
                            <p>Desde</p>
                        </div>
                    </div>
                    <div class="price_promo">
                        <p>$600/USD</p>
                    </div>
                    <div class="contentMorePro">
                        <a href="https://wa.link/ki9kme" target="_blank">Necesito algo más pro</a>
                    </div>
                </div>
                <div class="promos">
                    <div class="promo1">
                        <div class="header_promo1">
                            <h2>Hosting, Dominio y SSL</h2>
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
                                <li><span>✔</span>Certificado de Seguridad</li>
                            </ul>
                        </div>
                        <div class="footer_promo">
                            <p>Desde</p>
                        </div>
                    </div>
                    <div class="price_promo">
                        <p>$100/USD - Año</p>
                    </div>
                    <div class="contentMorePro">
                        <a href="https://wa.link/pkyvtf" target="_blank">Necesito algo más pro</a>
                    </div>
                </div>
            </div>
            <a class="btn_pixel" href="https://wa.link/9fy2iq" target="_blank">Comprar</a>
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
                            <figure><img src="./assets/img/Marcas/suroeste.png" alt="Suroeste"></figure>
                        </li>
                        <li>
                            <figure><img src="./assets/img/Marcas/ramirartes.png" alt=""></figure>
                        </li>
                        <li>
                            <figure><img src="./assets/img/Marcas/santorini.png" alt=""></figure>
                        </li>
                        <li>
                            <figure><img src="./assets/img/Marcas/jakofashion.png" alt=""></figure>
                        </li>
                        <li>
                            <figure><img src="./assets/img/Marcas/sap.png" alt="SAP miami"></figure>
                        </li>
                        <li>
                            <figure><img src="./assets/img/Marcas/Drakon.png" alt=""></figure>
                        </li>
                      
                    </ul> 
                </div>
                <div class="conteinerImageOffice">
                    <figure>
                        <img src="./assets/img/fotoOficna.png" alt="Oficina Pixel Agency">
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
                    $nameCompress = substr($value, 0, -4) ?>
                        <div class='containerImage'>
                            <div class='contentImage'> 
                                <a href="./<?php echo $nameCompress ?>">
                                    <img src="../assets/img/slider/<?php echo $value ?>" alt="">
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
                    <a href="./historia" id="sobreMi">Conoce más sobre mi</a>
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
    include("../permanentes/footer.php");
?>

