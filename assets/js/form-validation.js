function FormValidation() {
    var forms = document.forms['package_secation'];


    var package_type = forms['package_type'].value;
    var fullName = forms['full_name'].value;
    var Mobile_Number = forms['Mobile_Number'].value;
    var email = forms['email'].value;
    var thana = forms['thana'].value;
    var area_name = forms['area_name'].value;
    var address = forms['address'].value;
    var packeg = forms['packeg'].value;


    var monthly_packege_list = forms['monthly_packege_list'].value;
    var yearlly_packe = forms['yearlly_packe'].value;
    var date = forms['date'].value;

    if (fullName.isEmpty()) {
        document.getElementById('full_name_error').innerHTML = "This Full Name must not be empty.";
    }


}