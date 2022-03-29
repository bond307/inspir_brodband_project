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
        echo "Package Type: " . $package_type = $_POST["package_type"] ."<br>";
    }else{
        echo "Package Type: " .  $package_type = $_POST["package_type"]."<br>";
    }

   echo "Full Name: " . $full_name = $_POST["full_name"]."<br>";

    echo "Phone Number: " . $Mobile_Number = $_POST["Mobile_Number"]."<br>";

    echo "Email: " .$email = $_POST["email"]."<br>";

    echo "Thana: " .$thana = $_POST["thana"]."<br>";

    echo "Arean: " . $area_name = $_POST["area_name"]."<br>";

    echo "Address: " . $address = $_POST["address"]."<br>"; 

    $promotional_package = $_POST["promotional_package"];
  $package_paln = $_POST["package_paln"];

  if(isset($promotional_package )){
    echo "Promotional Package List: " . $promotional_package ."<br>";
  }
  
  if(isset($package_paln )){
    echo "Package Plane List: " . $package_paln ."<br>";
  }
 
    echo $packeg = $_POST["packeg"]."<br>";
 
    //monthly or yearlly package selction
    if($_POST["packeg"] =="Monthly Packeg"){
      echo "Monthly Plana: " . $monthly_packege_list = $_POST["monthly_packege_list"]."<br>";
    }else if($_POST["packeg"] =="Yearly Packeg"){
      echo "Yearlly Plan: ".   $yearlly_packege_list = $_POST["yearlly_packege_list"]."<br>";
    }

    

    echo "Date:" .$date = $_POST["date"]."<br>";






}else{
    echo "error";
}




?>