<?php
//associative array=an array made of key value pairs
//item=>price
$capitals=array("NEPAL"=>"kathmandu",
"india"=>"New delhi",
"Usa"=>"Washington D.C");
$capitals["china"]="beijing";
foreach($capitals as $key=>$value){
    echo "{$key}={$value} <br>";
}


?>