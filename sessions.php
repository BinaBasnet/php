<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
</head>
<body>
    <form action="login.php" method="POST">
        <h2>Login</h2>
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br>

        <input type="submit" value="Login">
    </form>
</body>
</html>
<?php
if(isset($_POST["login"])){
    
    if(isset($_POST["username"])&&isset($_POST["password"])){
        $_SESSION["username"]=$_POST["username"];
        $_SESSION["password"]=$_POST["password"];
        header("location:index.php");

    }
    else{
        echo"missing username or password";
    }
}
?>