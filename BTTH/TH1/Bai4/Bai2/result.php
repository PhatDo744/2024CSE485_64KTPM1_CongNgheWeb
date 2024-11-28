<?php
require_once 'config.php';

$score = 0;
$total_questions = 0;

foreach ($_POST as $key => $userAnswer) {
    // Trích xuất question_number từ tên trường
    if (preg_match('/^question(\d+)$/', $key, $matches)) {
        $question_number = $matches[1];
        $question_id = $question_number; // Giả sử question_number tương ứng với question_id trong cơ sở dữ liệu

        $stmt = $pdo->prepare("SELECT answer FROM questions WHERE id = ?");
        $stmt->execute([$question_id]);
        $correctAnswer = $stmt->fetchColumn();

        if ($correctAnswer) {
            $total_questions++;
            if (strtoupper($userAnswer) === strtoupper($correctAnswer)) {
                $score++;
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <title>Kết quả thi trắc nghiệm</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center">Kết quả</h1>
        <div class="alert alert-success text-center mt-5">
            Bạn trả lời đúng <strong><?php echo $score; ?></strong> / <strong><?php echo $total_questions; ?></strong>
        </div>
        <div class="text-center">
            <a href="index.php" class="btn btn-primary">Làm lại</a>
        </div>
    </div>
</body>

</html>