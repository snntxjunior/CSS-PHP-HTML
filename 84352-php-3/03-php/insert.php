<?php

include "conn.php";

$name = filter_input(INPUT_POST, 'name');
$description = filter_input(INPUT_POST, 'description');
$price = filter_input(INPUT_POST, 'price');

//echo "$name - $description - $price";

//preparar
$stmt = $conn->prepare("INSERT INTO product (name, description, price) VALUES (:name, :description, :price)");

//trocar
$stmt->bindvalue(':name', $name);
$stmt->bindvalue(':description', $description);
$stmt->bindvalue(':price', $price);

//executar
$stmt->execute();

header('Location:cadastrar.php');