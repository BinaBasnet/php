<?php
$string = "bina";

$stringlength = strlen($string); // Get the length of the string
echo "Length of string: $stringlength<br>";

$string_uppercase = strtoupper($string); // Convert to uppercase
echo "Uppercase: $string_uppercase<br>";

$string_lowercase = strtolower($string); // Convert to lowercase
echo "Lowercase: $string_lowercase<br>";

$string_reversed = strrev($string); // Reverse the string
echo "Reversed: $string_reversed<br>";

$string_position = strpos($string, "in"); // Find position of 'in'
echo "Position of 'in': $string_position<br>";

$string_replaced = str_replace("b", "B", $string); // Replace 'b' with 'B'
echo "Replaced 'b' with 'B': $string_replaced<br>";

$string_substring = substr($string, 1, 2); // Extract substring
echo "Substring (index 1, length 2): $string_substring<br>";

$string_contains = strstr($string, "na") ? "Yes" : "No"; // Check if contains 'na'
echo "Contains 'na': $string_contains<br>";

$trimmedString = trim("   bina   "); // Trim whitespace
echo "Trimmed String: '$trimmedString'<br>";

$string_repeat = str_repeat($string, 3); // Repeat the string
echo "Repeated String: $string_repeat<br>";
?>
