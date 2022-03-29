<?php include("inc/header.php")?>
    <!---- End headers-->
    <section id="body">
        <div class="col-md-6 offset-md-3">
            <div class="body__form">
                <form method="post" id="form" action="data/send_data.php">
                    <select name="package_type" class="form-select mb-3" onchange="packeges()" id="choose_packegs" aria-label="Default select example">
                        <option selected value="Promotional">Promotional Package</option>
                        <option value="Regular">Regular Package</option>
                      </select>

                    <div id="promational_pakege">

                        <!---------------- full name ------------->
                        <div class="mb-3 ">
                            <input type="text" class="form-control" id="full_name" placeholder="Full Name" name="full_name">
                        </div>
                        <!----------------/End full name ------------->

                         <!---------------- Mobile Numbder and Email ------------->
                        <div class="row">
                            <div class="col-md-6 mb-3 ">
                                <input type="number" class="form-control" id="Mobile_Number" name="Mobile_Number" placeholder="Mobile Number">
                            </div>
                            <div class="col-md-6 mb-3 ">
                                <input type="text" class="form-control" id="Email" placeholder="Email" name="email">
                            </div>
                        </div>
                        <!----------------/End Mobile Numbder and Email ------------->

                        <!---------------- Thana name and Area Name ------------->
                        <div class="row ">
                            <div class="col-md-6 mb-3 ">
                                <select name="thana" class="form-select form-control" aria-label="Default select example">
                                    <option selected disabled>Thana name</option>
                                    <option value="">Thana name 1</option>
                                    <option value="">Thana name 2</option>
                                    <option value="">Thana name 3</option>
                                    <option value="">Thana name 4</option>
                                    <option value="">Thana name 5</option>
                                  </select>
                            </div>

                            <div class="col-md-6 mb-3 ">
                                <select name="area_name" class="form-select form-control" aria-label="Default select example">
                                    <option selected disabled>Area name</option>
                                    <option value="">Area name 1</option>
                                    <option value="">Area name 2</option>
                                    <option value="">Area name 3</option>
                                    <option value="">Area name 4</option>
                                    <option value="">Area name 5</option>
                                  </select>
                            </div>
                        </div>
                        <!----------------/End  Thana name and Area Name ------------->

                        <!---------------- Address ------------->
                        <div class="col-md-12 mb-3 ">
                            <textarea type="text" class="form-control" id="address" name="address" placeholder="Address"></textarea>
                        </div>
                        <!---------------- /End  Address ------------->

                        
                        <!---------------------################################################################################################ For Regular Packege plan ###############################################################-------------->
                        <div id="for_regular_package">
                            <div class="col-md-12 mb-3 row ">
                                <!----------- col chceck monthly -------->
                                <div class="col-md-6">
                                    <div class="form-check">
                                        <input class="form-check-input" onClick="month_packeg()" value="Monthly Packeg" type="radio" name="packeg" id="month_packeg">
                                        <label class="form-check-label" onClick="month_packeg()" for="month_packeg">
                                            Monthly Package
                                        </label>
                                    </div>
                                </div>
                                <!----------- col chceck Yearlly -------->
                                <div class="col-md-6">
                                    <div class="form-check">
                                        <input class="form-check-input" onClick="yearly_packeg()" value="Yearly Packeg" type="radio" name="packeg" id="yearly_packeg">
                                        <label class="form-check-label" onClick="yearly_packeg()" for="yearly_packeg">
                                                Yearly Package
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 mb-3 ">
                                <select name="monthly_packege_list" id="monthly_packege_list" class="form-select form-control" aria-label="Default select example">
                                    <option selected disabled> Package Plan Monthly </option>
                                    <option value=""> Package Plan Monthly  1</option>
                                    <option value=""> Package Plan Monthly  2</option>
                                    <option value=""> Package Plan Monthly  3</option>
                                    <option value=""> Package Plan Monthly  4</option>
                                    <option value=""> Package Plan Monthly  5</option>
                                    </select>
                            </div>

                            <div class="col-md-12 mb-3 ">
                                <select name="yearlly_packege_list" id="yearlly_packege_list" class="form-select form-control" aria-label="Default select example">
                                    <option selected disabled>Package Plan Yearly</option>
                                    <option value="">Package Plan Yearly 1</option>
                                    <option value="">Package Plan Yearly 2</option>
                                    <option value="">Package Plan Yearly 3</option>
                                    <option value="">Package Plan Yearly 4</option>
                                    <option value="">Package Plan Yearly 5</option>
                                    </select>
                            </div>
                        </div>
                         <!--------------------------################################################################################################################# End Regular Packege plan #############################################################################################-------------->


                        <div id="for_promotional_package">
                              <!---------------- Promotional package ------------->
                              <select name="promotional_package" class="form-select form-control mb-3" aria-label="Default select example">
                                    <option selected disabled>Promotional package</option>
                                    <option value="Promotional package 1">Promotional package 1</option>
                                    <option value="Promotional package 2">Promotional package 2</option>
                                    <option value="Promotional package 3">Promotional package 3</option>
                                    <option value="Promotional package 4">Promotional package 4</option>
                                    <option value="Promotional package 5">Promotional package 5</option>
                                </select>
                            <!----------------/End Promotional package plan ------------->

                             <!---------------- package plan ------------->
                             <select name="package_paln"  class="form-select form-control mb-3" aria-label="Default select example">
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
                            <input type="map" readonly class="form-control" placeholder="Home Location (Select by Google Map)" aria-describedby="basic-addon2">

                            <a href="https://www.google.com/maps" target="_blank" class="input-group-text innet_input_btn" id="basic-addon2"><i class="fa fa-map-marker" aria-hidden="true"></i>
                            </a>
                        </div>
                        <!----------------/ End Google Map ------------->
                        

                        <!---------------- Create Date ------------->
                        <div class="input-group col-md-6 mb-3">
                            <input type="date" name="date" class="form-control" placeholder="Creation Date" aria-describedby="basic-addon2">
                        </div>
                        <!---------------- /End Create Date ------------->
                    </div>
                    <!---------------- Loding Images ------------->
                    <div id="loader" class="col-md-4 offset-md-4">
                        <img src="assets/img/loader.gif" height="100" alt="">
                    </div>
                    <!----------------/End Loding Images ------------->


                    <!---------------- Button for promotional Packate------------->
                    <button data-bs-toggle="modal" data-bs-target="#location" id="promotional_pkg_btn" type="button" class="btn btn-custom col-md-4 offset-md-4">Submit </button>


                    <!---------------- Button for Regular Packate------------->
                    <button type="submit" id="regular_pkg_btn" class="btn btn-custom col-md-4 offset-md-4">Submit </button>
                </form>
            </div>
        </div>
    </section>


<?php include("inc/footer.php")?>