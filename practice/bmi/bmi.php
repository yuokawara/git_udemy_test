<?php
//BMI体重
function bmi($height, $mass)
{
    $height = $height / 100;
    $mass = $mass / ($height * $height);
    return $mass;
}

$bmi = bmi(170, 60);

if ($bmi <18.5) {
    print "痩せすぎだよー";
} else if ($bmi > 25) {
    print "ダイエットしよー";
} else {
    print "素晴らしい！現状キープで！";
}
?>

<?php
//カウント
$counter = 0;
$str = "日目";

for($counter = 1; $counter <= 31; $counter++) {
    print $counter;
}
?>

<?php
//foreach
$member["name"] = "ひよこ";
$member["age"] = "3ヶ月";
$member["sex"] = "メス";

foreach ($member as $key => $value) {
    print $key."は".$value."です<br>";
}
?>