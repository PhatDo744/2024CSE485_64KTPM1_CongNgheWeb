<?php
session_start();
include '../includes/header.php';
include '../models/FlowerModel.php';

$id = $_GET['id'] ?? '';
$flower = [];
if ($id !== '') {
    $stmt = $pdo->prepare("SELECT * FROM flowers WHERE id = :id");
    $stmt->execute(['id' => $id]);
    $flower = $stmt->fetch();
}
?>
<div class="container mt-4">
    <h1 class="text-center">Sửa hoa</h1>
    <form action="../controllers/FlowerController.php?action=update" method="POST">
        <input type="hidden" name="id" value="<?php echo htmlspecialchars($id); ?>">
        <div class="mb-3">
            <label for="name" class="form-label">Tên hoa</label>
            <input type="text" class="form-control" id="name" name="name" value="<?php echo htmlspecialchars($flower['name'] ?? ''); ?>" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Mô tả</label>
            <textarea class="form-control" id="description" name="description" rows="3" required><?php echo htmlspecialchars($flower['description'] ?? ''); ?></textarea>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Hình ảnh (URL)</label>
            <input type="text" class="form-control" id="image" name="image" value="<?php echo htmlspecialchars($flower['image'] ?? ''); ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Cập nhật</button>
    </form>
</div>
<?php include '../includes/footer.php'; ?>