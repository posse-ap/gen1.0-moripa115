<!DOCTYPE html>
<html lang="ja">

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>言語一覧</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <h1>言語一覧です</h1>
    <a href="{{ route('editapp')}}">編集項目選択画面へ</a>
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
                    <form action="{{ route('editapp.languages.add') }}" method="POST">
                        @csrf
                        <main>
                            <p>言語名を入力してください。</p>
                            <div class="add_languages">
                                <p>名前</p>
                                <input type="text" name="name">
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
            @foreach ($languages as $language)
                <tr>
                    <td>{{ $language->name }}</td>
                    <td> <a href="{{ route('editapp.languages.delete', $language->id) }}">削除</a> </td>
                    <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{$language->id}}">
                            編集
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal{{$language->id}}" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <form action="{{ route('editapp.languages.update' , $language->id) }}" method="POST">
                                            @csrf
                                            <main>
                                                <p>言語名を入力してください。</p>
                                                <div class="add_languages">
                                                    <p>名前</p>
                                                    <input type="text" name="name" value="{{$language->name}}">
                                                </div>
                                            </main>
                                            <p><input type="submit" value="保存"></p>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
        </table>
    </main>

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
