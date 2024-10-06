<?php
//transformimg sensitive data([password])into letter ,number,or symbol via mathematical process
$password="binabina678";
$hash=password_hash($password,PASSWORD_DEFAULT);
if(password_Verify("binabina678",$hash))
 {
    echo"you are logged in";

 }
 else{
    echo"incorrect password";
 }
?>