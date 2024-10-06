<?php
$nepalidress=array("Chettri"=>"chettridress",
"Newar"=>"newaridress",
"rai"=>"raidress"
);

$keys=array_keys($nepalidress);//TO DISPLAY KEY OF AN ASSOCIATIVE ARRAY
// I.E CHETTRI,NEWAR,RAI

foreach($keys as $key){
    echo "{key}=>{value} <br>";
}