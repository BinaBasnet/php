<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <label>Enter Country</label>
    <input type="text"  name="country">
    <input type="submit">
    
</body>
</html>
<?php
//associative array=an array made of key value pairs
//item=>price
$capitals=array("NEPAL"=>"kathmandu",
"india"=>"New delhi",
"Usa"=>"Washington D.C");
$capital=$capitals[$_post["country"]];
echo $capital;



?>