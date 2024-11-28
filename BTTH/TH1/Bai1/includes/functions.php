<?php
function getFlowers()
{
    return $_SESSION['flowers'] ?? [];
}

function addFlower($flower)
{
    $_SESSION['flowers'][] = $flower;
}

function updateFlower($index, $flower)
{
    $_SESSION['flowers'][$index] = $flower;
}

function deleteFlower($index)
{
    unset($_SESSION['flowers'][$index]);
    $_SESSION['flowers'] = array_values($_SESSION['flowers']); // Sắp xếp lại chỉ số
}
