<?php
session_start();

$deleteId = filter_input(INPUT_GET, 'delete', FILTER_VALIDATE_INT);

if ($deleteId) {
    $_SESSION['products'] = array_filter($_SESSION['products'], function ($product) use ($deleteId) {
        return $product['id'] != $deleteId;
    });

    $_SESSION['products'] = array_values($_SESSION['products']);
}

header('Location: index.php');
exit();
