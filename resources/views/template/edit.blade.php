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

        <form action="{{ route('category.edit') }}" method="post" class="grow text-dark md:max-w-[75vw] md:mr-10 lg:m-0 lg:max-w-full flex flex-col">
            {{ csrf_field() }}
            <div class="flex flex-wrap p-2 px-3 gap-2">
                <label for="name" class=" self-center w-full md:w-fit "> Name / Title:</label>
                <input class="h-12 outline-none border-[#ccc] active:!border-[#3a0062] focus:!border-[#3a0062] border-0 border-b grow text-[black]" type="search" name="name"
                    placeholder="category name / title" />
            </div>

            <div class="flex flex-wrap p-2 px-3 gap-2">
                <label for="name" class=" self-start w-full md:w-fit "> Description:</label>
                <textarea class="min-h-[250px] resize-y outline-none border-[#ccc] active:!border-[#3a0062] focus:!border-[#3a0062] border-0 border-b grow text-[black] py-2" name="description"
                    placeholder="describe the category here"></textarea>
            </div>

            <div class="flex p-2 px-3 gap-2 justify-end pr-12 md:pr-0 ">
                <button type="reset" class="btn bg-app-pink rounded-md w-20 font-semibold">Clear</button>
                <button type="submit" class="btn bg-app-blue rounded-md text-[white] w-20 font-semibold">Save</button>
            </div>
        </form>
    </div>
</main>

@endsection