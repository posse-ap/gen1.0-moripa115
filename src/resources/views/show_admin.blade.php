<!DOCTYPE html>
<html lang="ja">

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>管理者一覧</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <h1>ユーザー一覧です</h1>
    <a href="{{ route('admin') }}">管理者画面に戻る</a>
</body>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    追加
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <form action="{{ route('admin/add') }}" method="POST">
                    @csrf
                    <main>
                        <p>基本情報を入力してください。</p>
                        <div class="add_admin">
                            <p>名前</p>
                            <input type="text" name="name">
                            <p>メールアドレス</p>
                            <input type="text" name="mail">
                            <p>パスワード</p>
                            <input type="text" name="password">
                        </div>
                    </main>
                    <p><input type="submit" value="追加"></p>
                </form>
            </div>
        </div>
    </div>
</div>

<main>
    <table>
        @foreach ($items as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->email }}</td>
                <td> <a href="{{ route('admin.destroy', $item->id) }}">削除</a></td>

                <!-- Button trigger modal -->
                <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{$item->id}}">
                        編集
                    </button>
                <td>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal{{$item->id}}" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModal{{$item->id}}Label" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-body">
                                <form action="{{ route('admin.update', $item->id) }}" method="POST">
                                    @csrf
                                    <main>
                                        <p>基本情報を入力してください。</p>
                                        <div class="add_admin">
                                            <p>名前</p>
                                            <input type="text" name="name" value="{{ $item->name }}">
                                            <p>メールアドレス</p>
                                            <input type="text" name="mail" value="{{ $item->email }}">
                                            <p>パスワード</p>
                                            <input type="text" name="password" value="{{ $item->password }}">
                                        </div>
                                    </main>
                                    <p><input type="submit" value="保存"></p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </tr>
        @endforeach
    </table>
</main>

<body>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>
