<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>PHP基礎編</title>
 </head>

 <body>
    <h2>社員情報入力フォーム</h2>
    <form action="confirm.php" method="post">
        <table>
            <tr>
                <td>社員名</td>
                <td>
                    <input type="text" name="employee_name">
                </td>
            </tr>
            <tr>
                <td>年齢</td>
                <td>
                    <input type="number" name="employee_age">
                </td>
            </tr>
            <tr>
                <td>所属部署</td>
                <td>
                    <select name="department">
                    <option value="開発部">開発部</option>
                    <option value="営業部">営業部</option>
                    <option value="人事部">人事部</option>
                    <!-- <input type="radio" name="department" value="開発部" checked>開発部
                    <input type="radio" name="department" value="営業部">営業部
                    <input type="radio" name="department" value="人事部">人事部 -->
                </td>
            </tr>
            <!--<tr>
                 <td>お問い合わせ種別</td>
                <td>
                    <select name="category">
                        <option value="ご意見やご感想">ご意見やご感想</option>
                        <option value="不具合について">不具合について</option>
                        <option value="その他">その他</option>
                    </select>
                </td> 
            </tr>　-->
            <!-- <tr>
                <td>お問い合わせ内容</td>
                <td>　-->
                    <!-- cols属性＝入力欄の幅（文字数）、rows属性＝入力欄の高さ（行数） -->
                    <!-- <textarea name="message" cols="30" rows="10"></textarea>
                </td>
            </tr> -->
        </table>
        <input type="submit" value="送信">
    </form>
</body>
 
</html>