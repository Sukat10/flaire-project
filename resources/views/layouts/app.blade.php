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

<body class="bg-white h-screen antialiased leading-none font-sans">
    <div id="app">
        <header class="py-2 md:py-4 bg-app-red fixed w-full z-50">
            <div class="max-w-screen-xl mx-auto flex justify-between items-center px-6">
                <div class="hidden md:block">
                    <a href="{{ url('/') }}" class="text-lg font-semibold text-gray-100 no-underline">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <form action="{{ route('search') }}" method="get" class="flex-auto text-dark">
                    {{ csrf_field() }}
                    <div class="flex items-center rounded-md self-center bg-white p-2 px-3">
                        <i class="fa fa-search"></i>
                        <input class="px-4 h-12 outline-none border-none flex-grow" type="text" name="" id=""
                            placeholder="search flaire" style="padding: .3rem; border-radius:10px" />
                    </div>
                </form>
                <nav
                    class="space-x-2 text-gray-300 text-sm sm:text-base hidden md:block w-3/12 text-right capitalize">
                    @guest
                    <a class="no-underline hover:underline" href="{{ route('login') }}">{{ __('Login') }}</a>
                    @if (Route::has('register'))
                    <a class="no-underline hover:underline" href="{{ route('register') }}">{{ __('Register') }}</a>
                    @endif
                    @else
                    <a href="http://" class="no-underline hover:underline">
                        templates
                    </a>
                    <a href="http://" class="no-underline hover:underline">
                        instructions
                    </a>
                    <a href="http://" class="no-underline hover:underline">
                        menu
                    </a>
                    <span>{{ Auth::user()->name }}</span>

                    <a href="{{ route('logout') }}" class="no-underline hover:underline" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                        {{ csrf_field() }}
                    </form>
                    @endguest
                </nav>
            </div>
            <nav class="p-2 md:px-5 md:pt-5 pb-0 text-white container mx-auto">
                <ul
                    class="flex justify-around items-end text-sm font-bold gap-x-3 overflow-hidden overflow-x-auto scrolling-auto scroll-nav">
                    <li class="px-2 lg:px-3 flex items-center">
                        <a class="" href="#">All</a>
                    </li>
                </ul>
            </nav>

        </header>

        <main class="py-2 pt-20"></main>
        @yield('content')
        </main>

        <footer class="py-2 bg-white fixed bottom-0 w-full border-grey-200 border-t md:hidden">
            <nav class="flex content-center justify-around text-center uppercase">
                <a href="http://" class="block">
                    <div class="flex flex-col items-center justify-center">
                        <svg width="26" height="20" viewBox="0 0 26 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M12.1695 5.33712L4.16732 11.8755V18.9324C4.16732 19.1151 4.24048 19.2903 4.37072 19.4195C4.50095 19.5487 4.67758 19.6213 4.86176 19.6213L9.72548 19.6088C9.90905 19.6079 10.0848 19.5349 10.2143 19.4058C10.3438 19.2767 10.4165 19.102 10.4164 18.9199V14.7988C10.4164 14.616 10.4896 14.4408 10.6198 14.3116C10.7501 14.1824 10.9267 14.1098 11.1109 14.1098H13.8887C14.0728 14.1098 14.2495 14.1824 14.3797 14.3116C14.51 14.4408 14.5831 14.616 14.5831 14.7988V18.9168C14.5828 19.0075 14.6006 19.0973 14.6354 19.1812C14.6701 19.265 14.7212 19.3412 14.7857 19.4054C14.8503 19.4696 14.9269 19.5205 15.0113 19.5553C15.0957 19.59 15.1862 19.6079 15.2776 19.6079L20.1395 19.6213C20.3237 19.6213 20.5004 19.5487 20.6306 19.4195C20.7608 19.2903 20.834 19.1151 20.834 18.9324V11.8708L12.8335 5.33712C12.7395 5.26191 12.6223 5.22089 12.5015 5.22089C12.3807 5.22089 12.2635 5.26191 12.1695 5.33712ZM24.8097 9.78117L21.1812 6.81402V0.850013C21.1812 0.712975 21.1263 0.581551 21.0287 0.484651C20.931 0.387751 20.7985 0.333313 20.6604 0.333313H18.2298C18.0917 0.333313 17.9592 0.387751 17.8615 0.484651C17.7639 0.581551 17.709 0.712975 17.709 0.850013V3.97648L13.8231 0.804802C13.4502 0.50037 12.9823 0.333922 12.4993 0.333922C12.0164 0.333922 11.5485 0.50037 11.1756 0.804802L0.189019 9.78117C0.136279 9.82441 0.0926449 9.87754 0.0606102 9.93752C0.0285755 9.9975 0.00876769 10.0632 0.00231864 10.1307C-0.0041304 10.1983 0.00290567 10.2665 0.0230248 10.3314C0.043144 10.3962 0.0759519 10.4566 0.119574 10.5089L1.22634 11.8437C1.26985 11.8961 1.32336 11.9396 1.38381 11.9715C1.44426 12.0035 1.51047 12.0233 1.57864 12.0298C1.64681 12.0363 1.71561 12.0294 1.7811 12.0095C1.84659 11.9896 1.90748 11.9571 1.96029 11.9138L12.1695 3.57173C12.2635 3.49652 12.3807 3.4555 12.5015 3.4555C12.6223 3.4555 12.7395 3.49652 12.8335 3.57173L23.0432 11.9138C23.0959 11.9571 23.1567 11.9897 23.2221 12.0096C23.2875 12.0296 23.3562 12.0366 23.4243 12.0302C23.4924 12.0238 23.5586 12.0041 23.6191 11.9723C23.6795 11.9406 23.7331 11.8973 23.7767 11.845L24.8835 10.5101C24.927 10.4575 24.9597 10.3969 24.9796 10.3318C24.9995 10.2666 25.0062 10.1982 24.9993 10.1304C24.9925 10.0627 24.9722 9.99697 24.9396 9.93703C24.9071 9.87709 24.8629 9.82412 24.8097 9.78117Z"
                                fill="#A3002E" />
                        </svg>
                        <br>
                        <small class="text-xs">home</small>
                    </div>
                </a>
                <a href="http://" class="block">
                    <div class="flex flex-col items-center justify-center">
                        <svg width="25" height="26" viewBox="0 0 25 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M0 19.9902V22.0586C0 23.7685 4.19922 25.1588 9.375 25.1588C14.5508 25.1588 18.75 23.7685 18.75 22.0586V19.9902C16.7334 21.3998 13.0469 22.0586 9.375 22.0586C5.70312 22.0586 2.0166 21.3998 0 19.9902ZM15.625 6.55757C20.8008 6.55757 25 5.16733 25 3.45738C25 1.74742 20.8008 0.357178 15.625 0.357178C10.4492 0.357178 6.25 1.74742 6.25 3.45738C6.25 5.16733 10.4492 6.55757 15.625 6.55757ZM0 14.9087V17.4083C0 19.1182 4.19922 20.5085 9.375 20.5085C14.5508 20.5085 18.75 19.1182 18.75 17.4083V14.9087C16.7334 16.5557 13.042 17.4083 9.375 17.4083C5.70801 17.4083 2.0166 16.5557 0 14.9087ZM20.3125 15.4416C23.1104 14.9039 25 13.906 25 12.758V10.6896C23.8672 11.484 22.2021 12.0265 20.3125 12.3608V15.4416ZM9.375 8.10767C4.19922 8.10767 0 9.84185 0 11.9829C0 14.124 4.19922 15.8582 9.375 15.8582C14.5508 15.8582 18.75 14.124 18.75 11.9829C18.75 9.84185 14.5508 8.10767 9.375 8.10767ZM20.083 10.8349C23.0127 10.3117 25 9.28478 25 8.10767V6.03926C23.2666 7.25512 20.2881 7.90907 17.1533 8.06408C18.5938 8.75678 19.6533 9.68684 20.083 10.8349Z"
                                fill="#A3002E" />
                        </svg>
                        <br>
                        <small class="text-xs">instructions</small>
                    </div>
                </a>
                <a href="http://" class="block">
                    <div class="flex flex-col items-center justify-center">
                        <svg width="22" height="23" viewBox="0 0 22 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M21.0938 18.9345H0.78125C0.57405 18.9345 0.375336 19.0162 0.228823 19.1615C0.08231 19.3069 0 19.504 0 19.7096L0 21.2597C0 21.4652 0.08231 21.6623 0.228823 21.8077C0.375336 21.953 0.57405 22.0347 0.78125 22.0347H21.0938C21.301 22.0347 21.4997 21.953 21.6462 21.8077C21.7927 21.6623 21.875 21.4652 21.875 21.2597V19.7096C21.875 19.504 21.7927 19.3069 21.6462 19.1615C21.4997 19.0162 21.301 18.9345 21.0938 18.9345ZM21.0938 12.7341H0.78125C0.57405 12.7341 0.375336 12.8158 0.228823 12.9611C0.08231 13.1065 0 13.3036 0 13.5092L0 15.0593C0 15.2648 0.08231 15.4619 0.228823 15.6073C0.375336 15.7526 0.57405 15.8343 0.78125 15.8343H21.0938C21.301 15.8343 21.4997 15.7526 21.6462 15.6073C21.7927 15.4619 21.875 15.2648 21.875 15.0593V13.5092C21.875 13.3036 21.7927 13.1065 21.6462 12.9611C21.4997 12.8158 21.301 12.7341 21.0938 12.7341ZM21.0938 6.53371H0.78125C0.57405 6.53371 0.375336 6.61537 0.228823 6.76072C0.08231 6.90607 0 7.1032 0 7.30876L0 8.85886C0 9.06441 0.08231 9.26155 0.228823 9.4069C0.375336 9.55225 0.57405 9.63391 0.78125 9.63391H21.0938C21.301 9.63391 21.4997 9.55225 21.6462 9.4069C21.7927 9.26155 21.875 9.06441 21.875 8.85886V7.30876C21.875 7.1032 21.7927 6.90607 21.6462 6.76072C21.4997 6.61537 21.301 6.53371 21.0938 6.53371ZM21.0938 0.333313H0.78125C0.57405 0.333313 0.375336 0.41497 0.228823 0.56032C0.08231 0.70567 0 0.902807 0 1.10836L0 2.65846C0 2.86402 0.08231 3.06115 0.228823 3.2065C0.375336 3.35185 0.57405 3.43351 0.78125 3.43351H21.0938C21.301 3.43351 21.4997 3.35185 21.6462 3.2065C21.7927 3.06115 21.875 2.86402 21.875 2.65846V1.10836C21.875 0.902807 21.7927 0.70567 21.6462 0.56032C21.4997 0.41497 21.301 0.333313 21.0938 0.333313Z"
                                fill="#A3002E" />
                        </svg>


       
                 <br>
                        <small class="text-xs">menu</small>
                    </div>
                </a>
            </nav>
        </footer>
    </div>
</body>

</html>