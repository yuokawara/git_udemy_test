<!DOCTYPE html>

<head>
    <title>カレンダー</title>
    <meta charset="utf-8">
    <?php
        $year = 0; //年表示
        $month = 0; //月表示
        $dow = array('日', '月', '火', '水', '木', '金', '土');

        if (isset($_GET['y'])) {
            $year = intval($_GET['y']);
        }
        if (isset($_GET['m'])) {
            $month = intval($_GET['m']);
        }

        if (!$year || !$month || !checkdate($month, 1, $year)) {
            //現在の年月
            $now_date = new DateTime();
            $year = $now_date->format('Y');
            $month = $now_date->format('m');
        }
        try {
            $datetime = new DateTime("{$year}-{$month}-1"); //表示する月
        } catch (Exception $e) {
            echo $e->getMessage();
            exit(1);
        }

        $first_day = $datetime->format('w'); //一日の曜日を合わせる
    ?>
</head>

<body>
    <table>
        <caption><?= $datetime->format('Y年m月') ?></caption>
        <thead>
            <tr>
                <?php foreach($dow as $day) { ?>
                <th><?= $day ?></th>
                <?php } ?>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php for ($date = 1; $date <= $datetime->format('t'); $date++) { ?>
                    <?php
                        if ($date === 1) {
                            $i = 0;
                            while ($i < $first_day) {
                                ?>
                                <td>&nbsp;</td>
                    <?php
                            $i++;
                            }
                        }
                    ?>
                <td><?= $date ?></td>
                <?php if ($date % 7 === 7 - $first_day) { ?>
                        </tr><tr>
                    <?php } ?>
                <?php } ?>
            </tr>
        </tbody>
    </table>

    <p>
        <?php
            $datetime->modify('-1 month');
        ?>
            <a href="/index.php?y=<?= $datetime->format('Y') ?>&m=<?= $datetime->format('m') ?>">前の月
        </a>

        <?php
            $datetime->modify('+2 months');
        ?>
            <a href="/index.php?y=<?= $datetime->format('Y') ?>&m=<?= $datetime->format('m') ?>">次の月
        </a>
    </p>
</body>