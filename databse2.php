<?php
include("database.php");
$sql="INSERT INTO USERS(user,password)
Values('binadon','binadon1')";
mysqli_query($conn,$sql);
mysqli_close($conn);

?>