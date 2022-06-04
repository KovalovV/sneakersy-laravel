<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Sneakersy</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel="stylesheet">
    <link href="{!! asset('css/app.css') !!}" rel="stylesheet" type="text/css" >

</head>
<body>
    <div id="app">

        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm nav-container">
            <div class="container top-bar-container">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <a href="{{ url('/home') }}" class="logo-container">
                        <div class="logo-icon-container">
                            <img class="logo-icon" src="/img/logo.png" alt="Logo" />
                        </div>
                        <div>
                            <h1 class="logo-title">Sneakersy</h1>
                        </div>
                    </a>
                    <div class="nav-burger-menu">
                        <span class="nav-burger-menu-row"></span>
                        <span class="nav-burger-menu-row"></span>
                        <span class="nav-burger-menu-row"></span>
                    </div>
                    <ul class="nav-list navbar-nav ms-auto">
                        <li class="nav-list-item">
                        <a href="#testimonials">Більше</a>
                        </li>
                        <li class="nav-list-item">
                        <a href="{{ url('/about') }}">Про нас</a>
                        </li>
                        <li class="nav-list-item">
                        <a href="#сontact">Контакти</a>
                        </li>
                    </ul>
                    <ul class="nav-list navbar-nav ms-auto">
                        <li class="nav-list-item">
                            <a href="#testimonials"
                                ><img src="/img/cart.png" alt="Cart"
                            /></a>
                        </li>
                        @guest
                            <a id="navbarDropdown" class="nav-link" href="#">
                                Гість
                            </a>
                        @else
                            <a id="navbarDropdown" class="nav-link" href="#">
                                {{ Auth::user()->name }}
                            </a>
                        @endguest
                        </li>
                    </ul>
                    
                </div>
                <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();"
                                >
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        @endguest
                    </ul>
            </nav>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>

        <footer class="brown-bg">
		<div class="container container-footer">
			<div class="box">
                <div class="footer-logo">
                    <a href="#" class="logo-container">
                        <div class="logo-icon-container logo-icon-container-big">
                          <img class="logo-icon" src="img/logo.png" alt="Logo" />
                        </div>
                        <div>
                          <h1 class="logo-title logo-title-big">Sneakersy</h1>
                        </div>
                    </a>
                    <p>Ваші найексклюзивніші кросівки в усьому світі.</p>
                </div>
				
                <div class="footer-desc">
                    <ul class="footer-list">
                      <li class="footer-list-item">Більше</li>
                      <li class="footer-list-item">Нова колекція</li>
                      <li class="footer-list-item">Популярне</li>
                      <li class="footer-list-item">Найпродаваніші</li>
                    </ul>
                    <ul class="footer-list">
                      <li class="footer-list-item">Про нас</li>
                      <li class="footer-list-item">Допомога</li>
                      <li class="footer-list-item">Доставка</li>
                      <li class="footer-list-item">Партнери</li>
                    </ul>
                    <ul class="footer-list">
                      <li class="footer-list-item">Інформація</li>
                      <li class="footer-list-item">Контакти</li>
                      <li class="footer-list-item">Політика конфіденційності</li>
                      <li class="footer-list-item">Положення та умови</li>
                    </ul>
                </div>
            </div>
		</div>
	</footer>
    </div>
</body>
</html>
