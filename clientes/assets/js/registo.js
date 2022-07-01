let registro = {

    start : () => {
        document.addEventListener("DOMContentLoaded", function() {
            registro.validarInformacion();
        })
    },

    validarInformacion: () => {
        
        let form = document.formRegister;
        let formData = new FormData(formRegister);

        form.addEventListener('submit', (e) => {
            fetch('/clientes/controller/validationRegister.php', {
                method: 'POST',
                body: formData
            });
        })
    }
}

registro.start();