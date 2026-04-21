<?php
$model = "Hyundai";
$car1 = 'This is a $model car';
$car2 = "This is a $model car";

echo "Single quotes: $car1 <br>";
echo "Double quotes: $car2 <br><br>";


$car = "Tesla";
$price = 500000;

echo "Concatenation: " . $car . " costs $" . $price . "<br><br>";


$desc = "This car is a 6 seater .";

$pos = strpos($desc, "is");

echo "Position of 'is': " . $pos . "<br><br>";


$newDesc = str_replace("6", "4", $desc);

echo "After replace: " . $newDesc . "<br><br>";


$text = "   Tesla is expensive CAR   ";

echo "Original: '$text'<br>";

echo "Length: " . strlen($text) . "<br>";

echo "Lowercase: " . strtolower($text) . "<br>";

echo "Uppercase: " . strtoupper($text) . "<br>";

echo "Trimmed: '" . trim($text) . "'<br>";

echo "Substring (0-4): " . substr($text, 0, 4) . "<br>";

?>