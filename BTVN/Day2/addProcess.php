<?php
session_start();

$name = htmlspecialchars(filter_input(INPUT_POST, 'name', FILTER_DEFAULT));
$price = htmlspecialchars(filter_input(INPUT_POST, 'price', FILTER_VALIDATE_INT));

if ($name && $price != false) {
    $newProduct = [
        'id' => ++$_SESSION['last_id'],
        'name' => $name,
        'price' => $price
    ];
    $_SESSION['products'][] = $newProduct;
}

header('Location: index.php');
exit();
