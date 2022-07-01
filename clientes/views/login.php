<?php 

    //session_start();
    require "../model/database.php";
    include("../estaticos/header.php");

?>

<main class="maxWidth">
    <div class="containerForm widthResponsive">
        <section class="headerForm">
            <h1>Panel de clientes</h1>
            <p>Logueate para gestionar tus servicios</p>
        </section>
        <section class="contentForm">
            <div class="containerAlertLogin" id="alertLogin">
                <p>Algún dato no es correcto, por favor verifica</p>
            </div>
            <form name="formLogin">
                <div class="containerInput">
                    <span>http://</span>
                    <input type="domain" placeholder="Dominio" id="dominio" name="dominio">
                </div>
                <div class="containerInput">
                    <input type="password" name="password" id="password" placeholder="password">
                </div>
                <button>Ingresar</button>
            </form>
            <a href="mailto:daniel@pixelagency.co" class="removePass">Se me olvidó la clave</a>
        </section>
    </div>
</main>

<?php 
    include("../estaticos/footer.php");
    include("../estaticos/scriptsGlobal.php");
?>