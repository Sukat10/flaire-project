@extends('layouts.app')

@section('content')
<main>
    <div class="w-full sm:px-6">
        @isset($user)
        <section class="py-5 flex flex-wrap md:flex-nowrap gap-5">
            <div class="flex flex-col md:w-[30%] items-center justify-end gap-3 pb-2 md:sticky top-0 self-start">
                <div class="rounded-full h-[150px] w-[150px] bg-app-red font-black text-6xl text-[white] flex items-center justify-center">
                    <h1>S.G</h1>
                </div>
                <h4 class="text-base font-semibold capitalize"> {{ Auth::user()->name }} </h4>
            </div>
            <form action="{{ route('users.update',$user) }}" method="post" class="grow text-dark md:max-w-[75vw] md:mr-10 lg:m-0 lg:max-w-full flex flex-col">
                @csrf

                @method('PUT')
                <div class="flex flex-wrap p-2 px-3 gap-2">
                    <label for="name" class=" self-center w-full md:w-fit "> Full Name:</label>
                    <input class="h-12 outline-none border-[#ccc] active:!border-[#3a0062] focus:!border-[#3a0062] border-0 border-b grow text-[black]" name="name"
                        placeholder="John Doe" value="{{$user->name}}" />
                    @if($errors->has('name'))
                        <small class="text-[red] block w-full">{{$errors->first('name')}}</small>
                    @endif
                </div>

                <div class="flex flex-wrap p-2 px-3 gap-2">
                    <label for="email" class=" self-center w-full md:w-fit "> Email:</label>
                    <input class="h-12 outline-none border-[#ccc] active:!border-[#3a0062] focus:!border-[#3a0062] border-0 border-b grow text-[black]" name="email"
                        placeholder="test@example.com" type="email" value="{{$user->email}}" />
                    @if($errors->has('email'))
                        <small class="text-[red] block w-full">{{$errors->first('email')}}</small>
                    @endif
                </div>

                <div class="flex flex-wrap p-2 px-3 gap-2">
                    <label for="name" class=" self-center w-full md:w-fit "> Phone:</label>
                    <input class="h-12 outline-none border-[#ccc] active:!border-[#3a0062] focus:!border-[#3a0062] border-0 border-b grow text-[black]" name="phone"
                        placeholder="01234567890" value="{{$user->phone}}" />
                    @if($errors->has('phone'))
                        <small class="text-[red] block w-full">{{$errors->first('phone')}}</small>
                    @endif
                </div>

                <div class="flex p-2 px-3 gap-2 justify-end pr-12 md:pr-0 ">
                    <button type="reset" class="btn bg-app-pink rounded-md w-20 font-semibold">Clear</button>
                    <button type="submit" class="btn bg-app-blue rounded-md text-[white] w-20 font-semibold">Save</button>
                </div>
            </form>
        </section>
        @endisset
    </div>
</main>

@endsection