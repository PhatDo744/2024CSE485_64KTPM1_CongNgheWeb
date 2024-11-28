<?php
function getFlowers()
{
    global $pdo;
    $stmt = $pdo->query("select * from flowers");
    return $stmt->fetchAll();
}

function addFlower($name, $description, $image)
{
    global $pdo;
    $sql = "insert into flowers (name,description,image)
    values (:name, :description, :image)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['name' => $name, 'description' => $description, 'image' => $image]);
}

function updateFlower($id, $flower)
{
    global $pdo;
    $sql = "UPDATE flowers SET name = :name, description = :description, image = :image WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['id' => $id, 'name' => $flower['name'], 'description' => $flower['description'], 'image' => $flower['image']]);
}

function deleteFlower($id)
{
    global $pdo;
    $sql = "DELETE FROM flowers WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['id' => $id]);
}
