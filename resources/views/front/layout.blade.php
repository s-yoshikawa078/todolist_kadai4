<!DOCTYPE html>

<html lang="ja">

<head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Chapter 15 冒頭で追加したBootstrap CDN --}}

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" xintegrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>タスク管理システム @yield('title')</title>

</head>

<body class="bg-light">



    {{-- ナビゲーションバー (認証済みの場合のみ表示) --}}

    @auth

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

            <div class="container">

                <a class="navbar-brand" href="/task/list">My Task App</a>

                <div class="d-flex">

                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                        <li class="nav-item">

                            <span class="nav-link text-white-50">

                                ようこそ、{{ \Auth::user()->name }} さん

                            </span>

                        </li>

                        <li class="nav-item">

                            <a class="nav-link btn btn-outline-danger ms-2" href="/logout">ログアウト</a>

                        </li>

                    </ul>

                </div>

            </div>

        </nav>

    @endauth



    <div class="container my-5">

        @yield('contents')

    </div>



    {{-- Chapter 15 冒頭で追加したBootstrap JS --}}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" xintegrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>
