<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>管理者画面</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <div>管理者画面</div>
    <div class="bar">
        <a href="{{ route ('show_admin')}}">ユーザー一覧</a>
        <a href="{{ route ('editapp')}}">画面編集</a>
    </div>
</body>

</html>
