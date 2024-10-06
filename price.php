<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculate Total</title>
</head>
<body>
    <form action="method.php" method="POST">
        <label>Quantity:</label>
        <input type="text" name="quantity" required><br>
        
        <input type="submit" value="Calculate Total">
    </form>

   
</body>
</html> <?php
    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Define item and price
        $item = "aludam";
        $price = 13;

        // Get the quantity from the form
        $quantity = $_POST["quantity"];

        // Check if quantity is a valid number
        if (is_numeric($quantity) && $quantity > 0) {
            // Calculate total
            $total = $quantity * $price;
            echo "Your total for $item is: \${$total}<br>";
        } else {
            echo "Please enter a valid quantity.";
        }
    }
    ?>