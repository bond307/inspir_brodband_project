var monthly_packege_list = document.getElementById("monthly_packege_list").style.display = "none";
var yearlly_packege_list = document.getElementById("yearlly_packege_list").style.display = "none";

function month_packeg() {
    document.getElementById("monthly_packege_list").style.display = "block";
    document.getElementById("yearlly_packege_list").style.display = "none";
}

function yearly_packeg() {
    document.getElementById("yearlly_packege_list").style.display = "block";
    document.getElementById("monthly_packege_list").style.display = "none";
}