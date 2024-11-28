<?php
require_once 'config.php';

$stmt = $pdo->query("SELECT * FROM questions");
$questions = $stmt->fetchAll(PDO::FETCH_ASSOC);
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
        <?php foreach ($questions as $index => $question): ?>
            <div class='card mb-4'>
                <div class='card-header'><strong><?php echo htmlspecialchars($question['question']); ?></strong></div>
                <div class='card-body'>
                    <?php
                    $options = [
                        'A' => $question['option_a'],
                        'B' => $question['option_b'],
                        'C' => $question['option_c'],
                        'D' => $question['option_d']
                    ];
                    foreach ($options as $key => $option):
                    ?>
                        <div class='form-check'>
                            <input class='form-check-input' type='radio' name='question<?php echo $question['id']; ?>' value='<?php echo $key; ?>' id='question<?php echo $question['id'] . $key; ?>' required>
                            <label class='form-check-label' for='question<?php echo $question['id'] . $key; ?>'>
                                <?php echo $key . '. ' . htmlspecialchars($option); ?>
                            </label>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endforeach; ?>
        <button type="submit" class="btn btn-primary">Nộp bài</button>
    </form>
</body>

</html>