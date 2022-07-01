let global = {


    start : () => {

        document.addEventListener("DOMContentLoaded", function() {
            global.formLogin();
        })
    },

    formLogin: () => {

        let dominio = document.getElementById("dominio");
        let password = document.getElementById("password");
        let form = document.formLogin;
        let alertLogin = document.getElementById("alertLogin");

        form.addEventListener("submit", (e) => {
            event.preventDefault();
            if(dominio.value != "" && password.value != "") {
                global.sendForm();
            } else {
                
                alertLogin.style.display = "block";
            }
        })
            
    },

    sendForm: () => {
        console.log("se envio login")
    }
}

global.start();