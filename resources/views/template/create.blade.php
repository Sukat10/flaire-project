@extends('layouts.app')

@section('content')
<main>
    <div class="w-full sm:px-6">

        {{-- 
            'title',
            'cat_id',
            'content',
            'template', 
        --}}

        @if (session('status'))
        <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4"
            role="alert">
            {{ session('status') }}
        </div>
        @endif

        <form action="{{ route('templates.store') }}" method="post" class="grow text-dark md:max-w-[75vw] md:mr-10 lg:m-0 lg:max-w-full flex flex-wrap gap-2">
            {{ csrf_field() }}
            <div class="flex flex-wrap p-2 px-3 gap-2 grow w-[48%]">
                <label for="title" class=" self-center w-full md:w-fit ">  Title:</label>
                <input class="h-12 input grow text-[black]" name="title"
                    placeholder="category name / title" />
            </div>

            <div class="flex flex-wrap p-2 px-3 gap-2 grow w-[48%]">
                <label for="slug" class=" self-center w-full md:w-fit ">  Slug:</label>
                <input class="h-12 input grow text-[black]" name="slug"
                    placeholder="category_name_title" />
            </div>

            <div class="flex flex-wrap p-2 px-3 gap-2 w-[60%]">
                <label for="template" class=" self-center w-full md:w-fit ">  Template:</label>
                <input class="h-12 input grow text-[black]" name="template"
                    placeholder="link to the preview of the template design http://canva.com/ygwquig" />
            </div>

            <div class="flex flex-wrap p-2 px-3 gap-2 grow sm:shrink w-[30%]">
                <label for="cat_id" class=" self-center w-full md:w-fit ">  Category:</label>
                <select class="h-12 outline-none bg-[transparent] input grow text-[black]" name="cat_id"
                    placeholder="category name / title" >
                    <option value="">All</option>
                </select>
            </div>

            <div class="flex flex-wrap p-2 px-3 gap-2 w-full">
                <label for="link" class=" self-center w-full md:w-fit ">  Template Link:</label>
                <input class="h-12 input grow text-[black]" name="link"
                    placeholder="http://canva.com" />
            </div>

            <div class="flex flex-wrap p-2 px-3 gap-2 grow w-full">
                <label for="name" class=" self-start w-full md:w-fit "> Content:</label>
                <textarea class="min-h-[250px] resize-y input grow text-[black] py-2" name="description"
                    placeholder="type content here"></textarea>
            </div>

            <div class="flex p-2 px-3 gap-2 justify-end pr-12 md:pr-0 grow">
                <button type="reset" class="btn bg-app-pink rounded-md w-20 font-semibold">Clear</button>
                <button type="submit" class="btn bg-app-blue rounded-md text-[white] w-20 font-semibold">Save</button>
            </div>
        </form>
    </div>
</main>

@endsection