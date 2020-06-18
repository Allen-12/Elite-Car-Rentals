<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
        <title>{{ config('app.name') }}</title>
    </head>

    <body>
        <div id="app">
            <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar" style="background-image: url('{{ asset('images/car1.jpg') }}">
                <div class="container">
                    <a class="navbar-brand" href="/"><img src = "{{ asset('images/elitelogo2.png') }}" style="height: 100px; width: 130px;" ></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="oi oi-menu"></span> Menu
                    </button>

                    <div class="collapse navbar-collapse" id="ftco-nav">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active"><a href="/" class="nav-link"><h4>Home</h4></a></li>
                            <li class="nav-item"><a href="/" class="nav-link"><h4>Log Out</h4></a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <main class="py-4">
                @yield('content')
            </main>
        </div>

        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
