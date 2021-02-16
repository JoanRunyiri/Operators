<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Numbers</title>
</head>
<body>
<?php
$x=25509;
var_dump(is_float($x));
echo '<br>';
var_dump(is_integer($x));
echo '<br>';
$y=435.78;
var_dump(is_integer($y));
echo '<br>';
var_dump(is_float($y));
echo '<br>';
$z=1e6789;
var_dump($z);
echo "<br>";

$b=45;
var_dump($b);
echo '<br>';
$a='Joan';
var_dump($a);



?>

</body>
</html>
