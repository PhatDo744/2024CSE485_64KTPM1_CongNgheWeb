<?php
session_start();

$defaultProducts = [
    ['id' => 1, 'name' => 'Sản phẩm 1', 'price' => 1000],
    ['id' => 2, 'name' => 'Sản phẩm 2', 'price' => 2000],
    ['id' => 3, 'name' => 'Sản phẩm 3', 'price' => 3000],
];

//ham khoi tao session
function initializeSession($defaultProducts)
{
    if (!isset($_SESSION['products'])) {
        $_SESSION['products'] = $defaultProducts;
        $_SESSION['last_id'] = count($_SESSION['products']);
    }
}

// check reload => quay ve mang cung ban dau
if (filter_input(INPUT_GET, 'reload', FILTER_VALIDATE_BOOLEAN)) {
    $_SESSION['products'] = $defaultProducts;
    $_SESSION['last_id'] = count($defaultProducts);
    header('Location: index.php');
    exit();
}

//khoi tao session
initializeSession($defaultProducts);

$products = $_SESSION['products'];
?>
<main class="container mt-4">
    <a href="addForm.php" class="btn btn-success mb-3">Thêm mới</a>
    <table class="table">
        <thead>
            <tr>
                <th>Sản phẩm</th>
                <th>Giá thành</th>
                <th>Sửa</th>
                <th>Xóa</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $product): ?>
                <tr>
                    <td><?= htmlspecialchars($product['name']) ?></td>
                    <td><?= htmlspecialchars($product['price']) ?></td>
                    <td><a href="editForm.php?edit=<?= $product['id'] ?>" class="btn btn-warning btn-sm">Sửa</a></td>
                    <td><a href="deleteProcess.php?delete=<?= $product['id'] ?>" class="btn btn-danger btn-sm">Xóa</a></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</main>