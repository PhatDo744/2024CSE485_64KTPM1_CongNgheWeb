<?php
include '../config.php';
include '../includes/header.php';
include '../includes/functions.php';
$flowers = getFlowers();
?>
<div class="container mt-4">
    <h1 class="text-center">Danh sách các loài hoa</h1>
    <div class="row">
        <?php foreach ($flowers as $flower): ?>
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="../<?php echo $flower['image']; ?>" class="card-img-top" alt="<?php echo $flower['name']; ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $flower['name']; ?></h5>
                        <p class="card-text"><?php echo $flower['description']; ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<?php include '../includes/footer.php'; ?>