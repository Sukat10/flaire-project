@extends('layouts.app')

@section('content')
<main class="flex flex-col py-20 container gap-10 text-center items-center justify-center">
    <div class="max-w-screen-xs w-1/2 flex ">
        <img src=" {{asset('images/loading.svg')}} " alt="coming soon" class="max-w-full max-h-full">
    </div>
    <div class="absolute flex items-center justify-center self-center">
        <h1 class="font-bold text-3xl md:text-5xl text-[#a3002e] uppercase mt-10"> coming soon </h1>
    </div>
</main>
@endsection