<!DOCTYPE html>

<head>
    <title>カレンダー</title>
    <?php
    $year = 0; //年表示
    $month = 0; //月表示

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
    ?>
</head>

<body>
    <?= $datetime->format('Y年m月') ?>
    <p>
    <?php
        $datetime->modify('-1 month');
    ?>
        <a href="/carender.php?y=<?= $datetime->format('Y') ?>&m=<?= $datetime->format('m') ?>">前の月
</a>  

    <?php
        $datetime->modify('+2 month');
    ?>
        <a href="/carender.php?y=<?= $datetime->format('Y') ?>&m=<? $datetime->format('m') ?>">次の月
</a>
    </p>
</body>