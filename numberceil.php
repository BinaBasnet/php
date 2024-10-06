<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="method.php" method="POST">
        <label>x:</label>
        <input type="number" name="x" required><br>
        
        <input type="submit" value="Total">
    </form>

</body>
</html>
<?php
$x=$_POST["x"];
$total=null;

$total=ceil($x);/*Rounds a number up to the nearest integer (always towards positive infinity).
Example: ceil(4.1) → 5*/
echo $total;
?>