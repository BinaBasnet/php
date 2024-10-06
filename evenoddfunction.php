<?php
function check($number) {
   
    if ($number % 2 == 0) {
        return "$number is Even.";
    } else {
        return "$number is Odd.";
    }
}
$number = 30; 
$result = check($number);
echo $result;
?>
