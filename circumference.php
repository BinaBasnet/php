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
$circumference=null;
$circumference=2*pi()*$radius;
$circumference=round($circumference,2);

echo " circumference:{$circumference}cm<br>";

?>