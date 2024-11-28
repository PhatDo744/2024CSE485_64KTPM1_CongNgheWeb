<?php
include 'config.php';
include 'includes/functions.php';
include 'includes/flowers.php';

foreach ($flowers as $flower) {
    addFlower($flower['name'], $flower['description'], $flower['image']);
}

echo "Data migrated successfully.";
