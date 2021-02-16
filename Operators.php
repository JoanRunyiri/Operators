<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Operators</title>
</head>
<body>
<?php
//Arithmetic operators
$a=15;
$b=4;
echo 'These are arithmetic operators';
echo $a+$b;//This is addition
echo '<br>';
echo $a-$b;//This is subtraction
echo '<br>';
echo $a*$b;//This is multiplication
echo '<br>';
echo $a/$b;// This is division
echo '<br>';
echo $a%$b;//This is modulus
echo '<br>';


echo 'These next are assignment operators';
echo '<br>';
$c=18;
echo $c;//Equals operator
echo '<br>';
$d=10;
$d +=10;
echo $d;// This is addition assignment operator
echo '<br>';


echo 'This is comparison operator';
echo '<br>';
$e=30;
$f='Joan';
var_dump($e==$f);// This is equals operator
echo '<br>';

$g=15;
$h=15;
var_dump($g===$h);//This is identical operator
echo '<br>';

$i=20;
$j=25;
var_dump($i>$j);//greater than operator
echo '<br>';
var_dump($i<$j);//less than operator
echo '<br>';

echo 'Increment/ Decrement Operator';
echo '<br>';
$z=105;
$v=23;
echo ++$v;//This is pre increment
echo '<br>';
echo $v++;//This is post increment
echo '<br>';
echo --$z;//This is pre decrement
echo '<br>';
echo $z++;//This is post increment

?>
</body>
</html>
