<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm sản phẩm</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <h1 class="mb-4 text-center">Thêm sản phẩm mới</h1>
    <form action="addProcess.php" method="post" class="text-center">
        <div class="mb-3">
            <label for="">Name</label>
            <input type="text" name="name" required><br>
        </div>
        <div class="mb-3">
            <label for="">Price</label>
            <input type="number" name="price" required><br>
        </div>
        <button type="submit" class="btn btn-primary">Thêm sản phẩm</button>
    </form>
</body>

</html>