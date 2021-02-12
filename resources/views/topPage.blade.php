<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>トップページ</title>
</head>

<body>
    <h1>◆SNS◆</h1>
    <p>初めてご利用の方</p>
    <a href="{{ url('/touroku') }}">新規登録</a><br><br>
    <p>ユーザー登録済みの方</p>
    <a href="{{ url('/login') }}">ログイン</a>
</body>

</html>