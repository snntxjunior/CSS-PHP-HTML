<?php

$host = "localhost";
$bd = "shop";
$user = "root";
$password = "";

try {
    $conn = new PDO("mysql:host={$host}; dbname={$bd}", $user, $password);
    //echo "Conexão Ok";
} catch (PDOException $e) {
    //echo "Ocorreu um erro: ". $e;
    echo "Servidor instável entre novamente mais tarde";
}

?>