<?php //第一問
$question = $_POST['question'];
$answer = $_POST['answer'];

if ($question === $answer) {
    $result = "正解";
}else{
    $result = "不正解";
}
?>

<?php //第二問
$question_2 = $_POST['question_2'];
$answer_2 = $_POST['answer_2'];

if ($question_2 === $answer_2) {
    $result_2 = "正解";
}else{
    $result_2 = "不正解";
}
?>
<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title>クイズ結果</title>
</head>
<body>
    <h2>結果は・・・</h2>
    <?php echo $result ?>
    <br>
    <h2>第二問</h2>
    <?php echo $result_2 ?>

</body>