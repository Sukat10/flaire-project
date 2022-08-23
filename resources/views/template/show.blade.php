@extends('layouts.app')

@section('content')
<main>
    <div class="w-full sm:px-6">

        @isset($template)
        <section class="py-5">
           <div class="sticky top-35 px-5 flex justify-between items-center">
                <h2 class="uppercase font-bold text-xl truncate grow w-[60%]" title="{{$template->title}}">{{$template->title}}</h2>
                <a class="px-5 py-3 bg-app-blue rounded-md text-[white] shrink shadow-md font-semibold my-3" href="{{route('templates.edit',$template)}}"> EDIT</a>
           </div>

            <div class="flex flex-wrap md:flex-nowrap mb-8">
                <div class="grow md:!shrink md:w-[40%] p-3">
                    <div class="container overflow-hidden flex items-center justify-center hover:items-start cursor-pointer hover:scale-110 ">
                        <img src="{{$template->template}}" alt="{{$template->title}}" class="max-w-full rounded-lg"/>
                    </div>
                </div>
                <div class="grow md:w-[60%] p-3 truncate break-all flex flex-col">
                    <div class="py-3 w-full grow">{{$template->content}}</div>
                </div>
            </div>
        </section>
        @endisset
    </div>
</main>
@endsection