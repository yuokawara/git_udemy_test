<!DOCTYPE html>
<head>
    <meta charset="utf-8">
</head>
<body>
<?php
    if ($db = sqlite_open("db_orange")) {
        $query = "CREATE TABLE tbl_orange(
            id INTEGER, title VARCHER(10), price INTEGER)";
        $result = sqlite_query($db, $query);
        print "「db_orange」を作成しました。";
    }else{
        die("データベースに接続できないよー。");
    }
    sqlite_close($db);

?>
</body>
</html>
