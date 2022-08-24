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

        @isset($users)
            <section class="my-5 flex flex-col gap-5">
                @foreach ($users as $user)
                    <div class="flex flex-wrap md:flex-nowrap h-fit hover:shadow-md rounded-md justify-between items-center p-3 py-5 relative gap-2">
                        <div class="flex flex-col gap-0 grow">
                            <h2 class="uppercase font-bold text-lg leading-none truncate">{{$user->name}}</h2>
                            <small class="truncate py-2">Is Admin : {{$user->role === 'admin' ? 'Yes' : 'No' }}</small>
                        </div>
                        {{-- open --}}
                        <a href="{{ route('users.show',$user) }}" class="h-full w-full absolute">
                        </a>

                        {{-- edit --}}
                        <a href="{{ route('users.edit',$user) }}" class="btn bg-app-blue rounded self-center block w-full md:max-w-max-content z-10 text-[white] p-2 hover:!shadow-lg font-semibold"> Edit
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