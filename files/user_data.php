<?php
   
     $name = $_POST['name']."\n";
    $email = $_POST['email']."\n";
    $country = $_POST['country']."\n";
    $d_o_b = $_POST['d_o_b']."\n";
    $gender = $_POST['gender']."\n";
    $data = [$name, $email, $country, $d_o_b, $gender];
    
    foreach($data as $value){
      print_r("$value <br>");
    }
   
$file = "userdata.csv";
$handle = fopen("userdata.csv", "w");

fputcsv($handle, $data);

fclose($handle);


?>