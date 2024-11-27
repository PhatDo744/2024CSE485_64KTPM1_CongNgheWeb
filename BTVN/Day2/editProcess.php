<?php
session_start();

if (isset($_POST['id'], $_POST['name'], $_POST['price']) && isset($_SESSION['products'])) {
    foreach ($_SESSION['products'] as &$product) {
        if ($product['id'] == $_POST['id']) {
            $product['name'] = $_POST['name'];
            $product['price'] = $_POST['price'];
            break;
        }
    }
}

header('Location: index.php');
exit();
