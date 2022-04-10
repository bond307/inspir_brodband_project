<?php 
    
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $CurrentDate = date("Y-m-d");

    //Fullname values
    if(isset($_POST['FullName']) && !empty($_POST['FullName'])){
        $FullName = $_POST['FullName'];
    }


    //Email
    if(isset($_POST['Email']) && !empty($_POST['Email'])){
        if (!filter_var($_POST['Email'], FILTER_VALIDATE_EMAIL)) {
           echo '<i class="fa fa-exclamation-triangle"></i> Invalid email format'.'<br>';
          }else{
              $email = $_POST['Email'];
          }
    }

    //MobileNumber number is required
    if(isset($_POST['MobileNumber']) && !empty($_POST['MobileNumber'])){
        $MobileNumber = $_POST['MobileNumber'];
    }
    //ALTMobileNumber
    if(isset($_POST['AlTMobileNumber']) && !empty($_POST['AlTMobileNumber'])){
        $ALTMobileNumber = $_POST['AlTMobileNumber'];
    }

    //Address
    if(isset($_POST['Address']) && !empty($_POST['Address'])){
        $Address = $_POST['Address'];
    }

    //ActivationDate
    if(isset($_POST['ActivationDate']) && !empty($_POST['ActivationDate'])){
        if($_POST['ActivationDate'] > $CurrentDate){
            $ActivationDate = $_POST['ActivationDate'];
        }else{
             '<i class="fa fa-exclamation-triangle"></i> Activation Date Invalid'."<br>";
        }
        
    }

   

    //PackageType
    if(isset($_POST['PackageType']) && !empty($_POST['PackageType'])){
         $PackageType = $_POST['PackageType'];
        if($PackageType == 'Monthly Packeg'){
            if(isset($_POST['MonthlyPackagePlan']) && !empty($_POST['MonthlyPackagePlan'])){
                 $PackagePlan = $_POST['MonthlyPackagePlan'];
            }
        }else if($PackageType =="Yearly Packeg"){
             $PackagePlan = $_POST["YearllyPackagePlan"]; 
        }
    }

   


    //send data
    $url = "https://admin.inspire.com.bd/api/leads";
    $ch = curl_init();

    $data_array = array(
        "partner_id" => "1",//fixed
        "branch_id" => "1",//fixed
        "connection_type" => "1",//fixed
        "customer_name" => "$FullName",
        "mobile" => "$MobileNumber",
        "email" => "$email",
        "address" => "$Address",
        "billing_address" => "$Address",
        "lead_source" => "1",//fixed
        "notes" => "Regular Package, Name:  $PackageType , Package Plan: $PackagePlan, Connection Charge: 0TK, Diposit: 0TK, Connection Date: $ActivationDate, Advance Payment from payment gateway: trx id",
        "referrar_customer_id" => "1",//fixed,
        "lead_description" => "Blank",//fixed
        "lng" => "working",
        "lat" => "working",
        "alternate_mobile" => " $MobileNumber ",
        "alternate_email" => "Blank",//fixed
        "colony_id" => "Blank",//fixed
        "area_id" => "Blank",//fixed
        "building_id" => "Blank",//fixed
        "floor_id" => "Blank",//fixed
    );

    $data = http_build_query($data_array);

    curl_setopt ($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);

    $resp = curl_exec($ch);

    if(curl_error($ch)){
        echo curl_error($ch);
    }else{
        echo $decode = json_decode($resp);
    }

    curl_close($ch);




}else{
    echo "dsaf";
}