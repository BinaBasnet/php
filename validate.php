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

        <label for="age">age:</label><br>
        <input type="number" id="age" name="age" required><br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>

        <input type="submit" value="Login">
    </form>

</body>
</html><?php
if(isset($_POST["login"])){
    $username=filter_input(INPUT_POST,"username",FILTER_SANITIZE_SPECIAL_CHARS);
    $age=filter_input(INPUT_POST,"age",FILTER_SANITIZE_NUMBER_INT);
 $email=filter_input(INPUT_POST,"email",FILTER_SANITIZE_EMAIL);
echo "your name is{$username}<br>";
echo "email:{$email}<br>";
}?>