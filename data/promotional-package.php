<?php 
sleep(3);
    
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $CurrentDate = date("Y-m-d");
    $promo_code = "1000"; 

    //Fullname values
    if(isset($_POST['FullName']) && !empty($_POST['FullName'])){
        $FullName = $_POST['FullName'];
    }else{
       $error = '<i class="fa fa-exclamation-triangle"></i> Name is required'.'<br>';
    }


    //Email
    if(isset($_POST['Email']) && !empty($_POST['Email'])){
        if (!filter_var($_POST['Email'], FILTER_VALIDATE_EMAIL)) {
           echo '<i class="fa fa-exclamation-triangle"></i> Invalid email format'.'<br>';
          }else{
              $email = $_POST['Email'];
          }
    }else{
        echo '<i class="fa fa-exclamation-triangle"></i> Email is required'.'<br>';
    }

    //MobileNumber number is required
    if(isset($_POST['MobileNumber']) && !empty($_POST['MobileNumber'])){
        $MobileNumber = $_POST['MobileNumber'];
    }else{
        echo '<i class="fa fa-exclamation-triangle"></i> Mobile number is required'.'<br>';
    }
    //ALTMobileNumber
    if(isset($_POST['AlTMobileNumber']) && !empty($_POST['AlTMobileNumber'])){
        $ALTMobileNumber = $_POST['AlTMobileNumber'];
    }else {
        echo '<i class="fa fa-exclamation-triangle"></i> ALT Number is required'.'<br>';
    }

    //Address
    if(isset($_POST['Address']) && !empty($_POST['Address'])){
        $Address = $_POST['Address'];
    }else {
        echo '<i class="fa fa-exclamation-triangle"></i> Address is required'.'<br>';
    }

    //ActivationDate
    if(isset($_POST['ActivationDate']) && !empty($_POST['ActivationDate'])){
        if($_POST['ActivationDate'] > $CurrentDate){
            $ActivationDate = $_POST['ActivationDate'];
        }else{
            echo '<i class="fa fa-exclamation-triangle"></i> Activation Date Invalid'."<br>";
        }
        
    }else{
        echo '<i class="fa fa-exclamation-triangle"></i> Activation Date is required'.'<br>';
    }

    //PromoCode
    if(isset($_POST['PromoCode']) && !empty($_POST['PromoCode'])){
        if($_POST['PromoCode'] == $promo_code){
            $PromoCode = $_POST['PromoCode'];
        }else{
            echo '<i class="fa fa-exclamation-triangle"></i> Promo Code is Invalid'."<br>";
        }
    }else{
        echo '<i class="fa fa-exclamation-triangle"></i> Promo Code is Requered'."<br>";
    }



}else{
    echo "dsaf";
}

?>