@extends('layouts.app')

@section('content')
<main class="container">
    <div class="w-full sm:px-6">

        <section>
            <h2>Daily Prompt post</h2>
            <div class="flex md:flex-wrap">
                <div class="w-[100px] h-[100px]">
                    <div></div>
                    <div><img src="{{ route('logout') }}" alt="" class="h-full w-full"></div>
                    <a href="#" class="h-full w-full">
                    </a>
                </div>
            </div>
        </section>
    </div>
</main>
@endsection