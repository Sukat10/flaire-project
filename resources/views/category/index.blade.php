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
            <section class="py-5">
                <h2 class="uppercase font-bold text-2xl pb-5">{{$category->name}}</h2>
                <div class="flex flex-wrap gap-5">
                    @foreach ($category->templates as $template)
                    <div class="capitalize w-40 h-40 md:w-60 md:h-60 relative">
                        <a href="{{ route('templates.show',$template) }}" class="h-full w-full absolute top-0 left-0 rounded-lg overflow-hidden bg-app-blue bg-opacity-25">
                            <img src="{{$template->template}}" alt="" class="h-full w-full rounded-lg">
                        </a>
                        <p class="absolute break-words max-w-full max-h-full truncate p-2">{{$template->title}}</p>
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