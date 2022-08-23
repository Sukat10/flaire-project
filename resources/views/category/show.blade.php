@extends('layouts.app')

@section('content')
<main>
    <div class="w-full sm:px-6">

        @isset($category)
        <section class="py-5">
            <h2 class="uppercase font-bold text-xl pb-6">{{$category->name}}</h2>
            @foreach ($category->templates as $template)
                <div class="flex flex-wrap md:flex-nowrap border-[#ccc] border-0 border-b mb-8">
                    <div class="grow md:w-[60%] p-3 truncate break-all flex flex-col">
                        <div class="max-h-44 md:h-44 truncate py-3 w-full grow">{{$template->content}}</div>
                        <button class="btn bg-app-blue rounded-2xl text-[white] font-semibold block w-full my-3"> COPY TEXT TO CLIPBOARD</button>
                    </div>
                    <div class="grow md:!shrink md:w-[40%] relative p-3">
                        <div class="container h-44 overflow-hidden flex items-center justify-center hover:items-start hover:overflow-y-auto cursor-pointer transition-all duration-500">
                            <img src="{{$template->template}}" alt="{{$template->title}}" class="max-w-full rounded-lg"/>
                        </div>
                        <a class="btn bg-app-blue rounded-2xl text-[white] block w-full my-3 font-semibold" href="{{$template->link}}"> EDIT DESIGN</a>
                    </div>
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