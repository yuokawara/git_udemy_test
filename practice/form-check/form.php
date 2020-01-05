<!DOCTYPE html>
<html>

<body>
    <form action="check.php" method="post">
        名前<br>
        <input type="text" name="name"><br>

        備考<br>
        <textarea name="note" cols="40" rows="5"></textarea>

        性別<br>
        <input type="radio" name="sex" value="1">男性
        <input type="radio" name="sex" value="2">女性
        <input type="radio" name="sex" value="9">無回答

        出身地<br>
        <select name="pref">
            <option value="1">北海道</option>
            <option value="2">青森県</option>
            <option value="3">岩手県</option>
            <option value="4">秋田県</option>
            <option value="5">山形県</option>
            <option value="6">宮城県</option>
        </select>


        <input type="submit" name="submit" value="送信">
    </form>

</body>

</html>