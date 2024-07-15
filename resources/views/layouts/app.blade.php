<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <meta property="og:image" content="{{ Vite::asset('resources/images/logo1-min.png') }}" />
    @yield('head')
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
    <script async defer src="https://analytics.umami.is/script.js" data-website-id="05584cc3-04c4-49ec-904d-7acc3ea598e8"></script>
</head>

<body class="min-h-screen relative pb-8">
    <header class="w-full sticky top-0 z-10">
        <nav x-data="{ open: false }">
            <div class="flex">
                <img src="{{ Vite::asset('resources/images/logo2-min.png') }}"
                    class="h-20 m-2 inline hover:-rotate-180 transition" alt="Logo">
                <a href="{{ route('home') }}" class="umami--click--logo-link">
                    <h1 class="mt-6">H<sub>2</sub>Opnieuw&trade;</h1>
                </a>

                <button class="w-10 h-10 relative lg:hidden ml-auto mt-7 mr-3.5 umami--click--menu-button" @click="open = !open" tabindex="0">
                    <div class="block w-5 absolute left-1/2 top-1/2   transform  -translate-x-1/2 -translate-y-1/2">
                        <span aria-hidden="true" class="block absolute h-0.5 w-5 bg-black duration-500 ease-in-out"
                            :class="{ 'rotate-45': open, ' -translate-y-1.5': !open }"></span>
                        <span aria-hidden="true" class="block absolute  h-0.5 w-5 bg-black duration-500 ease-in-out"
                            :class="{ 'opacity-0': open }"></span>
                        <span aria-hidden="true" class="block absolute  h-0.5 w-5 bg-black duration-500 ease-in-out"
                            :class="{ '-rotate-45': open, ' translate-y-1.5': !open }"></span>
                    </div>
                </button>
                <ul class="h-10 mt-7 ml-7 hidden lg:flex">
                    <li class="{{ Route::is('home') ? 'active' : '' }} inline p-2 pl-4">
                        <a href="{{ route('home') }}" class="h3 anchor umami--click--home-link">Home</a>
                    </li>
                    <li class="{{ Route::is('getintouch') ? 'active' : '' }} inline p-2 pl-4">
                        <a href="{{ route('getintouch') }}" class="h3 anchor umami--click--getintouch-link">Get in touch</a>
                    </li>
                    <li class="{{ Route::is('ourteam') ? 'active' : '' }} inline p-2 pl-4">
                        <a href="{{ route('ourteam') }}" class="h3 anchor umami--click--ourteam-link">Our team</a>
                    </li>
                    <li class="{{ Route::is('dashboard') ? 'active' : '' }} inline p-2 pl-4 umami--click--dashboard-link">
                        <a href="{{ route('dashboard') }}" class="h3 anchor">Dashboard</a>
                    </li>
                </ul>
                <ul class="ml-auto mt-7 mr-7 h-fit hidden lg:flex">
                    @if (Auth::check())
                        <li class="{{ Route::is('logout') ? 'active' : '' }} p-2 pr-4 inline">
                            <a href="{{ route('logout') }}" class="h3 anchor umami--click--logout-link">
                                Logout
                            </a>
                        </li>
                    @else
                        <li class="{{ Route::is('login') ? 'active' : '' }} p-2 pr-4 inline">
                            <a href="{{ route('login') }}" class="h3 anchor umami--click--login-link">
                                Login
                            </a>
                        </li>
                        <li class="{{ Route::is('register') ? 'active' : '' }} p-2 pr-4 inline">
                            <a href="{{ route('register') }}" class="h3 anchor umami--click--register-link">
                                Register
                            </a>
                        </li>
                    @endif
                </ul>
            </div>
            <ul class="lg:hidden h-10" x-show="open" x-collapse>
                <li class="{{ Route::is('home') ? 'active' : '' }} ml-2 p-2 pl-4 w-fit">
                    <a href="{{ route('home') }}" class="h3 anchor umami--click--home-link">Home</a>
                </li>
                <li class="{{ Route::is('getintouch') ? 'active' : '' }} ml-2 p-2 pl-4 w-fit">
                    <a href="{{ route('getintouch') }}" class="h3 anchor umami--click--getintouch-link">Get in touch</a>
                </li>
                <li class="{{ Route::is('ourteam') ? 'active' : '' }} ml-2 p-2 pl-4 w-fit">
                    <a href="{{ route('ourteam') }}" class="h3 anchor umami--click--ourteam-link">Our team</a>
                </li>
                <li class="{{ Route::is('dashboard') ? 'active' : '' }} ml-2 p-2 pl-4 w-fit">
                    <a href="{{ route('dashboard') }}" class="h3 anchor umami--click--dashboard-link">Dashboard</a>
                </li>
                @if (Auth::check())
                    <li class="{{ Route::is('logout') ? 'active' : '' }} ml-2 p-2 pl-4 w-fit pb-4">
                        <a href="{{ route('logout') }}" class="h3 anchor umami--click--logout-link">
                            Logout
                        </a>
                    </li>
                @else
                    <li class="{{ Route::is('login') ? 'active' : '' }} ml-2 p-2 pl-4 w-fit">
                        <a href="{{ route('login') }}" class="h3 anchor umami--click--login-link">
                            Login
                        </a>
                    </li>
                    <li class="{{ Route::is('register') ? 'active' : '' }} ml-2 p-2 pl-4 w-fit pb-4">
                        <a href="{{ route('register') }}" class="h3 anchor umami--click--register-link">
                            Register
                        </a>
                    </li>
                @endif
            </ul>
        </nav>
        <img src="{{ Vite::asset('resources/images/waves-min.png') }}" class="lg:h-8 h-4 w-full" alt="Waves">
    </header>

    <main class="mt-2 lg:mt-8">
        @yield('main')
    </main>

    <footer class="bottom-0 absolute text-center w-full">
        <h5 class="my-2">Copyright &copy; {{ now()->year }} H<sub>2</sub>Opnieuw&trade;. All Rights Reserved.</h5>
    </footer>
</body>

</html>
