<table border="2">
<?php
for ($a = 1; $a <= 9; $a++) {
    echo '<tr>';
    for ($i = 1; $i <= 9; $i++) {
        $ans = $a * $i;
        //偶数は白色
        if (($i % 2 == 0 && $a % 2 == 0) || ($a % 2 == 1 && $i % 2 == 1)) {
            echo '<td bgcolor="#cccccc">' .$i. 'x' .$a. '=' .$ans. '</td>';
        }else {
            echo '<td>' .$a. 'x' .$i. '=' .$ans. '</td>';
        }
    }
    echo '</tr>';
}
?>
</table>
