<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý hoa</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light shadow">
        <div class="container">
            <a href="../index.php" class="navbar-brand">Quản lý hoa</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <?php if ($_SESSION['role'] === 'admin'): ?>
                        <li class="nav-item"><a class="nav-link" href="../views/admin_view.php">Quản trị</a></li>
                        <li class="nav-item"><a class="nav-link" href="../controllers/FlowerController.php?action=logout">Đăng xuất</a></li>
                    <?php else: ?>
                        <li class="nav-item"><a class="nav-link" href="../controllers/FlowerController.php?action=login">Đăng nhập</a></li>
                    <?php endif ?>
                </ul>
            </div>
        </div>
    </nav>