<?php
function random($array) {
    //範囲を求める
    $min = 0;
    $max = count($array) -1;

    $key = mt_rand($min, $max);

    //結果を$resultに記憶
    $result = $array[$key];
    return $result;
}
