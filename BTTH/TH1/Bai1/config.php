<?php
session_start();
include("includes/flowers.php");
if (!isset($_SESSION['flowers'])) {
    $_SESSION['flowers'] = $flowers;
}
if (!isset($_SESSION['role'])) {
    $_SESSION['role'] = 'guest';
} else if (isset($_GET['role'])) {
    $_SESSION['role'] = $_GET['role'];
}
