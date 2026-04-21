<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="GET">
        Username:
        <input type="text" name="user"><br>
        Password:
        <input type="text" name="pass"><br>
        Agree to terms and conditions:
        <input type="checkbox" name="terms" value="Yes"><br>
        <button type="submit">Submit</button>

    </form>
</body>
</html>

<?php
if($_SERVER["REQUEST_METHOD"]==="GET"){
    $username=$_GET["user"];
    $password=$_GET["pass"];
    $terms=isset($_GET["terms"])?"Agreed":"Not Agreed";
}
echo"Thankyou for signing up, $username. You have $terms to the newsletter."


?>