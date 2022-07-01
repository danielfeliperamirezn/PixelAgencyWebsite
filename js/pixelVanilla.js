let valueData = 10;
let pixel = {

    start:() => {
        document.addEventListener("DOMContentLoaded", function(event){
            pixel.movimiento();
        })
    },

    movimiento:() => {
        let value = document.querySelector(".containerSlider");

        value.style = "margin-left: -" + valueData + "px";
        valueData = valueData + 4;
        
        setTimeout(pixel.movimiento, 400);
    }
}

pixel.start();


