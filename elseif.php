<?php
$age=70;
if($age<=10){
    echo "you are child";
}
elseif($age==0){
    echo "you are just born";

}
elseif($age<20 && $age>10){
    echo"you are an teenager";
}
elseif($age>20 && $age<50){
    echo "you are an adult";

}else{
    echo"you are old man";

}
?>