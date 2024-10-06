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
        <input type="text" name="x" required><br>
        
        <input type="submit" value="Total">
    </form>

</body>
</html>
<?php
$x=$_POST["x"];
$total=null;

$total=round($x,2);/*Rounds a number to the nearest integer or specified precision.
Example: round(4.568, 2) → 4.57*/
echo $total
?>