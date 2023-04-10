
<?php

$nome = $_POST["nome"];
$peso = $_POST["peso"];
$altura = $_POST["altura"];

$calculo = $peso / ($altura * $altura);


if ($calculo < 18.5) {
	echo "<p>Classificação: Magreza</p>";
} elseif ($calculo < 25) {
	echo "<p>Classificação: Normal</p>";
} elseif ($calculo < 30) {
	echo "<p>Classificação: Sobrepeso</p>";
} elseif ($calculo < 40) {
	echo "<p>Classificação: Obesidade</p>";
} else {
	echo "<p>Classificação: Obesidade grave</p>";
}

echo "Nome: $nome";
echo "<br>";

echo "Peso: $peso / Altura: $altura";
echo "<br>";
?>