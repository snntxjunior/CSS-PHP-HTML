<?php

$numero1 = $_POST['numero1'];
$numero2 = $_POST['numero2'];
$numero3 = $_POST['numero3'];

$maior = $numero1;
$menor = $numero1;

if ($numero2 > $maior) {
	$maior = $numero2;
}
if ($numero2 < $menor) {
	$menor = $numero2;
}

if ($numero3 > $maior) {
	$maior = $numero3;
}
if ($numero3 < $menor) {
	$menor = $numero3;
}

echo "O maior número é: $maior <br>";
echo "O menor número é: $menor";

?>