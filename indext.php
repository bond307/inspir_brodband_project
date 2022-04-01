<?php include("inc/header.php");
$CurrentDate = date("Y-m-d");
?>
    <!---- End headers-->
    <section id="body">
        <div class="col-md-6 offset-md-3">
            <!-- <div class="error">
                <p id="error"></p>
            </div> -->

            <div class="body__form">
            
                    <select name="package_type" class="form-select mb-3" onchange="packeges()" id="choose_packegs">
                        <option selected disabled>Choose Your Offer</option>
                        <option value="Promotional">Promotional Package</option>
                        <option value="Regular">Regular Package</option>
                    </select>     

                    <div id="PromotionalPackageOffer">
                        <form method="POST" name="PromotionalPackage" id="PromotionalPackage">
                            <div id="leads_fields">
                                <!---------------- full name ------------->
                                <div class="mb-3 ">
                                    <input type="text" class="form-control" id="FullName" placeholder="Full Name" name="FullName" required>
                                    <small class=""><?php $error;?> </small>
                                
                                </div>
                                <!----------------/End full name ------------->

                                <!---------------- Mobile Numbder and Email ------------->
                                <div class="row">
                                    <div class="col-md-6 mb-3 ">
                                        <input type="number" class="form-control" id="Mobile_Number" name="MobileNumber" placeholder="Mobile Number" required>
                                      
                                    </div>
                                    <div class="col-md-6 mb-3 ">
                                        <input type="text" class="form-control" id="Email" placeholder="Email" name="Email" required>
                                    </div>
                                </div>
                                <!----------------/End Mobile Numbder and Email ------------->

                                <!---------------- Thana name and Area Name ------------->
                                <div class="row ">
                                    <div class="col-md-6 mb-3 ">
                                        <input type="number" class="form-control" id="ALTMobileNumber" name="ALTMobileNumber" placeholder="ALT Mobile Number" required>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <select required name="ThanaName" class="form-select form-control" id="promo_package_thana" >
                                            <option selected disabled>Thana name</option>
                                            <option value="Mohammadpur Thana">Mohammadpur Thana</option>
                                            <option value="Adabor Thana">Adabor Thana</option>
                                        </select>
                                    </div>
                                </div>
                                <!----------------/End  Thana name and Area Name ------------->

                                <!---------------- Address ------------->
                                <div class="col-md-12 mb-3 ">
                                    <textarea required type="text" class="form-control" id="address" name="Address" placeholder="Address"></textarea>
                                </div>
                                <!---------------- /End  Address ------------->

                                
                        
                                <div id="for_promotional_package">
                                    <!---------------- package plan ------------->
                                    <select required name="PromotionalPackage"  class="form-select form-control mb-3" aria-label="Default select example">
                                            <option selected disabled>Package plan</option>
                                            <option value="package  1">package  1</option>
                                            <option value="package  2">package  2</option>
                                            <option value="package  3">package  3</option>
                                            <option value="package  4">package  4</option>
                                            <option value="package  5">package  5</option>
                                        </select>
                                    <!----------------/End package  ------------->
                                    
                                    <!---------------- package plan ------------->
                                    <select required name="PackagePlan"  class="form-select form-control mb-3" aria-label="Default select example">
                                            <option selected disabled>Package plan</option>
                                            <option value="package  1">package  1</option>
                                            <option value="package  2">package  2</option>
                                            <option value="package  3">package  3</option>
                                            <option value="package  4">package  4</option>
                                            <option value="package  5">package  5</option>
                                        </select>
                                    <!----------------/End package  ------------->
                                </div>



                                <!---------------- Google Map ------------->
                                <div class="input-group col-md-6 mb-3">
                                    <input required type="map" readonly class="form-control" placeholder="Home Location (Select by Google Map)" name="HomeLocation" aria-describedby="basic-addon2">

                                    <a href="https://www.google.com/maps" target="_blank" class="input-group-text innet_input_btn" id="basic-addon2"><i class="fa fa-map-marker" aria-hidden="true"></i>
                                    </a>
                                </div>
                                <!----------------/ End Google Map ------------->
                                

                                <!---------------- Create Date ------------->
                                <div class="input-group col-md-6 mb-3">
                                    <input required type="date" id="ActivationDate" name="ActivationDate" class="form-control" placeholder="Preferred Actiovation Date">
                                </div>
                                <!---------------- /End Create Date ------------->

                                <!---------------- current date ----->
                                <input type="hidden" name="Date" value="<?php echo $CurrentDate?>">

                                <!----------- promo coder------------>
                                <div required class="col-md-12 mb-3 " id="promo_code" >
                                    <input type="text" id="PromoCode" class="form-control" name="PromoCode" placeholder="Enter Your Promo Code">
                                </div>
                            </div>

                            <!---------------- Button for Regular Packate------------->
                            <button type="submit" id="btn" class="btn btn-custom col-md-4 offset-md-4">Submit </button>
                        </form>
                    </div>

                    <div id="RegularpackageOffer">
                        <form method="POST" name="Regularpackage" >
                                <!---------------- full name ------------->
                                <div class="mb-3 ">
                                    <input type="text" class="form-control" id="full_name" placeholder="Full Name" name="FullName">
                                </div>
                                <!----------------/End full name ------------->

                                <!---------------- Mobile Numbder and Email ------------->
                                <div class="row">
                                    <div class="col-md-6 mb-3 ">
                                        <input type="number" class="form-control" id="Mobile_Number" name="MobileNumber" placeholder="Mobile Number">
                                    </div>
                                    <div class="col-md-6 mb-3 ">
                                        <input type="text" class="form-control" id="Email" placeholder="Email" name="Email">
                                    </div>
                                </div>
                                <!----------------/End Mobile Numbder and Email ------------->

                                <!---------------- Thana name and Area Name ------------->
                                <div class="row ">
                                    <div class="col-md-6 mb-3 ">
                                        <input type="number" class="form-control" id="Alt_Mobile_Number" name="ALTMobileNumber" placeholder="ALT Mobile Number">
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <select name="ThanaName" class="form-select form-control" id="regular_package_thana" >
                                            <option selected disabled>Thana name</option>
                                            <option value="Mirpur Thana">Mirpur Thana</option>
                                            <option value="Pollobi Thana">Pollobi Thana</option>
                                            <option value="Mohammadpur Thana">Mohammadpur Thana</option>
                                            <option value="Adabor Thana">Adabor Thana</option>

                                        </select>
                                    </div>
                                </div>
                                <!----------------/End  Thana name and Area Name ------------->

                                <!---------------- Address ------------->
                                <div class="col-md-12 mb-3 ">
                                    <textarea type="text" class="form-control" id="address" name="Address" placeholder="Address"></textarea>
                                </div>
                                <!---------------- /End  Address ------------->

                                
                            
                                <div id="for_regular_package">
                                    <div class="col-md-12 mb-3 row ">
                                        <!----------- col chceck monthly -------->
                                        <div class="col-md-6">
                                            <div class="form-check">
                                                <input class="form-check-input" onClick="month_packeg()" value="Monthly Packeg" type="radio" name="PackageType" id="month_packeg">
                                                <label class="form-check-label" onClick="month_packeg()" for="month_packeg">
                                                    Monthly Package
                                                </label>
                                            </div>
                                        </div>
                                        <!----------- col chceck Yearlly -------->
                                        <div class="col-md-6">
                                            <div class="form-check">
                                                <input class="form-check-input" onClick="yearly_packeg()" value="Yearly Packeg" type="radio" name="PackageType" id="yearly_packeg">
                                                <label class="form-check-label" onClick="yearly_packeg()" for="yearly_packeg">
                                                        Yearly Package
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12 mb-3 ">
                                        <select name="MonthlyPackagePlan" id="monthly_packege_list" class="form-select form-control" aria-label="Default select example">
                                            <option selected disabled> Package Plan Monthly </option>
                                            <option value="Package Plan Monthly  1"> Package Plan Monthly  1</option>
                                            <option value="Package Plan Monthly 2"> Package Plan Monthly  2</option>
                                            <option value="Package Plan Monthly 3"> Package Plan Monthly  3</option>
                                            <option value="Package Plan Monthly 4"> Package Plan Monthly  4</option>
                                            <option value="Package Plan Monthly 5"> Package Plan Monthly  5</option>
                                            </select>
                                    </div>

                                    <div class="col-md-12 mb-3 ">
                                        <select name="YearllyPackagePlan" id="yearlly_packege_list" class="form-select form-control" aria-label="Default select example">
                                            <option selected disabled>Package Plan Yearly</option>
                                            <option value="Package Plan Yearly 1">Package Plan Yearly 1</option>
                                            <option value="Package Plan Yearly 2">Package Plan Yearly 2</option>
                                            <option value="Package Plan Yearly 3">Package Plan Yearly 3</option>
                                            <option value="Package Plan Yearly 4">Package Plan Yearly 4</option>
                                            <option value="Package Plan Yearly 5">Package Plan Yearly 5</option>
                                            </select>
                                    </div>
                                </div>
                        

                                <!---------------- Google Map ------------->
                                <div class="input-group col-md-6 mb-3">
                                    <input type="map" readonly class="form-control" placeholder="Home Location (Select by Google Map)" name="home_location" aria-describedby="basic-addon2">

                                    <a href="https://www.google.com/maps" target="_blank" class="input-group-text innet_input_btn" id="basic-addon2"><i class="fa fa-map-marker" aria-hidden="true"></i>
                                    </a>
                                </div>
                                <!----------------/ End Google Map ------------->
                                

                                <!---------------- Create Date ------------->
                                <div class="input-group col-md-6 mb-3">
                                    <input type="date" name="activation_Date" class="form-control" placeholder="Preferred Actiovation Date" aria-describedby="basic-addon2">
                                </div>
                                <!---------------- /End Create Date ------------->


                            <!---------------- Button for Regular Packate------------->
                            <button type="submit" id="regular_pkg_btn" class="btn btn-custom col-md-4 offset-md-4">Submit </button>
                            
                        </form>
                    </div>

                    <!---------------- Loding Images ------------->
                    <div id="loader" class="col-md-4 offset-md-4">
                        <img src="assets/img/loader.gif" height="100" alt="">
                    </div>
                    <!----------------/End Loding Images ------------->

            </div>
        </div>
    </section>


<script>
const scriptURL = 'https://script.google.com/macros/s/AKfycbw2DqXIlTYe4pDKwjLGpulL9JgU_g1fTNiqmODyYI0Odzw9kPZMyoaBX4XoLg_ni2bLBg/exec';//google sheet link//
const PromotionalPackage = document.forms['PromotionalPackage'];// PromotionalPackage form name as same google sheets



PromotionalPackage.addEventListener('submit', e => {
    e.preventDefault()

    $("#btn").val("Please wait...");
    $("#btn").attr('disabled', true);

    $.ajax({
        url: 'data//promotional-package.php',
        type: 'POST',
        data: $("#PromotionalPackage").serialize(),
        success: function(result) {
            $("#btn").val("Submit");
            $("#btn").attr('disabled', false);
            fetch(scriptURL, { method: 'POST', body: new FormData(PromotionalPackage) }).then(response => alert("Thanks for Contacting us..! We Will Contact You Soon... Data send in google sheets"))
                .catch(error => console.error('Error!', error.message))

            //show validation error
            document.getElementById("error").innerHTML = result;                                              

        }
    })
    
   
})
</script>
<?php include("inc/footer.php")?>
