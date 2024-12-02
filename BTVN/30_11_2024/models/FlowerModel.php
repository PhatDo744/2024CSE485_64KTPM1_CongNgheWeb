<?php
include '../config.php';

function getFlowers()
{
    global $pdo;
    $stmt = $pdo->query("SELECT * FROM flowers");
    return $stmt->fetchAll();
}

function addFlower($name, $description, $image)
{
    global $pdo;
    $stmt = $pdo->prepare("INSERT INTO flowers (name, description, image) VALUES (?, ?, ?)");
    $stmt->execute([$name, $description, $image]);
}

function updateFlower($id, $flower)
{
    global $pdo;
    $stmt = $pdo->prepare("UPDATE flowers SET name = ?, description = ?, image = ? WHERE id = ?");
    $stmt->execute([$flower['name'], $flower['description'], $flower['image'], $id]);
}

function deleteFlower($id)
{
    global $pdo;
    $stmt = $pdo->prepare("DELETE FROM flowers WHERE id = ?");
    $stmt->execute([$id]);
}
