<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>画面編集</title>
</head>
<body>
  <h1>画面編集</h1>
  <a href="{{route ('admin')}}">管理者画面に戻る</a>
  <div class="bar">
      <a href="{{ route ('editapp.languages')}}">言語一覧へ</a>
      <a href="{{ route ('editapp.contents')}}">コンテンツ一覧へ</a>
  </div>
</body>
</html>