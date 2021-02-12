<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>新規登録画面</title>
</head>

<body>
    <h1>SNS名(新規登録画面)</h1>
    <p>ユーザー登録を行います。<br>
        ご希望のユーザー名とパスワードを入力してください。</p>
    <form action="touroku" method="post">
        @csrf
        <p>ユーザー名:<input type="text" name="name"></p>
        <p>パスワード:<input type="password" name="pass"></p>
        <p><input type="submit" value="登録"><br></p>
    </form>
</body>

</html>