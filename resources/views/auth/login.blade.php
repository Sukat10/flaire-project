@extends('layouts.welcome')

@section('content')
<section class="container py-6 sm:mt-10">
    <div class="pb-15 md:pb-10">
        <div class="text-center md:text-left">
            <h1 class="text-app-blue font-bold text-3xl">Welcome Back!! </h1>
            <p class="py-3 capitalize ">sign in to continue</p>
        </div>

        <div class="flex flex-wrap-reverse md:flex-nowrap justify-center content-center gap-5 md:gap-10">
            <div class="w-full md:w-[60%]">
                <div class="flex flex-col break-words bg-white rounded-lg shadow-lg md:shadow-none border border-[#dddddd] md:border-none">

                    <form class="w-full px-6 md:px-0 space-y-6 sm:px-10 sm:space-y-8" method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="flex flex-wrap">
                            <label for="email" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                                {{ __('E-Mail Address') }}:
                            </label>

                            <input id="email" type="email" class="form-input w-full h-12 @error('email') border-red-500 @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>

                        <div class="flex flex-wrap">
                            <label for="password" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                                {{ __('Password') }}:
                            </label>

                            <input id="password" type="password" class="form-input w-full h-12 @error('password') border-red-500 @enderror" name="password" required>

                            @error('password')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>

                        <div class="flex flex-wrap items-center gap-2">
                            <label class="inline-flex items-center text-sm text-gray-700" for="remember">
                                <input type="checkbox" name="remember" id="remember" class="form-checkbox" {{ old('remember') ? 'checked' : '' }}>
                                <span class="ml-2">{{ __('Remember Me') }}</span>
                            </label>

                            @if (Route::has('password.request'))
                            <a class="text-sm text-blue-500 hover:text-blue-700 whitespace-no-wrap no-underline hover:underline ml-auto" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                            @endif
                        </div>

                        <div class="flex flex-wrap">
                            <button type="submit" class="w-full font-bold btn bg-app-red py-5 text-[white] rounded-xl">
                                {{ __('Login') }}
                            </button>

                            @if (Route::has('register'))
                            <p class="w-full text-xs text-center text-gray-700 my-6 sm:text-sm sm:my-8">
                                {{ __("Don't have an account?") }}
                                <a class="text-[#3A0062] hover:text-app-red no-underline hover:underline" href="{{ route('register') }}">
                                    {{ __('Register') }}
                                </a>
                            </p>


                            @endif
                        </div>
                    </form>

                </div>
            </div>
            <div class="w-full md:w-[40%] flex items-center justify-center">
                <div class="self-center w-full max-w-xs md:max-w-fit">

                    <img src="{{asset('images/access_account.png')}}" alt="" srcset="" class="w-full border-[#ccc] border-0 border-b-2  md:border-none">
                </div>
            </div>

        </div>
    </div>
</section>

<script>
    document.body.classList.add('bg-app-pink')
    const header = document.querySelector("header.header")
    header.classList.remove('bg-[white]')
    header.classList.add('bg-app-pink')
</script>
@endsection