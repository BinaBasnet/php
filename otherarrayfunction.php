<?php
//array="variable  which could store more than one variable
$foods=array("pizza","burger","momo","chatpate");
//array_shift($foods);//remove first element in an array
array_reverse($foods);
foreach($foods as $food){
    echo $food."<br>";
}
echo count($foods);//for counting the no of elemnt in an array

?>