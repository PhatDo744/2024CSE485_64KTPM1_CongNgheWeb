<?php
include '../includes/header.php';
include '../models/FlowerModel.php';
$flowers = getFlowers();
?>
<div class="container mt-4">
    <h1 class="text-center">Quản trị danh sách các loài hoa</h1>
    <a href="create.php" class="btn btn-success mb-3">Thêm hoa mới</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Tên hoa</th>
                <th>Mô tả</th>
                <th>Hình ảnh</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($flowers as $flower): ?>
                <tr>
                    <td><?php echo $flower['name']; ?></td>
                    <td><?php echo $flower['description']; ?></td>
                    <td><img src="../assets/<?php echo $flower['image']; ?>" alt="<?php echo $flower['name']; ?>" style="width: 100px;"></td>
                    <td>
                        <a href="edit.php?id=<?php echo $flower['id']; ?>" class="btn btn-warning btn-sm">Sửa</a>
                        <a href="../controllers/FlowerController.php?action=delete&id=<?php echo $flower['id']; ?>" class="btn btn-danger btn-sm">Xóa</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?php include '../includes/footer.php'; ?>