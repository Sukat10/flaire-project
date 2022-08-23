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
            <section class="my-5 flex flex-col gap-5">
                @foreach ($categories as $category)
                    <div class="flex h-fit hover:shadow-md rounded-md justify-between items-center p-3 py-5 relative">
                        <h2 class="uppercase font-bold text-lg grow leading-none truncate">{{$category->name}}</h2>
                        <small class="flex flex-wrap gap-5 text-right">[{{$category->templates->count()}}] <span class="hidden md:block">Template(s)</span> </small>
                        <a href="{{ route('categories.show',$category) }}" class="h-full w-full absolute">
                        </a>
                    </div>
                @endforeach
            </section>
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