<?php 
/*Arithmetic, Relational operators, Logical opeartots, increment/decrement*/

//arithmetic + - * / %

$num1 = 7;
$num2=2;
$addition = $num1+$num2;
//echo $addition;
echo "Addiotion of " . $num1 . " and " . $num2 . " is " . $addition;

echo "<br>";

$subtraction = $num1-$num2;
echo $subtraction;
echo "<br>";

$multipky = $num1 * $num2;
echo $multipky;
echo "<br>";

$divide = $num1/$num2;
echo $divide;
echo "<br>";

$modulus = $num1%$num2;
echo $modulus;
echo "<br>";

//relational operators dor comparison

//< > <= >= == === !=

echo(3 == 3);
echo "<br>";

echo 3>=3;
echo "<br>";

//increment decrement
//++, -- (pre ++1, --1) (post 1++, 1--)
$a = 2;
//echo ++$a;
echo $a++;
echo "<br>". $a;
echo "<br>".--$a;


?>