<?php
$filename = './uploads/questions.txt';
$questions = file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
$answer = [];
$current_questions = [];
foreach ($questions as $question) {
    if (strpos($question, 'ANSWER:') === 0) {
        $answer[] = trim(substr($question, 8));
    }
}
$score = 0;
foreach ($_POST as $key => $userAnswer) {
    $questionNumber = (int)filter_var($key, FILTER_SANITIZE_NUMBER_INT);
    if (isset($answer[$questionNumber - 1]) && $answer[$questionNumber - 1] === $userAnswer) {
        $score++;
    }
}
$total_questions = count($answer);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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