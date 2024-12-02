<?php include '../includes/header.php'; ?>
<div class="container mt-4">
    <h1 class="text-center">Thêm hoa mới</h1>
    <form action="../controllers/FlowerController.php?action=create" method="POST">
        <div class="mb-3">
            <label for="name" class="form-label">Tên hoa</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Mô tả</label>
            <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Hình ảnh</label>
            <input type="text" class="form-control" id="image" name="image" required>
        </div>
        <button type="submit" class="btn btn-primary">Thêm</button>
    </form>
</div>
<?php include '../includes/footer.php'; ?>