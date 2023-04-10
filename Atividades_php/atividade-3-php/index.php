<?php

$number1 = 9;
$number2 = 8;

$media = ($number1 + $number2) /2;

if ($media >= 9.0 && $media <= 10.0) {
    $grading = "A";
    $situacao_final = "Aprovado";
} elseif ($media >= 7.5 && $media <= 9.0) {
    $grading = "B";
    $situacao_final = "Aprovado";
} elseif ($media >= 6.0 && $media <= 7.5) {
    $grading = "C";
    $situacao_final = "Aprovado";
} elseif ($media >= 4.0 && $media <= 6.0) {
    $grading = "D";
    $situacao_final = "Reprovado";
} else {
    $grading = "E";
    $situacao_final = "Reprovado";
}

echo "Notas: $number1 / $number2";
echo "<br>";

echo "Média: $media";
echo "<br>";

echo "Classificação: $grading";
echo "<br>";

echo "Situação Final: $situacao_final";

?>