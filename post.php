<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="method.php" method="POST">
        <label>username</label>
        <input type="text" name="username"><br>
        <label>password</label>
        <input type="text" name="password"><br>
        <input type="submit" value="login">

    
</body>
</html>
<?php
 /*$_POST= superglobal arrays that
 allow you to collect data sent through HTML forms or URLs
 $_Get  is not secure than $_post

 $post =no data limit, cannotbookmark,cannot be cached,better for submiting creditianls

 */
echo "{$_POST["username"]}<br>";
echo "{$_POST["password"]}<br>";
 

?>