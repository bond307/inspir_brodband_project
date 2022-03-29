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


//Regular package plane display by defult none
var for_regular_package = document.getElementById("for_regular_package");
for_regular_package.style.display = "none";


//promotional package plane display by deflute Show
var for_promotional_package = document.getElementById("for_promotional_package");
for_promotional_package.style.display = "block";

//functions
function packeges() {

    var packeges = document.getElementById("choose_packegs").value;

    promational_pakege.style.display = "none";
    loader.style.display = "block"

    //Timer
    const myTimeout = setTimeout(getTime, 700);

    function getTime() {
        promational_pakege.style.display = "block";
        loader.style.display = "none"
    }

    //Conditions
    if (packeges == "Regular") {
        regular_pkg_btn.style.display = "block";
        promotional_pkg_btn.style.display = "none"

        //show hide packages 
        //show Regular package plane
        for_regular_package.style.display = "block"
        //hide promotional package plane
        for_promotional_package.style.display = "none"
    }

}