<?php
$nepalidress=array("Chettri"=>"chettridress",
"Newar"=>"newaridress",
"rai"=>"raidress"
);

$values=array_values($nepalidress);//TO DISPLAY KEY OF AN ASSOCIATIVE ARRAY
// I.E CHETTRI,NEWAR,RAI

foreach($values as $value){
    echo "{key}=>{value} <br>";
}
echo count($nepalidress);
?>