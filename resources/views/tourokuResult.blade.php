<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>登録結果画面</title>
</head>

<body>
    <h1>◆SNS◆</h1>
    @if($flag->getFlag())
    <p>ユーザー登録が完了しました。<br>
        ようこそ　{{$user->getName()}}さん</p>
    <a href="{{ url('/MyPage') }}">マイページへ</a>
    @else
    <p>入力されていません。</p>
    <a href="{{ url('/') }}">トップページに戻る</a>
    @endif
</body>

</html>