@extends('layouts.welcome')

@section('content')
<main class="container max-w-xl sm:mt-10">
    <div class="flex">
        <div class="w-full">

            @if (session('status'))
            <div class="text-sm text-green-700 bg-green-100 px-5 py-6 sm:rounded sm:border sm:border-green-400 sm:mb-6" role="alert">
                {{ session('status') }}
            </div>
            @endif

            <section class="flex flex-col break-words bg-white sm:border-1 rounded-md shadow-lg lg:min-w-max-content">
                <h2 class="font-semibold bg-gray-200 text-gray-700 py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md">
                    {{ __('Reset Password') }}
                </h2>

                <form class="w-full px-6 space-y-6 sm:px-10 sm:space-y-8" method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <div class="flex flex-wrap">
                        <label for="email" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            {{ __('E-Mail Address') }}:
                        </label>

                        <input id="email" type="email" class="form-input w-full @error('email') border-red-500 @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <div class="flex flex-wrap justify-around items-center  pb-6 sm:pb-10 gap-5">
                        <p class="mt-4 text-xs text-blue-500 hover:text-blue-700 whitespace-no-wrap no-underline hover:underline sm:text-sm sm:order-0 sm:m-0">
                            <a class="text-blue-500 hover:text-blue-700 no-underline" href="{{ route('login') }}">
                                {{ __('Back to login') }}
                            </a>
                        </p>

                        <button type="submit" class="w-full select-none font-bold whitespace-no-wrap p-3 rounded-lg text-base leading-normal no-underline text-gray-100 text-[white] bg-app-red sm:w-auto sm:px-4">
                            {{ __('Send Password Reset Link') }}
                        </button>
                    </div>
                </form>
            </section>
        </div>
    </div>
</main>

<script>
    document.body.classList.add('bg-app-pink')
    const header = document.querySelector("header.header")
    header.classList.remove('bg-[white]')
    header.classList.add('bg-app-pink')
</script>
@endsection