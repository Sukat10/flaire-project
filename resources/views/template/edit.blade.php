@extends('layouts.app')

@section('content')
<main>
    <div class="w-full sm:px-6">
        @isset($template)
        <form action="{{ route('templates.update',$template) }}" method="post" class="w-full text-dark md:max-w-[75vw] md:mr-10 lg:m-0 lg:max-w-full flex flex-wrap gap-2 items-start">
            @csrf

            @method('PUT')
            <div class="flex flex-wrap p-2 px-3 gap-2 grow md:w-[48%]">
                <label for="title" class=" self-center w-full md:w-fit ">  Title:</label>
                <input class="h-12 input grow text-[black]" name="title"
                    placeholder="category name / title" value="{{$template->title}}" />
                @if($errors->has('title'))
                    <small class="text-[red] block w-full">{{$errors->first('title')}}</small>
                @endif
            </div>

            <div class="flex flex-wrap p-2 px-3 gap-2 grow md:w-[48%]">
                <label for="slug" class=" self-center w-full md:w-fit ">  Slug:</label>
                <input class="h-12 input grow text-[black]" name="slug"
                    placeholder="category_name_title" value="{{$template->slug}}" />
                @if($errors->has('title')||$errors->has('slug'))
                    <small class="text-[red] block w-full">{{$errors->first('title')}} {{ $errors->first('slug')}}</small>
                @endif
            </div>

            <div class="flex flex-wrap p-2 px-3 gap-2 grow md:w-[60%]">
                <label for="template" class=" self-center w-full md:w-fit ">  Template:</label>
                <input class="h-12 input grow text-[black]" name="template"
                    placeholder="link to the preview of the template design http://canva.com/ygwquig" value="{{$template->template}}" />
                @if($errors->has('template'))
                    <small class="text-[red] block w-full">{{$errors->first('template')}}</small>
                @endif
            </div>

            <div class="flex flex-wrap p-2 px-3 gap-2 grow sm:shrink w-[30%]">
                <label for="cat_id" class=" self-center w-full md:w-fit ">  Category:</label>
                <select class="h-12 outline-none bg-[transparent] input grow text-[black]" name="cat_id"
                    placeholder="category name / title" >
                    <option value="" hidden>All</option>
                    @if($categories)
                        @foreach($categories as $category)
                            <option value="{{$category->id}}" selected="{{$category->id === $template->cat_id }}">{{$category->name}}</option>
                        @endforeach
                    @endif
                </select>
                @if($errors->has('cat_id'))
                    <small class="text-[red] block w-full">{{$errors->first('cat_id')}}</small>
                @endif
            </div>

            <div class="flex flex-wrap p-2 px-3 gap-2 w-full">
                <label for="link" class=" self-center w-full md:w-fit ">  Template Link:</label>
                <input class="h-12 input grow text-[black]" name="link"
                    placeholder="http://canva.com" value="{{$template->link}}" />
                @if($errors->has('link'))
                    <small class="text-[red] block w-full">{{$errors->first('link')}}</small>
                @endif
            </div>

            <div class="flex flex-wrap p-2 px-3 gap-2 grow w-full">
                <label for="content" class=" self-start w-full md:w-fit "> Content:</label>
                <textarea class="min-h-[250px] resize-y input grow text-[black] py-2" name="content"
                    placeholder="type content here" >{{$template->content}}</textarea>
                @if($errors->has('content'))
                    <small class="text-[red] block w-full">{{$errors->first('content')}}</small>
                @endif
            </div>

            <div class="flex p-2 px-3 gap-2 justify-end pr-12 md:pr-0 grow">
                <button type="reset" class="btn bg-app-pink rounded-md w-20 font-semibold">Clear</button>
                <button type="submit" class="btn bg-app-blue rounded-md text-[white] w-20 font-semibold">Save</button>
            </div>
        </form>
        @endisset
    </div>
</main>

@endsection