@extends('layouts.app')

@section('content')
<main>
    <div class="w-full sm:px-6">

        @if (session('status'))
        <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4 session-alert transition-all duration-700"
            role="alert" onclick="close()">
            {{ session('status') }}
        </div>
        @endif

        @isset($categories)
            @foreach ($categories as $category)
            <section>
                <h2 class="uppercase font-bold text-2xl">{{$category->name}}</h2>
                <div class="flex md:flex-wrap">
                    @foreach ($category->templates as $template)
                    <div class="w-[100px] h-[100px]">
                        {{$template->title}}
                        <a href="" class="h-full w-full">
                            <img src="" alt="" class="h-full w-full">
                        </a>
                    </div>
                    @endforeach
                </div>
            </section>
            @endforeach
        @endisset
    </div>

    <script>
        const alert = document.querySelector('.session-alert')
        const close = () => {
            alert.classList.toggle('hidden')
        }
    </script>
</main>
@endsection