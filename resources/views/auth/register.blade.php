@extends('layouts.welcome')

@section('content')
<section class="container flex justify-center items-center h-full w-full sm:mt-10">
    <div class="flex flex-wrap lg:flex-nowrap justify-items-center w-full gap-6 items-center px-3 pb-10 relative">
        <div class="p-5 grow text-center lg:text-left">
            <h1 class="text-app-blue text-3xl font-bold lg:text-5xl lg:uppercase">
                Sign up To <strong>FLAIRE</strong>
            </h1>
            <h3 class="text-lg lg:text-2xl font-semibold mt-3">
                Let’s Get You
                Started!!
            </h3>
            <p class="capitalize lg:text-xl">create your account</p>
        </div>
        
        <div class="flex md:w-[60vw] grow">
            <div class="w-full">
                <div class="flex flex-col break-words bg-white shadow-lg border border-[#dddddd] rounded-lg pt-10">

                    <form class="w-full flex flex-wrap gap-6 gap-x-2 sm:!px-10 container" method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="flex flex-wrap grow">
                            <label for="email" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                                {{ __('E-Mail Address') }}:
                            </label>

                            <input id="email" type="email" class="form-input w-full h-12 @error('email') border-red-500 @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>

                        <div class="flex flex-wrap grow">
                            <label for="phone" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                                {{ __('Phone Number') }}:
                            </label>

                            <input id="name" type="text" class="form-input w-full h-12 @error('phone')  border-red-500 @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="name" autofocus>

                            @error('phone')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>

                        <div class="flex flex-wrap grow md:w-[45%]">
                            <label for="password" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                                {{ __('Password') }}:
                            </label>

                            <input id="password" type="password" class="form-input w-full h-12 @error('password') border-red-500 @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>

                        <div class="flex flex-wrap grow md:w-[45%]">
                            <label for="password-confirm" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                                {{ __('Confirm Password') }}:
                            </label>

                            <input id="password-confirm" type="password" class="form-input w-full h-12" name="password_confirmation" required autocomplete="new-password">
                        </div>

                        <div class="flex flex-wrap grow">
                            <button type="submit" class="w-full font-bold btn bg-app-red py-5 rounded-xl text-[white]">
                                {{ __('Register') }}
                            </button>

                            <p class="w-full text-xs text-center text-gray-700 my-6 sm:text-sm sm:my-8">
                                {{ __('Already have an account?') }}
                                <a class="text-[#3A0062] hover:text-app-red no-underline hover:underline" href="{{ route('login') }}">
                                    {{ __('Login') }}

                                </a>
                            </p>
                        </div>
                    </form>

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