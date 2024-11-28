<?php

include 'config.php';
$filename = __DIR__ . '/uploads/KTPM3_Danh_sach_diem_danh.csv';


if (($handle = fopen($filename, "r")) !== FALSE) {

    $headers = fgetcsv($handle, 1000, ",");

    $sql = "INSERT INTO sinhvien (username, password, lastname, firstname, city, email, course1) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);

    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {

        $stmt->execute($data);
    }

    fclose($handle);
    echo "Data imported successfully.";
} else {
    echo "Failed to open the CSV file.";
}

$pdo = null;
