<?php

    include("./estaticos/header.php");
?>
<main class="maxWidth">
    <div class="containerForm widthResponsive">
        <section class="headerForm">
            <h1>Registro Cliente</h1>
        </section>
        <div class="contentForm">
            <div class="containerAlertLogin" id="alertLogin">
                <p>Registro cliente</p>
            </div>
            <form name="formRegister">
                <div class="containerInput">
                    <input type="text" name="nombre" placeholder="Nombre" id="nameRegister">
                </div>
                <div class="containerInput">
                    <input type="number" name="telefono" id="phoneRegister" placeholder="Teléfono">
                </div>
                <div class="containerInput">
                    <input type="text" name="servicios" id="serviceRegister" placeholder="Servicios">
                </div>
                <div class="containerInput">
                    <input type="text" name="ciudad" id="countryRegister" placeholder="Ciudad">
                </div>
                <div class="containerInput">
                    <input type="text" name="dominio" id="domainRegister" placeholder="Dominio">
                </div>
                <div class="containerInput">
                    <input type="password" name="password" id="passwordRegister" placeholder="password">
                </div>
                <button>Registrar</button>
            </form>
        </div>
    </div>
</main>

<?php 
    include("./estaticos/footer.php");
?>

<script src="./assets/js/registo.js"></script>