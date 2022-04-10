var PromotionalPackageOffer = document.getElementById("PromotionalPackageOffer");
PromotionalPackageOffer.style.display = "block";

var RegularpackageOffer = document.getElementById("RegularpackageOffer");
RegularpackageOffer.style.display = "none";

//loader 
var loader = document.getElementById("loader");
loader.style.display = "none";

var error_div = document.getElementById("error-div").style.display = "none";
//functions
function packeges() {

    var packeges = document.getElementById("choose_packegs").value;



    if (packeges == 'Promotional') {
        const PromotionalscriptURL = 'https://script.google.com/macros/s/AKfycbw2DqXIlTYe4pDKwjLGpulL9JgU_g1fTNiqmODyYI0Odzw9kPZMyoaBX4XoLg_ni2bLBg/exec'; //google sheet link//
        const PromotionalPackage = document.forms['PromotionalPackage']; // PromotionalPackage form name as same google sheets
        PromotionalPackage.addEventListener('submit', e => {
            e.preventDefault()
            error_div.style.display = 'block';
            $("#btn").val("Please wait...");
            $("#btn").attr('disabled', true);

            $.ajax({
                url: 'data/promotional-package.php',
                type: 'POST',
                data: $("#PromotionalPackage").serialize(),
                success: function(result) {
                    //show validation error
                    document.getElementById("error").innerHTML = result;
                    $("#btn").val("Submit");
                    $("#btn").attr('disabled', false);
                    fetch(PromotionalscriptURL, { method: 'POST', body: new FormData(PromotionalPackage) }).then(response => alert("Thanks for Contacting us..! We Will Contact You Soon... Data send in google sheets"))
                        .catch(error => console.error('Error!', error.message))



                }
            })


        });

    } else if (packeges == 'Regular') {

        const RegularscriptURL = 'https://script.google.com/macros/s/AKfycbxo2FLwlQby-C9lapVM6DJ3wZWUSk1HzweDE7D1Uxa2GAp1vXyv8ytifsAcJc6TAoFA/exec'; //google sheet link//
        const Regularpackage = document.forms['Regularpackage']; // RegularProject form name as same google sheets



        Regularpackage.addEventListener('submit', e => {
            e.preventDefault()

            $("#regular_pkg_btn").val("Please wait...");
            $("#regular_pkg_btn").attr('disabled', true);

            $.ajax({
                url: 'data/regular-package.php',
                type: 'POST',
                data: $("#Regularpackage").serialize(),
                success: function(result) {
                    //show validation error
                    document.getElementById("error").innerHTML = result;
                    $("#regular_pkg_btn").val("Submit");
                    $("#regular_pkg_btn").attr('disabled', false);
                    fetch(RegularscriptURL, { method: 'POST', body: new FormData(Regularpackage) }).then(response => alert("Thanks for Contacting us..! We Will Contact You Soon... Data send in google sheets"))
                        .catch(error => console.error('Error!', error.message))



                }
            })


        });

    } else {
        alert('Some Error');
    }


















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