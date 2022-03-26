<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
echo "submited data";
}else{
    echo "error";
}


$url = "https://admin.inspire.com.bd/api/leads";

$ch = curl_init();

curl_setopt ($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$resp = curl_exec($ch);

if($e = curl_error($ch)){
    echo $e;
}else{
    echo json_decode($resp);
}

?>