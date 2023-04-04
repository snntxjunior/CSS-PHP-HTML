<?php

$sorteio = rand(0,5);

echo "$sorteio <br>";

switch ($sorteio) {
    case '0':
        echo "Perdeu A vez!";
        break;
    case '1':
        echo "Avance 1 Casa!";
        break;
    case '2':
        echo "Avance 2 Casa!";
        break;
    case '3':
        echo "Avance 2 Casa e jogue novamente!";
        break;
    case '4':
        echo "Avance 1 Casa e os adversario voltam 2 casas!";
        break;
    default:
        echo "Volte 5 Casas!";
        break;
}

?>