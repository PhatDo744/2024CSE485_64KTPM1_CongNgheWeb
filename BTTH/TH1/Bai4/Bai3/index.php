<?php
// Đường dẫn tới file CSV
$filename =  __DIR__ . '/uploads/KTPM3_Danh_sach_diem_danh.csv';
if (!file_exists($filename)) {
    die("File $filename không tồn tại. Vui lòng kiểm tra đường dẫn.");
}
$file = fopen($filename, 'r');
if (!$file) {
    die("Không thể mở file $filename. Kiểm tra quyền truy cập.");
}


// Mảng chứa dữ liệu sinh viên
$sinhvien = [];

// Mở file CSV
if (($handle = fopen($filename, "r")) !== FALSE) {
    // Đọc dòng đầu tiên (tiêu đề)
    $headers = fgetcsv($handle, 1000, ",");

    // Đọc từng dòng dữ liệu
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $sinhvien[] = array_combine($headers, $data);
    }

    fclose($handle);
}

// In mảng sinh viên (chỉ để kiểm tra)
// print_r($sinhvien);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách sinh viên</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center">Danh sách sinh viên</h1>
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>username</th>
                    <th>password</th>
                    <th>lastname</th>
                    <th>firstname</th>
                    <th>city</th>
                    <th>email</th>
                    <th>course1</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Hiển thị từng sinh viên
                foreach ($sinhvien as $sv) {
                    echo "<tr>";
                    echo "<td>{$sv['﻿username']}</td>";
                    echo "<td>{$sv['password']}</td>";
                    echo "<td>{$sv['lastname']}</td>";
                    echo "<td>{$sv['firstname']}</td>";
                    echo "<td>{$sv['city']}</td>";
                    echo "<td>{$sv['email']}</td>";
                    echo "<td>{$sv['course1']}</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>