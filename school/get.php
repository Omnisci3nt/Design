<?php
$fname = $_GET['fname'];
$lname = $_GET['lname'];
$age = $_GET['age'];
$adres = $_GET['adres'];
$email = $_GET['email'];

echo $fname . "<br>";
echo $lname . "<br>";
echo $age . "<br>";
echo $adres . "<br>";
echo $email . "<br>";
?>

<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<title>School</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="">
<body>
<form action="#" method="get">
    <label for="fname">Voornaam:</label>
    <input type="text" id="fname" name="fname"><br><br>
    <label for="lname">Achternaam:</label>
    <input type="text" id="lname" name="lname"><br><br>
    <label for="age">Leeftijd:</label>
    <input type="text" id="age" name="age"><br><br>
    <label for="adres">Adres:</label>
    <input type="text" id="adres" name="adres"><br><br>
    <label for="email">Email:</label>
    <input type="text" id="email" name="email"><br><br>
    <input type="submit" value="Submit">
</form>
</body>
</html>