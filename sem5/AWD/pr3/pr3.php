<?php
$num1 = 60;
$num2 = 35;

function add($a,$b){
    return $a + $b;
}

function sub($a,$b){
    return $a - $b;
}

function mul($a,$b){
    return $a * $b;
}

function div($a,$b){
    return $a / $b;
}

echo "Addition of $num1 + $num2 = " .add($num1,$num2)."<br>";
echo "Subtraction of $num1 - $num2 = " .sub($num1,$num2)."<br>";
echo "Multiplication of $num1 * $num2 = " .mul($num1,$num2)."<br>";
echo "Division of $num1 / $num2 = " .div($num1,$num2)."<br>";


?>
