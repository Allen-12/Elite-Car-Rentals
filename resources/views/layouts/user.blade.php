<!doctype html>
<html lang="en">
    <head>
{{--        @include('includes.header')--}}
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    </head>

    <body>
        <header class="">
            <nav class="navbar navbar-expand-md navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar" style="background-image: url('{{ asset('images/car1.jpg') }}">
                <div class="container">
                    <a class="navbar-brand" href="/"><img src = "{{ asset('images/elitelogo2.png') }}" style="height: 100px; width: 130px;" ></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="oi oi-menu"></span> Menu
                    </button>

                    <div class="collapse navbar-collapse" id="ftco-nav">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active"><a href="/" class="nav-link">Home</a></li>
                            <li class="nav-item"><a href="/about" class="nav-link">About</a></li>

                            @guest
                                <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">Log In</a></li>
                            @else
                                <li class="nav-item dropdown">
                                    <a href="#" class="nav-link">{{Auth::user()->first_name}} {{ Auth::user()->last_name }}</a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                            {{-- <li class="nav-item"><a href="/" class="nav-link"><h5>Log Out</h5></a></li> --}}
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

        <main class="py-4">
            @yield('content')
        </main>
    <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
