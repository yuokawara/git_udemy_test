<!DOCTYPE html>


<head>
    <meta charset="utf-8">
    <title>クイズ</title>
    <?php
    //第一問
    $title = "次のうち、北海道ではない地名はどれ？";
    $question = array();
    $question = array("苫小牧", "稚内", "恩納村", "北広島");
    $answer = $question[2];
    shuffle($question);

    //第二問
    $title_2 = "小鳥遊はなんと読む？";
    $q2 = array();
    $q2 = array("ことり", "たかなし", "はやぶさ", "ふくろう");
    
    //第三問
    $title_3 = "2020年に開催されるのは、〇〇オリンピック";



    ?>
</head>

<body>
    <h2>12345</h2>
    <p>git diff 変更</p>
    <p>git commit --amend</p>
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
        <?php foreach ($q2 as $value) { ?>
            <input type="checkbox" name="q2" value="<?php echo $value; ?>" /><?php echo $value; ?><br>
        <?php } ?>
        <br>
    <h2>第三問</h2>
    <h2><?php echo $title_3 ?></h2>
        <textarea name="q3"></textarea><br>


        <br><input type="submit" value="解答">
        
    </form>
            

</body>