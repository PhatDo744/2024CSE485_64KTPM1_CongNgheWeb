<?php
include '../models/FlowerModel.php';

$action = $_GET['action'] ?? '';

if ($action === 'create') {
    $flower = [
        'name' => $_POST['name'],
        'description' => $_POST['description'],
        'image' => $_POST['image']
    ];
    addFlower($flower['name'], $flower['description'], $flower['image']);
    header('Location: ../views/admin_view.php');
    exit;
}

if ($action === 'update') {
    $id = $_POST['id'];
    $flower = [
        'name' => $_POST['name'],
        'description' => $_POST['description'],
        'image' => $_POST['image']
    ];
    updateFlower($id, $flower);
    header('Location: ../views/admin_view.php');
    exit;
}

if ($action === 'delete') {
    $id = $_GET['id'];
    deleteFlower($id);
    header('Location: ../views/admin_view.php');
    exit;
}

if ($action === 'login') {
    $_SESSION['role'] = 'admin';
    header('Location: ../views/admin_view.php');
    exit;
}

if ($action === 'logout') {
    $_SESSION['role'] = 'guest';
    header('Location: ../index.php');
    exit;
}
