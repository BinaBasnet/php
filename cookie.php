<?php
//cookie=information about a user stored in a user's web browser
//targeted advertisemnts,browsing preferneces and other senstive date
setcookie("fav_movie","parasite",time() + (86400*2),"/");
setcookie("fav_book","scripting",time() + (86400*3),"/");
 foreach($_COOKIE as $key=>$value){
    echo "{$key}={$value}<br>";
 }
 if(isset($_COOKIE["fav_movie"])){
    echo "your movie is {$fav_movie}";
 }else
 {
    echo"i dont know your fAV MOVIE";
 }
 
 ?>