@extends('layouts.app')

@section('content')
<main class="container">
    <div class="w-full sm:px-6">

        @if (session('status'))
        <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4"
            role="alert">
            {{ session('status') }}
        </div>
        @endif

        <section>
            <h2>Daily Prompt post</h2>
            <div class="flex md:flex-wrap">
                <div class="w-[100px] h-[100px]">
                    <a href="#" class="h-full w-full">
                        <img src="{{ route('logout') }}" alt="" class="h-full w-full">
                    </a>
                </div>
            </div>
        </section>

        <section>
            <h2>Sales post</h2>
            <div class="flex md:flex-wrap">
                <div class="w-[100px] h-[100px]">
                    <a href="#" class="h-full w-full">
                        <img src="{{ route('logout') }}" alt="" class="h-full w-full">
                    </a>
                </div>
            </div>
        </section>

        <section>
            <h2>Holiday post</h2>
            <div class="flex md:flex-wrap">
                <div class="w-[100px] h-[100px]">
                    <a href="#" class="h-full w-full">
                        <img src="{{ route('logout') }}" alt="" class="h-full w-full">
                    </a>
                </div>
            </div>
        </section>

        <section>
            <h2>Sales video</h2>
            <div class="flex md:flex-wrap">
                <div class="w-[100px] h-[100px]">
                    <a href="#" class="h-full w-full">
                        <img src="{{ route('logout') }}" alt="" class="h-full w-full">
                    </a>
                </div>
            </div>
        </section>
    </div>
</main>


@endsection