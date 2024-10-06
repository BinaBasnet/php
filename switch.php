<?php
$grade="F";
switch($grade){
    case "A":
        echo"excellent";
        break;
    case"B":
            echo"verygood";
    break;
    case "C":
        echo"good";
        break;
    case"D":
            echo"need improvement";
    break;
    case "E":
        echo"very bad";
        break;
    case"F":
            echo"failed";
    break;
       default:
       echo"{$grade}not valid";
       
       
}

?>