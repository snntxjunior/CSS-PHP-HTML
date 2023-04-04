<?php

$dayWeek =  date("w");

echo $dayWeek. "<br>";

switch ($dayWeek) {
    case '0':
        echo "Hoje é Domingo!";
        break;
    case '1':
        echo "Hoje é Segunda!";
        break;
    case '2':
        echo "Hoje é Terça!";
        break;
    case '3':
        echo "Hoje é Quarta!";
        break;
    case '4':
        echo "Hoje é Quinta!";
        break;
    case '5':
        echo "Hoje é Sexta!";
        break;
    
    default:
       echo "Hoje é Sábado!";
        break;
}

?>