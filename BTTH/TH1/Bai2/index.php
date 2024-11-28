<?php
$filename = './uploads/questions.txt';
$questions = file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

$current_questions = [];
$question_number = 1;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài tập trắc nghiệm</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center">Bài tập trắc nghiệm</h1>
    </div>

    <form action="result.php" method="post">
        <?php
        foreach ($questions as $question) {
            if (strpos($question, "Câu") === 0) {
                if (!empty($current_questions)) {
                    echo "<div class='card mb-4'>";
                    echo "<div class='card-header'><strong>{$current_questions[0]}</strong></div>";
                    echo "<div class='card-body'>";
                    for ($i = 1; $i <= 4; $i++) {
                        $answer = substr($current_questions[$i], 0, 1); // A, B, C, D
                        echo "<div class='form-check'>";
                        echo "<input class='form-check-input' type='radio' name='question{$question_number}' value='{$answer}' id='question{$question_number}{$answer}' required>";
                        echo "<label class='form-check-label' for='question{$question_number}{$answer}'>{$current_questions[$i]}</label>";
                        echo "</div>";
                    }
                    echo "</div>";
                    echo "</div>";
                    $question_number++;
                }
                $current_questions = [$question];
            } else {
                $current_questions[] = $question;
            }
        }
        if (!empty($current_questions)) {
            echo "<div class='card mb-4'>";
            echo "<div class='card-header'><strong>{$current_questions[0]}</strong></div>";
            echo "<div class='card-body'>";
            for ($i = 1; $i <= 4; $i++) {
                $answer = substr($current_questions[$i], 0, 1); // A, B, C, D
                echo "<div class='form-check'>";
                echo "<input class='form-check-input' type='radio' name='question{$question_number}' value='{$answer}' id='question{$question_number}{$answer}' required>";
                echo "<label class='form-check-label' for='question{$question_number}{$answer}'>{$current_questions[$i]}</label>";
                echo "</div>";
            }
            echo "</div>";
            echo "</div>";
        }
        ?>
        <button type="submit" class="btn btn-primary">Nộp bài</button>
    </form>
</body>

</html>