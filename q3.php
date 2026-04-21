<!DOCTYPE html>
<html>
<body>

<form method="post">
    Name: <input type="text" name="name"><br><br>
    Phone: <input type="tel" name="phone"><br><br>

    Car:
    <select name="car">
        <option>Toyota</option>
        <option>Ford</option>
        <option>Tesla</option>
    </select><br><br>

    <button type="submit">Submit</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $car = $_POST["car"];

    echo "Hello, $name. Your phone number is $phone and your preferred car brand is $car.";
}
?>

</body>
</html>