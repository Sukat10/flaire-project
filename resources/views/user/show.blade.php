@extends('layouts.app')

@section('content')
<main>
    <div class="w-full sm:px-6">
        @isset($user)
        <section class="py-5 flex flex-wrap md:flex-nowrap gap-5 ">
            <div class="flex flex-col md:w-[30%] items-center justify-end gap-3 pb-2 md:sticky top-0 self-start">
                <div class="rounded-full h-[150px] w-[150px] bg-app-red font-black text-6xl text-[white] flex items-center justify-center">
                    <h1>S.G</h1>
                </div>
                <h4 class="text-base font-semibold capitalize"> {{ Auth::user()->name }} </h4>
                <a href="{{route('users.edit',$user)}}" class="btn p-2 bg-app-blue rounded-md text-[white] font-semibold container"> Edit</a>
            </div>
            <div class="grow flex flex-wrap gap-5 p-5">
                <div class="flex flex-col gap-2 w-full md:w-[45%]">
                    <small>Name :</small>
                    <div>{{Auth::user()->name}}</div>
                </div>
                <div class="flex flex-col gap-2 w-full md:w-[45%]">
                    <small>Email :</small>
                    <div>{{Auth::user()->email}}</div>
                </div>
                <div class="flex flex-col gap-2 w-full md:w-[45%]">
                    <small>Phone :</small>
                    <div>{{Auth::user()->phone}}</div>
                </div>
                <div class="flex flex-col gap-2">
                    <small>Role :</small>
                    <div>{{Auth::user()->role}}</div>
                </div>
                <div class="flex flex-col gap-2 w-full md:w-[45%]">
                    <small>Joined :</small>
                    <div>{{Auth::user()->created_at}}</div>
                </div>
                <div class="flex flex-col gap-2 w-full md:w-[45%]">
                    <small>Updated :</small>
                    <div>{{Auth::user()->updated_at}}</div>
                </div>
            </div>
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