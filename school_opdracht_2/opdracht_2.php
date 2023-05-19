<?php
$uname = $_POST['uname'];
$password = $_POST['password'];

echo $uname . "<br>";
echo $password . "<br>";

// 1
/* $variabele1 = 10;
$variabele2 = 10;

if($variabele1 == $variabele2) {
    echo "De twee waarden zijn gelijk";
} else {
    echo "De twee waarden zijn ongelijk";
} */

// 2
/* $variabele1 = 10;
$variabele2 = 12;

if($variabele1 != $variabele2) {
    echo "De twee waarden zijn ongelijk";
} */

// 3
$variabele1 = 10;
$variabele2 = 10;

if ($variabele1 == $variabele2) {
    echo "De twee waarden zijn gelijk";
} else {
    echo "De twee waarden zijn ongelijk";
}
?>

<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<title>School</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="">
<body>
<form action="#" method="post">
    <label for="uname">Username:</label>
    <input type="text" id="uname" name="uname"><br><br>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password"><br><br>
    <input type="submit" value="Submit">
</form>
</body>
</html>