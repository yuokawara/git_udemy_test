<?php //第一問
$question = $_POST['question'];
$answer = $_POST['answer'];

if ($question === $answer) {
    $result = "正解";
} else {
    $result = "不正解";
}
?>
<?php
$q2 = $_POST["q2"];
if ($q2 == "ばら") {
    $result_2 = '正解';
} else {
    $result_2 = '不正解';
}
?>
<?php
$q3 = $_POST["q3"];
if ($q3 == "東京") {
    $result_3 = "正解";
} else {
    $result_3 = "不正解";
}
?>

<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <title>クイズ結果</title>
</head>

<body>
    <h2>結果は・・・</h2>
    <h2>第一問</h2>
    <?php echo $result ?>
    <br>
    <h2>第二問</h2>
    <?php echo $result_2 ?>
    <br>
    <h2>第三問</h2>
    <?php echo $result_3 ?>
</body>