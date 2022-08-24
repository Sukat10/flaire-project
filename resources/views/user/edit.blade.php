@extends('layouts.app')

@section('content')
<main>
    <div class="w-full sm:px-6">
        @isset($category)
        <form action="{{ route('categories.update',$category) }}" method="post" class="grow text-dark md:max-w-[75vw] md:mr-10 lg:m-0 lg:max-w-full flex flex-col">
            @csrf

            @method('PUT')
            <div class="flex flex-wrap p-2 px-3 gap-2">
                <label for="name" class=" self-center w-full md:w-fit "> Name / Title:</label>
                <input class="h-12 outline-none border-[#ccc] active:!border-[#3a0062] focus:!border-[#3a0062] border-0 border-b grow text-[black]" name="name"
                    placeholder="category name / title" value="{{$category->name}}" />
                @if($errors->has('name'))
                    <small class="text-[red] block w-full">{{$errors->first('name')}}</small>
                @endif
            </div>

            <div class="flex flex-wrap p-2 px-3 gap-2">
                <label for="description" class=" self-start w-full md:w-fit "> Description:</label>
                <textarea class="min-h-[250px] resize-y outline-none border-[#ccc] active:!border-[#3a0062] focus:!border-[#3a0062] border-0 border-b grow text-[black] py-2" name="description"
                    placeholder="describe the category here"> {{$category->description}}</textarea>
                @if($errors->has('description'))
                    <small class="text-[red] block w-full">{{$errors->first('description')}}</small>
                @endif
            </div>

            <div class="flex p-2 px-3 gap-2 justify-end pr-12 md:pr-0 ">
                <button type="reset" class="btn bg-app-pink rounded-md w-20 font-semibold">Clear</button>
                <button type="submit" class="btn bg-app-blue rounded-md text-[white] w-20 font-semibold">Save</button>
            </div>
        </form>
        @endisset
    </div>
</main>

@endsection