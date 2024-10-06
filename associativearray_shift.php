<?php
$nepalidress=array("Chettri"=>"chettridress",
"Newar"=>"newaridress",
"rai"=>"raidress"
);
array_shift($nepalidress);
foreach($nepalidress as $key=>$$value){
    echo "{key}=>{value} <br>";
}