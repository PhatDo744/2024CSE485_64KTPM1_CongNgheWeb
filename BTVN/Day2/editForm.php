<?php
session_start();

if (!isset($_GET['edit']) || !isset($_SESSION['products'])) {
    header('Location: index.php');
    exit();
}

$editId = $_GET['edit'];
$products = $_SESSION['products'];

$productToEdit = null;
foreach ($products as $product) {
    if ($product['id'] == $editId) {
        $productToEdit = $product;
        break;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa sản phẩm</title>
</head>

<body>
    <h1 class="mb-4 text-center">Sửa sản phẩm</h1>
    <form action="editProcess.php" method="post" class="text-center">
        <input type="hidden" name="id" value="<?= htmlspecialchars($productToEdit['id']) ?>">
        <div class="mb-3">
            <label for="">Name:</label>
            <input type="text" name="name" value="<?= htmlspecialchars($productToEdit['name']) ?>">
        </div>
        <div class="mb-3">
            <label for="">Price:</label>
            <input type="text" name="price" value="<?= htmlspecialchars($productToEdit['price']) ?>">
        </div>
        <button type="submit" class="btn btn-primary">Cập nhật</button>
    </form>
</body>

</html>