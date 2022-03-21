var promational_pakege = document.getElementById("promational_pakege");
    promational_pakege.style.display = "block";

    //loader 
var loader = document.getElementById("loader");
    loader.style.display = "none"



    //button 
var promotional_pkg_btn = document.getElementById("promotional_pkg_btn");
    promotional_pkg_btn.style.display = "block"
var regular_pkg_btn = document.getElementById("regular_pkg_btn");
    regular_pkg_btn.style.display = "none";


    //functions
function packeges(){

    var packeges = document.getElementById("choose_packegs").value;
    console.log(packeges);
    promational_pakege.style.display = "none";
    loader.style.display = "block"

    //Timer
    const myTimeout = setTimeout(getTime, 700);
    function getTime() {
        promational_pakege.style.display = "block";
        loader.style.display = "none"
    }

    //Conditions
    if(packeges == "Regular"){
        regular_pkg_btn.style.display = "block";
        promotional_pkg_btn.style.display = "none"
    }

}