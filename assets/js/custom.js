var PromotionalPackageOffer = document.getElementById("PromotionalPackageOffer");
PromotionalPackageOffer.style.display = "block";

var RegularpackageOffer = document.getElementById("RegularpackageOffer");
RegularpackageOffer.style.display = "none";

//loader 
var loader = document.getElementById("loader");
loader.style.display = "none";

//functions
function packeges() {

    var packeges = document.getElementById("choose_packegs").value;
    loader.style.display = "none";
    PromotionalPackageOffer.style.display = "none";
    RegularpackageOffer.style.display = "none";

    //Timer
    const myTimeout = setTimeout(getTime, 700);

    function getTime() {
        loader.style.display = "none";
    }


    //Conditions
    if (packeges == "Regular") {
        RegularpackageOffer.style.display = "block";
        PromotionalPackageOffer.style.display = "none";
    } else if (packeges == "Promotional") {
        RegularpackageOffer.style.display = "none";
        PromotionalPackageOffer.style.display = "block";
    }


}