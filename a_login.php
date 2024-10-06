<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
</head>
<body>

    <h2>Login</h2>
    <form action="login.php" method="POST">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" required><br><br>

        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br><br>

        <input type="submit" value="Login">
    </form>

</body>
</html>
<?php
if(isset($_POST["login"])){
    $username=$_POST["username"];
    $password=$_POST["Password"];
    if(empty($username)){
       echo" username is missing";

    }elseif(empty($password)){
        echo "empty password";
    }
    else{
        echo "you are loged in";
        
    }
}
?>

