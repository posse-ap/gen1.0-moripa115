<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    <header>
        posse
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            記録・投稿
        </button>
        <button type="button" onclick="location.href='{{route('news')}}'" >
            news
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    {{-- <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div> --}}
                    <div class="modal-body">
                        <form action="{{ route('add') }}" method="POST">
                            @csrf
                            <main>
                                <div class="choice">
                                    <p>学習日</p>
                                    <input type="date" name="date">
                                    <p>学習コンテンツ</p>
                                    @foreach ($contents as $content)
                                        <input type="checkbox" name="contents" value="{{$loop->iteration}}">{{ $content }}
                                    @endforeach
                                    <p>学習言語（単体選択のみ可能性）</p>
                                    @foreach ($languages as $language)
                                        <input type="checkbox" name="languages" value="{{$loop->iteration}}">{{ $language }}
                                    @endforeach

                                </div>

                                <div class="write">
                                    <p>学習時間</p>
                                    <input type="" name="time">
                                </div>
                            </main>
                            <p><input type="submit" value="記録・登録"></p>
                        </form>
                    </div>
                    {{-- <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">記録・投稿</button>
                    </div> --}}
                </div>
            </div>
        </div>
    </header>

    <main>
        <div class="times">
            <div class="hours">
                <div>
                    <p>Today</p>
                    <p>{{ $days }}</p>
                    <p>hour</p>
                </div>
                <div>
                    <p>Month</p>
                    <p>{{ $months }}</p>
                    <p>hour</p>
                </div>
                <div>
                    <p>Total</p>
                    <p>{{ $total }}</p>
                    <p>hour</p>
                </div>
            </div>

            <div class="bar">

            </div>

        </div>

        <div class="charts">
            <div class="languages">
                <p>学習言語</p>
                <div>
                    {{-- グラフが入ります --}}
                </div>
                <div>
                    {{-- 言語名が入ります。 --}}
                </div>
            </div>
            <div class="contents">
                <p>学習コンテンツ</p>
                <div>
                    {{-- グラフが入ります --}}
                </div>
                <div>
                    {{-- コンテンツ名が入ります。 --}}
                </div>
            </div>
        </div>
    </main>
    <footer>
        <p>{{ $today }}</p>
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/styleindex.js') }}"></script>
</body>


</html>
