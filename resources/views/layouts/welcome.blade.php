<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        crossorigin="anonymous"> -->
</head>

<body class="h-screen antialiased leading-none font-sans">
    <div id="app">
        <header class="py-2 md:py-4 bg-[white] sticky top-0 right-0 left-0 z-50 header">
            <div class="w-full flex justify-end  md:justify-between items-center px-6 relative overflow-x-hidden xl:container">
                <div class="hidden md:block w-3/12">
                    <a href="{{ route('home') }}" class="text-lg font-semibold text-gray-900 no-underline">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <nav class="navigation text-gray-900 text-sm sm:text-base w-fit max-w-[250px] md:w-3/12 flex flex-col md:flex-row gap-4 md:text-right capitalize transition-all duration-500 top-15 justify-end right-[-100vw] md:right-0 shadow-lg md:shadow-none p-5 md:p-0 fixed z-50 md:relative md:top-0 rounded-md bg-[white] md:bg-[transparent]">
                    <a class="no-underline hover:underline md:hidden" href="{{route('home')}}">{{ __('Home') }}</a>
                    @guest
                    <a class="no-underline hover:underline" href="{{ route('login') }}">{{ __('Login') }}</a>
                    @if (Route::has('register'))
                    <a class="no-underline hover:underline" href="{{ route('register') }}">{{ __('Register') }}</a>
                    @endif
                    @else
                    <a href="{{ route('designs') }}" class="no-underline hover:underline">
                        designs
                    </a>
                    <a href="{{ route('instructions') }}" class="no-underline hover:underline">
                        instructions
                    </a>

                    <a href="{{ route('logout') }}" class="no-underline hover:underline" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                        {{ csrf_field() }}
                    </form>
                    @endguest
                </nav>

                <button class="block md:hidden p-2 navToggle">
                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg" class="menu-icon">
                        <path d=" M21.0938 18.75H0.78125C0.57405 18.75 0.375336 18.8323 0.228823 18.9788C0.08231 19.1253
                        0 19.324 0 19.5312L0 21.0938C0 21.301 0.08231 21.4997 0.228823 21.6462C0.375336 21.7927 0.57405
                        21.875 0.78125 21.875H21.0938C21.301 21.875 21.4997 21.7927 21.6462 21.6462C21.7927 21.4997
                        21.875 21.301 21.875 21.0938V19.5312C21.875 19.324 21.7927 19.1253 21.6462 18.9788C21.4997
                        18.8323 21.301 18.75 21.0938 18.75ZM21.0938 12.5H0.78125C0.57405 12.5 0.375336 12.5823 0.228823
                        12.7288C0.08231 12.8753 0 13.074 0 13.2812L0 14.8438C0 15.051 0.08231 15.2497 0.228823
                        15.3962C0.375336 15.5427 0.57405 15.625 0.78125 15.625H21.0938C21.301 15.625 21.4997 15.5427
                        21.6462 15.3962C21.7927 15.2497 21.875 15.051 21.875 14.8438V13.2812C21.875 13.074 21.7927
                        12.8753 21.6462 12.7288C21.4997 12.5823 21.301 12.5 21.0938 12.5ZM21.0938 6.25H0.78125C0.57405
                        6.25 0.375336 6.33231 0.228823 6.47882C0.08231 6.62534 0 6.82405 0 7.03125L0 8.59375C0 8.80095
                        0.08231 8.99966 0.228823 9.14618C0.375336 9.29269 0.57405 9.375 0.78125 9.375H21.0938C21.301
                        9.375 21.4997 9.29269 21.6462 9.14618C21.7927 8.99966 21.875 8.80095 21.875
                        8.59375V7.03125C21.875 6.82405 21.7927 6.62534 21.6462 6.47882C21.4997 6.33231 21.301 6.25
                        21.0938 6.25ZM21.0938 0H0.78125C0.57405 0 0.375336 0.08231 0.228823 0.228823C0.08231 0.375336 0
                        0.57405 0 0.78125L0 2.34375C0 2.55095 0.08231 2.74966 0.228823 2.89618C0.375336 3.04269 0.57405
                        3.125 0.78125 3.125H21.0938C21.301 3.125 21.4997 3.04269 21.6462 2.89618C21.7927 2.74966 21.875
                        2.55095 21.875 2.34375V0.78125C21.875 0.57405 21.7927 0.375336 21.6462 0.228823C21.4997 0.08231
                        21.301 0 21.0938 0Z" fill="#3A0062" />
                    </svg>
                </button>
            </div>
        </header>

        <main class="py-2 pt-15 relative">
            @yield('content')
        </main>

    </div>

    <script>
        const navtoggler = document.querySelector("button.navToggle");
        const menu = document.querySelector("nav.navigation");

        navtoggler.addEventListener("click", (e) => {
            e.preventDefault();
            menu.classList.toggle("right-[-100vw]");
            menu.classList.toggle("right-5");
        });
    </script>
</body>

</html>