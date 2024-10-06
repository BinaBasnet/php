<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity Selection</title>
</head>
<body>

    <h2>Select Your Preferred Activity:</h2>
    <form action="activity.php" method="POST">
        <input type="radio" name="activity" value="Bungee Jumping"> Bungee Jumping<br>
        <input type="radio" name="activity" value="Climbing"> Climbing<br><br>
        <input type="radio" name="activity" value="paragliding"> paragliding<br><br>

        <input type="submit" name="submit" value="Submit">
    </form>

</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if (isset($_POST['activity'])) {
        $selected_adventure = $_POST['adventure'];
        echo "You have selected: ";
    } else {
        echo "Please select an adventure.";
    }
}
?>
