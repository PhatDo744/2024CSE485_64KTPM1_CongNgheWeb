<?php
require_once 'config.php';

$file = fopen(__DIR__ . '/uploads/questions.txt', 'r');
if (!$file) {
    die("Unable to open file!");
}

while (($line = fgets($file)) !== false) {
    if (strpos($line, 'Câu') === 0) {
        $question = trim($line);
        $options = [];
        for ($i = 0; $i < 4; $i++) {
            $options[] = trim(fgets($file));
        }
        $answer_line = trim(fgets($file));
        $answer = strtoupper(trim(substr($answer_line, strpos($answer_line, ':') + 1)));
        // Chèn vào cơ sở dữ liệu
        $stmt = $pdo->prepare("INSERT INTO questions (question, option_a, option_b, option_c, option_d, answer) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->execute([
            $question,
            substr($options[0], 3), // Loại bỏ ký tự "A. "
            substr($options[1], 3), // Loại bỏ ký tự "B. "
            substr($options[2], 3), // Loại bỏ ký tự "C. "
            substr($options[3], 3), // Loại bỏ ký tự "D. "
            $answer
        ]);
    }
}

fclose($file);
echo "Import dữ liệu thành công!";
