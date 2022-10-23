

    
</body>
<footer>
    <div class="container_Form maxWidth">
        <h2>¿Todo listo para trabajar juntos?</h2>
        <div class="contentDataForm">
            <div class="containerDescForm">
                <p>
                    Los mejores productos y los mejores servicios son creados por personas visionarias 
                    capaces de enfrentar sus miedos y de avanzar, Hablemos y comencemos tu historia digital
                </p>
            </div>
            <div class="formContactGlobal">
                <div class="containerError">
                    <p>Algún dato no es correcto, verifica por favor</p>
                </div>
                <form class="formContact" name="formContact">
                    <div class="container_select" id="selectProduct">
                        <select name="portafolioPixel" id="portafolioPixel" class="selectService">
                            <option value="0">Elige el servicio</option>
                            <option value="web">Página Web</option>
                            <option value="tienda virtual">Tienda virtual</option>
                            <option value="Marketing Digital">Marketing Digital</option>
                            <option value="Gestion de Contenido">Gestion de Contenido</option>
                            <option value="Software A la Medida">Software A la Medida</option>
                            <option value="Branding y Publicidad">Branding y Publicidad</option>
                            <option value="Fotografia De Producto">Fotografia De Producto</option>
                        </select>
                    </div>
                    <input type="text" name="Nombre" placeholder="Nombre" require="require" id="nombreForm" class="name"  class="selectService">
                    <input type="Email" name="email" placeholder="Email" require="require" id="email" class="email">
                    <input type="number" name="celular" placeholder="Celular" require="require" id="number" class="celular">
                    <input type="text" name="empresa"  placeholder="Empresa" require="require" id="text" class="empresa">
                    <textarea name="Mensaje" id="" cols="30" rows="10" placeholder="Mensaje" id="mensaje" class="mensjae"></textarea>
                    <button class="sendForm">Enviar</button>
                </form>
                <span class="container_Loader">
                    <p>Enviando…</p>
                </span>
            </div>
        </div>
    </div>
    <div class="container_social_media">
        <ul>
            <li><a href="https://www.facebook.com/pixelAgencyy/" target="_blank" class="icon-facebook"></a></li>
            <li><a href="https://www.instagram.com/pixelagencyy/" target="_blank" class="icon-instagram"></a></li>
            <li><a href="" class="icon-whatsapp"></a></li>
        </ul>
    </div>
    <div class="container_information_pixel">
        <figure>
            <img src="./assets/img/logoFooter.webp" alt="Pixel Agency">
        </figure>
        <div class="text">
            <h3>para el mundo</h3>
            <p>Medellín Colombia</p>
            <ul>
                <li><a href="">Politicas y Privacidad</a></li>
                <li><a href="">Politicas Cookies</a></li>
            </ul>
        </div>
        <div class="container_number">
            <div class="Ubicacion">
                <span></span>
                <a href="https://www.google.com/maps?cid=3916606320819414401&_ga=2.30952824.698821072.1639253176-1330579342.1637266911" target="_blank" >Ver en Google maps</a>
            </div>
            <div class="contact">
                <span></span>
                <a href="contacto.php">Contactanos</a>
            </div>
        </div>
    </div>
    <div class="piePixel">
        <p>Todos los derechos reservados <?php print_r(date("Y"));  ?> </p>
        <p>Politicas de privacidad</p>
    </div>
    <div class="containerCotization">
        <span id="closeCoti">x</span>
        <div class="container">
            <h2 class="title2">Cotizaciones</h2>
            <form>
                <input type="text" id="nombre" Placeholder="Nombre y Apellido">
                <input type="number" id="cel" Placeholder="Celular">
                <input type="text" id="nameBussiness" Placeholder="Nombre de Empresa o Negocio">
                <div class="container_select">
                    <select name="portafolioPixel" id="portafolioPixel">
                        <option value="0">Que tipo de servicio necesitas</option>
                        <option value="web">Página Web</option>
                        <option value="tienda virtual">tienda virtual</option>
                        <option value="Marketing Digital">Marketing Digital</option>
                        <option value="Gestion de Contenido">Gestion de Contenido</option>
                        <option value="Software A la Medida">Software A la Medida</option>
                        <option value="Diseño 3D">Diseño 3D</option>
                        <option value="Branding y Publicidad">Branding y Publicidad</option>
                        <option value="Fotografia De Producto">Fotografia De Producto</option>
                    </select>
                </div>
                <div class="container_select">
                    <select name="presupuesto" id="presupuesto">
                        <option value="0">Tipo de presupuesto</option>
                        <option value="Limitado">Limitado</option>
                        <option value="Flexible">Flexible</option>
                        <option value="Solido">Sólido</option>
                    </select>
                </div>
                <input type="text" id="observation" Placeholder="Observación (opcional)">
                <button id="SendCoti">Enviar</button>
            </form>
        </div>
    </div>
    <div class="containerWhatsapp">
            <a href="https://api.whatsapp.com/send?phone=573136545274" target="_blank" class="icon-whatsapp"></a>
        </div>
</footer>
<div class="containerAsesoria">
    <p>Obten tu asesoria <span>Gratis</span> </p>
    <a href="https://wa.me/573136545274?text=Hola,%20me%20gustaría%20la%20asesoría%20gratuita" target="_blank"> <span class="icon-whatsapp"></span> </a>
</div>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="assets/js/scriptPixel.js" ></script>
<script type="text/javascript" src="assets/js/slick.js"></script>
<script src="js/mail.js"></script>
</html>