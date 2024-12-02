<?php
include '../includes/header.php';
include '../models/FlowerModel.php';
$flowers = getFlowers();
?>
<div class="container mt-4">
    <h1 class="text-center">Danh sách các loài hoa</h1>
    <div class="row">
        <?php foreach ($flowers as $flower): ?>
            <div class="col-md-4">
                <div class="card mb-4 h-100">
                    <img src="../assets/<?php echo $flower['image']; ?>" class="card-img-top img-fluid" alt="<?php echo $flower['name']; ?>" style="max-height: 200px; object-fit: cover;">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title"><?php echo $flower['name']; ?></h5>
                        <p class="card-text flex-grow-1"><?php echo $flower['description']; ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<?php include '../includes/footer.php'; ?>