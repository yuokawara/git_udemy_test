<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>クイズ</title>
    <?php
    $title = "次のうち、北海道ではない地名はどれ？";
    $question = array();
    $question = array("苫小牧", "稚内", "恩納村", "北広島");
    $answer = $question[2];
    shuffle($question);

    //第二問
    $title_2 = "喋れる言語は？";
    $question_2 = array();
    $question_2 = array("英語", "タイ語", "スペイン語", "日本語");
    $answer_2 = $question_2[3];

    


    ?>
</head>

<body>
    <h2>第一問</h2>
    <h2><?php echo $title ?></h2>
    <form method="POST" action="answer.php">
        <?php foreach ($question as $value) { ?>
            <input type="radio" name="question" value="<?php echo $value; ?>" /><?php echo $value; ?><br>
        <?php } ?>
        <input type="hidden" name="answer" value="<?php echo $answer ?>">
        <br>

        <h2>第二問</h2>
        <h2><?php echo $title_2 ?></h2>
        <?php foreach ($question_2 as $value_2) { ?>
            <input type="checkbox" name="question_2" value="<?php echo $value_2; ?>" /><?php echo $value_2; ?><br>
        <?php } ?>
        <input type="hidden" name="answer_2" value="<?php echo $answer_2 ?>">
        <br>

        <input type="submit" value="解答">
    </form>
</body>

</html>