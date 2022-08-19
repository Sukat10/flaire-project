@extends('layouts.app')

@section('content')
<main>
    <div class="w-full sm:px-6">

        @if (session('status'))
        <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4"
            role="alert">
            {{ session('status') }}
        </div>
        @endif

        @foreach([1,2,3,4,5,6,7,8,9,0,1,2,3,4,5,6,7,8,9,0] as $i)
        <button class="my-2 p-4 block">{{$i}}</button>
        @endforeach

        @isset($categories)
        <section>
            <h2>Daily Prompt post</h2>
            <div class="flex md:flex-wrap">
                @foreach ($categories as $category)
                @if ($category->category->name === "daily prompt post")
                <div class="w-[100px] h-[100px]">
                    <a href="" class="h-full w-full">
                        <img src="{{ route('template.show') }}" alt="" class="h-full w-full">
                    </a>
                </div>
                @endif
                @endforeach

            </div>
        </section>
        @endisset
    </div>
</main>
@endsection