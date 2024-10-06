<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="method.php" method="POST">
        <label>enter number up to which you want to count</label>
        <input type="number" name="counter" required><br>
        
        <input type="submit" value="Total">
    </form>

</body>
<?php
$counter=$_post["counter"];
for($i=1;$i<=$counter;$i++){
    echo $i."<br>";
}
?>