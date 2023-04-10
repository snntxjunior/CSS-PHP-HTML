<?php

$number1 = 276;
$number2 = 89;
$number3 = 432;

if ($number1 > $number2) { $temp = $number1; $number1 = $number2; $number2 = $temp; }
if ($number2 > $number3) { $temp = $number2; $number2 = $number3; $number3 = $temp; }
if ($number1 > $number2) { $temp = $number1; $number1 = $number2; $number2 = $temp; }

echo "Os números em ordem crescente são: $number1, $number2, $number3.";
?>