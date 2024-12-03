<?php
// Define the function to calculate the area of a rectangle
function calculateArea($width, $height) {
    return $width * $height;
}

// Call the function with sample values
$width = 4; // You can change these values
$height = 2;
$area = calculateArea($width, $height);

// Display the result in bold
echo "<b>The area of a rectangle with a width of $width and $height is $area.</b>";
?>
