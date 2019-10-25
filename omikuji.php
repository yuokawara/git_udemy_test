<?php
// //おみくじマシーン
include("common.php");

$omikuji[] = "大吉おめでとう！";
$omikuji[] = "大吉良い事あるかもよ";
$omikuji[] = "大吉臨時収入あるかもね";
$omikuji[] = "中吉なかなか良い";
$omikuji[] = "小吉まあまあ";
$omikuji[] = "末吉気にするな";
$omikuji[] = "大凶とりあえず気をつけよう";

print random($omikuji);
?>