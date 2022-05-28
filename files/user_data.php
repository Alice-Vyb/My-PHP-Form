<?php
   
     $name = $_POST['name'];
    $email = $_POST['email'];
    $country = $_POST['country'];
    $d_o_b = $_POST['d_o_b'];
    $gender = $_POST['gender'];
    $data = [$name, $email, $country, $d_o_b, $gender];
    
    foreach($data as $value){
      print_r("$value <br>");
    }
   
$file = "userdata.csv";
$handle = fopen("userdata.csv", "w");

fputcsv($handle, $data);

fclose($handle);


?>