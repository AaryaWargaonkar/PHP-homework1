<?php
$car_models = ["Toyota", "Honda", "Ford", "BMW", "Audi"];

echo "Car Models:<br>";
for ($i = 0; $i < count($car_models); $i++) {
    echo $car_models[$i] . "<br>";
}

$car_prices = [
    "Toyota" => 200000,
    "Audi" => 650000,
    "BMW" => 500000,
    "Honda" => 500000,

];

echo "<br>Car Prices:<br>";
foreach ($car_prices as $model => $price) {
    echo $model . " : $" . $price . "<br>";
}


array_push($car_models, "Honda");

array_pop($car_models);

$new_cars = ["Ford", "Maruti Suzuki"];
$merged = array_merge($car_models, $new_cars);

$sliced = array_slice($merged, 1, 3);

$keys = array_keys($car_prices);

echo "<br>Merged Array:<br>";
print_r($merged);

echo "<br>Sliced Array:<br>";
print_r($sliced);

echo "<br>Keys of Associative Array:<br>";
print_r($keys);
?>