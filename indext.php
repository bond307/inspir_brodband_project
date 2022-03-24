<?php include("inc/header.php")?>
    <!---- End headers-->
    <section id="body">
        <div class="col-md-6 offset-md-3">
            <div class="body__form">
                <form method="post" id="form" action="Data/send_data.php">
                    <select class="form-select mb-3" onchange="packeges()" id="choose_packegs" aria-label="Default select example">
                        <option selected value="Promotional">Promotional Package</option>
                        <option value="Regular">Regular Package</option>
                      </select>

                    <div id="promational_pakege">
                        <div class="mb-3 ">
                            <input type="text" class="form-control" id="full_name" placeholder="Full Name" name="full_name">
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3 ">
                                <input type="number" class="form-control" id="Mobile_Number" name="Mobile_Number" placeholder="Mobile Number">
                            </div>
                            <div class="col-md-6 mb-3 ">
                                <input type="text" class="form-control" id="Email" placeholder="Email" name="email">
                            </div>
                        </div>

                        <div class="row ">

                            <div class="col-md-6 mb-3 ">
                                <select class="form-select form-control" aria-label="Default select example">
                                    <option selected disabled>Thana name</option>
                                    <option value="">Thana name 1</option>
                                    <option value="">Thana name 2</option>
                                    <option value="">Thana name 3</option>
                                    <option value="">Thana name 4</option>
                                    <option value="">Thana name 5</option>
                                  </select>
                            </div>

                            <div class="col-md-6 mb-3 ">
                                <select class="form-select form-control" aria-label="Default select example">
                                    <option selected disabled>Area name</option>
                                    <option value="">Area name 1</option>
                                    <option value="">Area name 2</option>
                                    <option value="">Area name 3</option>
                                    <option value="">Area name 4</option>
                                    <option value="">Area name 5</option>
                                  </select>
                            </div>
                        </div>


                        <div class="col-md-12 mb-3 ">
                            <textarea type="text" class="form-control" id="address" name="address" placeholder="Address"></textarea>
                        </div>

                        

                        <div class="col-md-12 mb-3 row ">
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" onClick="month_packeg()" value="Monthly Packeg" type="radio" name="packeg" id="month_packeg">
                                    <label class="form-check-label" onClick="month_packeg()" for="month_packeg">
                                        Monthly Package
                                    </label>
                                </div>
                            </div>
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

                        <div class="input-group col-md-6 mb-3">
                            <input type="map" readonly class="form-control" placeholder="Home Location (Select by Google Map)" aria-describedby="basic-addon2">

                            <a href="https://www.google.com/maps" target="_blank" class="input-group-text innet_input_btn" id="basic-addon2"><i class="fa fa-map-marker" aria-hidden="true"></i>
                            </a>
                        </div>

                        <div class="input-group col-md-6 mb-3">
                            <input type="date" class="form-control" placeholder="Creation Date" aria-describedby="basic-addon2">

                        </div>
                    </div>
                    <div id="loader" class="col-md-4 offset-md-4">
                        <img src="assets/img/loader.gif" height="100" alt="">
                    </div>

                    <button data-bs-toggle="modal" data-bs-target="#location" id="promotional_pkg_btn" type="button" class="btn btn-custom col-md-4 offset-md-4">Submit </button>
                    <button type="submit" id="regular_pkg_btn" class="btn btn-custom col-md-4 offset-md-4">Submit </button>
                </form>
            </div>
        </div>
    </section>


<?php include("inc/footer.php")?>