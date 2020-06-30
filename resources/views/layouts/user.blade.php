<!doctype html>
<html lang="en">
    <head>
        @include('includes.header')
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    </head>

    <body>
{{--        <div id="app">--}}
            <header class="">
                @include('includes.navbar')
            </header>

            <main class="py-4">
                @yield('content')
            </main>
{{--        </div>--}}

        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
