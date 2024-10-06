<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="method.php" method="POST">
        <label>radius:</label>
        <input type="number" name="radius" required><br>
        
        <input type="submit" value="Calculate">
    </form>

</body>
</html>
<?php
$radius=$_POST["radius"];
$area=null;
$area=pi()*pow($radius,2);
$area=round($area,2);
echo " area of circle:{$area}cm^2<br>";

?>