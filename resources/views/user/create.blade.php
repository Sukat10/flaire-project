@extends('layouts.app')

@section('content')
<main>
    <div class="w-full sm:px-6">
        <section class="py-5 flex flex-wrap md:flex-nowrap gap-5">
            <form action="{{ route('users.store') }}" method="post" class="grow text-dark md:max-w-[75vw] md:mr-10 lg:m-0 lg:max-w-full flex flex-wrap">
                @csrf
                <div class="flex flex-wrap p-2 px-3 gap-2 grow w-full">
                    <label for="name" class=" self-center w-full md:w-fit "> Full Name:</label>
                    <input class="h-12 outline-none border-[#ccc] active:!border-[#3a0062] focus:!border-[#3a0062] border-0 border-b grow text-[black]" name="name"
                        placeholder="John Doe" name="email" value="{{ old('name') }}"  />
                    @error('name')
                        <small class="text-[red] block w-full">{{$message}}</small>
                    @enderror
                </div>

                <div class="flex flex-wrap p-2 px-3 gap-2 grow md:w-[48%] self-start">
                    <label for="email" class=" self-center w-full md:w-fit "> Email:</label>
                    <input class="h-12 outline-none border-[#ccc] active:!border-[#3a0062] focus:!border-[#3a0062] border-0 border-b grow text-[black]" name="email"
                        placeholder="test@example.com" type="email" name="email" value="{{ old('email') }}" />
                    @error('email')
                        <small class="text-[red] block w-full">{{ $message }}</small>
                    @enderror
                </div>

                <div class="flex flex-wrap p-2 px-3 gap-2 grow md:w-[48%] self-start">
                    <label for="name" class=" self-center w-full md:w-fit "> Phone:</label>
                    <input class="h-12 outline-none border-[#ccc] active:!border-[#3a0062] focus:!border-[#3a0062] border-0 border-b grow text-[black]" name="phone"
                        placeholder="01234567890" name="phone" value="{{ old('phone') }}" />
                    @error('phone')
                        <small class="text-[red] block w-full">{{ $message }}</small>
                    @enderror
                </div>

                <div class="flex flex-wrap p-2 px-3 gap-2 grow md:w-[48%] self-start">
                    <label for="password" class=" self-center w-full md:w-fit "> Password:</label>
                    <input class="h-12 outline-none border-[#ccc] active:!border-[#3a0062] focus:!border-[#3a0062] border-0 border-b grow text-[black]" name="password"
                        placeholder="********" name="phone" value="{{ old('password') }}"  type="password"  />
                    @error('password')
                        <small class="text-[red] block w-full">{{ $message }}</small>
                    @enderror
                </div>

                <div class="flex flex-wrap p-2 px-3 gap-2 grow md:w-[48%] self-start">
                    <label for="password" class=" self-center w-full md:w-fit "> Confirm Password:</label>
                    <input class="h-12 outline-none border-[#ccc] active:!border-[#3a0062] focus:!border-[#3a0062] border-0 border-b grow text-[black]"
                        placeholder="********" name="password_confirmation" type="password" autocomplete="new-password"/>
                    @error('password')
                        <small class="text-[red] block w-full">{{ $message }}</small>
                    @enderror
                </div>

                <div class="flex p-2 px-3 gap-2 justify-end pr-12 md:pr-0  mt-5 w-full">
                    <button type="reset" class="btn bg-app-pink rounded-md w-20 font-semibold">Clear</button>
                    <button type="submit" class="btn bg-app-blue rounded-md text-[white] w-20 font-semibold">Submit</button>
                </div>
            </form>
        </section>
    </div>
</main>

@endsection