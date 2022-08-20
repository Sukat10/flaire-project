@extends('layouts.welcome')

@section('content')
<main class="flex flex-wrap md:flex-nowrap py-20 container gap-10">

    <div class="flex flex-col justify-around text-center md:text-left">
        <div class="flex flex-col justify-around md:justify-start mb-3">
            <h1 class="text-3xl font-bold uppercase w-full block  mb-4">Welcome To flaire</h1>
            <h2 class="text-3xl font-bold uppercase block max-w-md md:w-full mx-auto md:mx-0">social media content done for you</h2>
        </div>
        <p class="text-2xl my-6 md:my-3">
            All in one social media marketing tool.
            creating social media content has never
            been this easy. With just a click you have
            something to post
        </p>

        <div class="self-end md:self-center w-full md:hidden pb-10">
            <img src="{{asset('images/access_account.png')}}" alt="" srcset="" class="w-full border-[#ccc] border-0 border-b-2  md:border-none max-w-xs mx-auto">
        </div>

        <h6 class="font-semibold  text-3xl">Let Get You Started</h6>

        <div class="flex flex-col md:flex-row justify-between my-3 md:mt-10">
            <a class="btn py-5 bg-app-red rounded-xl font-semibold text-[white] block my-2 w-full md:w-5/12" href="{{ route('login') }}">SIGN IN</a>
            @if (Route::has('register'))
            <a class="btn py-5 bg-app-red rounded-xl font-semibold text-[white] block my-2 w-full md:w-5/12" href="{{ route('register') }}">SIGN UP</a>
            @endif
        </div>
    </div>
    <div class="content-center items-center justify-center bottom-20 right-10 hidden md:flex grow">
        <div class="self-end md:self-center ">
            <img src="{{asset('images/access_account.png')}}" alt="access account" class="h-full w-full">
        </div>
    </div>
</main>
@endsection