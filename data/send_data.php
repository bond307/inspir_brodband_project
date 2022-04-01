<?php
 $url = "https://admin.inspire.com.bd/api/leads";
$ch = curl_init();

$data_array = array(
    "name" => "Nayon",
    "age" => "34",
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




if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    
    if($_POST["package_type"] == "Promotional"){

         $package_type = $_POST["package_type"];
         $full_name = $_POST["full_name"];
         $Mobile_Number = $_POST["Mobile_Number"];
         $email = $_POST["email"];
         $promo_package_thana = $_POST["promo_package_thana"];
         $alt_mobile_number = $_POST["alt_mobile_number"];
         $address = $_POST["address"]; 
         $package_paln = $_POST["package_paln"];
         $home_location = $_POST["home_location"];
         $promo_package_plan = $_POST["promo_package_plan"];
         $activation_Date = $_POST["activation_Date"];
         
    }

    if($_POST["package_type"] == "Promotional"){

      $package_type = $_POST["package_type"];
      $full_name = $_POST["full_name"];
      $Mobile_Number = $_POST["Mobile_Number"];
      $email = $_POST["email"];
      $regular_package_thana = $_POST["regular_package_thana"];
      $alt_mobile_number = $_POST["alt_mobile_number"];
      $address = $_POST["address"]; 
      $m_y_package = $_POST["packeg"]; 
       if($_POST["packeg"] =="Monthly Packeg"){
         $monthly_packege_list = $_POST["monthly_packege_list"];
       }else if($_POST["packeg"] =="Yearly Packeg"){
         $yearlly_packege_list = $_POST["yearlly_packege_list"];
       }
      $home_location = $_POST["home_location"];
      $activation_Date = $_POST["activation_Date"];
      
    }

}else{
    echo "error";
}




?>