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

        @isset($templates)
            <section class="py-5">
                @foreach ($templates as $template)
                    <div class="flex flex-wrap md:flex-nowrap h-fit hover:shadow-md rounded-md justify-around items-center p-3 py-5 relative gap-2">
                        <div class="capitalize w-20 !min-w-[80px] block h-20 relative self-start">
                            <img src="{{$template->template}}" alt="" class="h-full w-full rounded-lg">
                        </div>
                        <div class="grow flex flex-col px-2">
                            <h2 class="uppercase font-bold text-lg leading-none truncate">{{$template->title}}</h2>
                            <small class="font-semibold text-xs capitalize">({{$template->category->name}})</small>
                        </div>
                        <div class="grow h-fit w-full md:!w-[50%] md:!max-w-[50%]">
                            <p class="truncate py-2">{{$template->content}}</p>
                        </div>
                        {{-- open --}}
                        <a href="{{ route('templates.show',$template) }}" class="h-full w-full absolute">
                        </a>
                        {{-- edit --}}
                        @if(Auth::user()->role === 'admin')
                        <a href="{{ route('templates.edit',$template) }}" class="btn bg-app-blue rounded self-center block w-full md:max-w-max-content z-10 text-[white] p-2 hover:!shadow-lg font-semibold"> Edit
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