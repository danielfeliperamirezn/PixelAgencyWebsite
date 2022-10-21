let mail = {


    start : () => {

        document.addEventListener("DOMContentLoaded", function(event) {
            /*let form = document.querySelector(".sendForm");
            form.addEventListener("click", (event) => {*/
                mail.sendEmail();
                
        });
    },

    sendEmail : () => {
        let form = document.formContact;
        let warning =  document.querySelector(".containerError");
        let select = document.getElementById("selectProduct");
        let name = document.getElementById("nombreForm");
        let email = document.getElementById("number");
        let number = document.getElementById("email");
        let text = document.getElementById("text");
        let mensaje = document.getElementById("mensaje");

        
            form.addEventListener("submit", (event) => {
                event.preventDefault();
                let loading = document.querySelector(".container_Loader");
                if(select.value != undefined || name.value == "" || email.value == "" || number.value == "" || text.value == "") {
                    warning.style.display = "block"
                } else {
                    const formData = new FormData(form);
                    fetch('./mail.php', {
                        method : 'POST',
                        body: formData
                    });
                    loading.style.display = "flex"
                    setTimeout(() => {
                        loading.style.display = "none"
                        form.reset();
                    }, 3000)
                }
            });
    }
}

mail.start();