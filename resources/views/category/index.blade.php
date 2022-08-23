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
                    <div class="flex flex-wrap md:flex-nowrap h-fit hover:shadow-md rounded-md justify-between items-center p-3 py-5 relative gap-2">
                        <h2 class="uppercase font-bold text-lg grow leading-none truncate">{{$category->name}}</h2>
                        <div class="grow h-fit w-full md:!w-[50%] md:!max-w-[50%]">
                            <p class="truncate py-2">{{$category->description}}</p>
                            <small class="flex flex-wrap gap-5">[{{$category->templates->count()}}] Template(s) </small>
                        </div>
                        {{-- open --}}
                        <a href="{{ route('categories.show',$category) }}" class="h-full w-full absolute">
                        </a>

                        {{-- edit --}}
                        @if(Auth::user()->role === 'admin')
                        <a href="{{ route('categories.edit',$category) }}" class="btn bg-app-blue rounded absolute -top-2 right-2 text-[white] p-2 hover:shadow-lg font-semibold"> Edit
                        </a>
                        @endif
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